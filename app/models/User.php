<?php

require_once('./core/model.php');
require 'vendor/autoload.php';

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/phpmailer/phpmailer/src/OAuth.php';
require './vendor/phpmailer/phpmailer/src/POP3.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader



class User extends Model
{
    public static function create($email, $password)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $email_verification_code = md5(microtime());

        $sql = "INSERT INTO users (email, password, email_verification_code) VALUES('$email', '$hash_password', '$email_verification_code');";
        mysqli_query($conn, $sql);
        self::sendEmailVerification($email_verification_code, $email);
        $id = mysqli_insert_id($conn);
        $sql = "UPDATE users SET name = 'User_" . $id . "' WHERE id = $id;";
        mysqli_query($conn, $sql);
    }

    public static function sendEmailVerification($email_verification_code, $email)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $_ENV['PHPMAILER_USER'];                     //SMTP username
            $mail->Password   = $_ENV['PHPMAILER_PASS'];                               //SMTP password
            $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
            $mail->Port       = 587;                           //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($_ENV['PHPMAILER_USER'], 'Fahasa');
            $mail->addAddress($email, 'Anh Tuan');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Xác nhận đăng ký tài khoản Fahasa';
            $mail->Body    = 'Nhấn vào link để xác nhận tài khoản Fahasa <a href="http://localhost/Fahasa/verify?token=' . $email_verification_code . '">' . 'http://localhost/Fahasa/verify?token=' . $email_verification_code . '</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public static function verifyToken($email_verification_code)
    {
        $sql = "UPDATE users SET is_verified = 1 WHERE email_verification_code = ?";
        $params = ['s', $email_verification_code];
        self::executeQuery($sql, $params);
    }

    public static function checkVerification($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $params = ['s', $email];
        $result = mysqli_fetch_array(self::executeQuery($sql, $params));

        if (password_verify($password, $result['password'])) {
            if ($result['is_verified'] == 1) {
                $_SESSION['id'] = $result['id'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['level'] = $result['level'];
                return true;
            }
        }
        return false;
    }

    public static function checkUser($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $params = ['s', $email];
        $result = mysqli_fetch_array(self::executeQuery($sql, $params));

        if ($result != null) {
            if (password_verify($password, $result['password'])) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public static function checkEmailExists($email)
    {
        $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
        $params = ['s', $email];
        return self::executeQuery($sql, $params)->num_rows == 1;
    }

    public static function checkPassword($password)
    {
        $sql = "SELECT * FROM users WHERE password = ? LIMIT 1";
        $params = ['s', $password];
        return self::executeQuery($sql, $params)->num_rows == 1;
    }

    public static function updateInformation($id, $name, $phone_number, $gender, $birthday)
    {
        $sql = "UPDATE users SET name = ?, gender = ?, birthday = ?, phone_number = ? WHERE id = ?";
        $params = ['ssssi', $name, $phone_number, $gender, $birthday, $id];
        self::executeQuery($sql, $params);
    }

    public static function updatePassword($id, $password)
    {
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        $params = ['si', password_hash($password, PASSWORD_DEFAULT), $id];
        self::executeQuery($sql, $params);
    }
}
