<?php
require_once('./app/models/Order.php');

class OrderController
{
    public function destroy($id)
    {
        Order::destroy($id);
    }
}
