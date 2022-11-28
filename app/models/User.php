<?php

require_once('./core/model.php');

class User extends Model
{
    public static function checkUser($email, $password)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";


        $result = mysqli_fetch_array(mysqli_query($conn, $sql));

        $_SESSION['id'] = $result['id'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['level'] = $result['level'];

        return mysqli_query($conn, $sql)->num_rows == 1;
    }

    public static function checkPassword($password)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $sql = "SELECT * FROM users WHERE password = '$password' LIMIT 1";
        return mysqli_query($conn, $sql)->num_rows == 1;
    }

    public static function updateInformation($id, $name, $phone_number, $email, $gender, $birthday)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "UPDATE users SET name = '$name', email = '$email', gender = '$gender', 
        birthday = '$birthday', phone_number = '$phone_number' WHERE id = $id";
        mysqli_query($conn, $sql);
    }

    public static function updatePassword($id, $password)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "UPDATE users SET password = '$password' WHERE id = $id";
        mysqli_query($conn, $sql);
    }
}
