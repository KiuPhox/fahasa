<?php

require_once('./app/models/User.php');

class Customer
{
    public function account()
    {
        if (isset($_SESSION['id'])) {
            require("./app/views/user/customer/account.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function accountEdit()
    {
        if (isset($_SESSION['id'])) {
            $user = User::getByID($_SESSION['id']);
            require("./app/views/user/customer/account_edit.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function accountEditPost()
    {
        if (isset($_SESSION['id'])) {
            User::updateInformation(
                $_SESSION['id'],
                $_POST['name'],
                $_POST['phone_number'],
                $_POST['email'],
                $_POST['gender'],
                $_POST['birthday']
            );
            $_SESSION['name'] = $_POST['name'];
            header("Location:/Fahasa/customer/account/edit");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function accountUpdatePaswword()
    {
        if (
            isset($_SESSION['id']) &&
            $_POST['password'] == $_POST['confirmation'] &&
            User::checkPassword($_POST['current_password'])
        ) {
            User::updatePassword($_SESSION['id'], $_POST['password']);
            header("Location:/Fahasa/customer/account/edit");
        } else {
            header("Location:/Fahasa/");
        }
    }
}
