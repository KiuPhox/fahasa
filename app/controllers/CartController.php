<?php
require_once('./app/models/Cart.php');
require_once('./app/models/Book.php');
class CartController
{
    public function index()
    {
        $total = 0;
        $allChecked = true;
        $paymentCheck = false;
        $cart = $_SESSION['cart'];

        foreach ($cart as $id => $book) {
            if ($book['checked'] == "false") {
                $allChecked = false;
            } else {
                $paymentCheck = true;
            }
        }

        require("./app/views/user/home/cart.php");
    }

    public function addToCart()
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
        $checked = $_POST['checked'];


        if (empty($_SESSION['cart'][$id])) {
            $book = Book::getByID($id);
            $_SESSION['cart'][$id]['title'] = $book['title'];
            $_SESSION['cart'][$id]['image'] = $book['image'];
            $_SESSION['cart'][$id]['price'] = $book['price'];
            $_SESSION['cart'][$id]['discount'] = $book['discount'];
            $_SESSION['cart'][$id]['checked'] = $checked;
            $_SESSION['cart'][$id]['quantity'] = $quantity;
        } else {
            $_SESSION['cart'][$id]['quantity'] += $quantity;
        }
    }

    public function addQuantity()
    {
        $id = $_POST['id'];
        $_SESSION['cart'][$id]['quantity']++;
    }

    public function subtractQuantity()
    {
        $id = $_POST['id'];
        $_SESSION['cart'][$id]['quantity']--;
        if ($_SESSION['cart'][$id]['quantity'] == 0) {
            unset($_SESSION['cart'][$id]);
        }
    }

    public function toggleCheckBook()
    {
        $id = $_POST['id'];
        if ($_SESSION['cart'][$id]['checked'] == "true") {
            $_SESSION['cart'][$id]['checked'] = "false";
        } else {
            $_SESSION['cart'][$id]['checked'] = "true";
        }
    }

    public function checkAll()
    {
        $check = $_POST['check'];

        foreach ($_SESSION['cart'] as $id => $book) {
            $_SESSION['cart'][$id]['checked'] = $check;
        }
    }

    public function deleteItem()
    {
        $id = $_POST['id'];
        unset($_SESSION['cart'][$id]);
    }
}
