<?php

require_once('./app/models/User.php');
require_once('./app/models/Address.php');
require_once('./app/models/Order.php');
require_once('./app/models/Rating.php');
class Customer
{
    public function account()
    {
        if (isset($_SESSION['id'])) {
            $orders = Order::getByUserID($_SESSION['id']);
            $ratings = Rating::getByUserID($_SESSION['id']);
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

    public function address()
    {
        if (isset($_SESSION['id'])) {
            $addresses = Address::getByUserID($_SESSION['id']);
            require("./app/views/user/customer/address.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addressNew()
    {
        if (isset($_SESSION['id'])) {
            require("./app/views/user/customer/address_new.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addressNewPost()
    {
        if (isset($_SESSION['id'])) {
            Address::store(
                $_POST['name'],
                $_POST['phone_number'],
                $_POST['address'],
                $_POST['city'],
                $_POST['district'],
                $_POST['ward'],
                isset($_POST['default']) ? 1 : 0,
            );
            header("Location:/Fahasa/customer/address");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addressEdit($id)
    {
        if (isset($_SESSION['id'])) {
            $address = Address::getByID($id);
            if ($address['user_id'] == $_SESSION['id']) {
                require("./app/views/user/customer/address_edit.php");
            } else {
                header("Location:/Fahasa/");
            }
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addressEditPost($id)
    {
        if (isset($_SESSION['id'])) {
            Address::update(
                $id,
                $_POST['name'],
                $_POST['phone_number'],
                $_POST['address'],
                $_POST['city'],
                $_POST['district'],
                $_POST['ward'],
                isset($_POST['default']) ? 1 : 0,
            );
            header("Location:/Fahasa/customer/address");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function addressDelete($id)
    {
        if (isset($_SESSION['id'])) {
            Address::destroy($id);
            header("Location:/Fahasa/customer/address");
        } else {
            header("Location:/Fahasa/");
        }
    }
}
