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
                if (User::checkVerification($email, $password)) {
                    header("Location:/Fahasa/");
                } else {
                    header("Location:/Fahasa/login?error=Vui lòng xác nhận email");
                }
            } else {
                header("Location:/Fahasa/login?error=Email hoặc mật khẩu sai");
            }
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function register()
    {
        if (
            isset($_POST['email']) && isset($_POST['password']) &&
            isset($_POST['password-confirm']) && $_POST['password'] == $_POST['password-confirm']
        ) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (User::checkEmailExists($email)) {
                return "Email đã được sử dụng";
            } else {
                User::create($email, $password);
                return "Vui lòng xác nhận email để đăng nhập";
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
