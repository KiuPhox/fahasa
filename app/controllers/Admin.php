<?php
require_once('./app/models/Book.php');
require_once('./app/models/Publisher.php');
require_once('./app/models/Supplier.php');
require_once('./app/models/Category.php');
require_once('./app/models/User.php');
require_once('./app/models/Rating.php');
require_once('./app/models/Order.php');
class Admin
{
    public function index()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            $users = User::getAll();
            $orders = Order::getAll();
            $new_orders = 0;
            $new_users = 0;

            foreach ($users as $user) {
                if (date('Ymd') == date('Ymd', strtotime($user['created_at'])))
                    $new_users++;
            }

            foreach ($orders as $order) {
                if (date('Ymd') == date('Ymd', strtotime($order['created_at'])))
                    $new_orders++;
            }


            require("./app/views/admin/index.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function books()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            $books = Book::getAll();
            $publishers = Publisher::getAll();
            $suppliers = Supplier::getAll();
            $categories = Category::getAll();
            require("./app/views/admin/book/index.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function users()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            $users = User::getAll();
            require("./app/views/admin/user/index.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function ratings()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            $ratings = Rating::getAll();
            require("./app/views/admin/rating/index.php");
        } else {
            header("Location:/Fahasa/");
        }
    }

    public function orders()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 0) {
            $orders = Order::getAll();
            require("./app/views/admin/order/index.php");
        } else {
            header("Location:/Fahasa/");
        }
    }
}
