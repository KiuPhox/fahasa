<?php

class Cart
{
    public function index()
    {
        require("./app/views/user/home/cart.php");
    }

    public function addToCart()
    {
        $book_id = $_POST['book_id'];
        $quantity = $_POST['quantity'];

        if (empty($_SESSION['cart'])) {
            $_SESSION['cart'][$book_id] = $quantity;
        } else {
            $_SESSION['cart'][$book_id] += $quantity;
        }
        var_dump($_SESSION['cart']);
    }
}
