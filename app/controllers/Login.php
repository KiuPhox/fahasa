<?php

require_once('./app/models/User.php');

class Login
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            header("Location:/Fahasa/");
        } else {
            require("./app/views/user/home/login.php");
        }
    }

    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (User::checkUser($email, $password)) {
                header("Location:/Fahasa/");
            } else {
                header("Location:/Fahasa/login");
            }
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['level']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
