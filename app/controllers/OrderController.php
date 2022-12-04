<?php
require_once('./app/models/Order.php');

class OrderController
{
    public function destroy($id)
    {
        if (isset($_SESSION['id']) && $_SESSION['level'] == 0)
            Order::destroy($id);
    }

    public function confirm($id)
    {
        if (isset($_SESSION['id']) && $_SESSION['level'] == 0)
            Order::confirm($id);
    }

    public function cancel($id)
    {
        if (isset($_SESSION['id'])) {
            $order = Order::getByID($id);
            if ($_SESSION['id'] == $order['user_id']) {
                Order::cancel($id);
                header("Location:/Fahasa/customer/account");
            } else {
                header("Location:/Fahasa/");
            }
        } else {
            header("Location:/Fahasa/");
        }
    }
}
