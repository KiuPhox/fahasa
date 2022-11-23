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

        return mysqli_query($conn, $sql)->num_rows == 1;
    }
}
