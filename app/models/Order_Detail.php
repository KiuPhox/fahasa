<?php

require_once('./core/model.php');

class Order_Detail extends Model
{
    public static function getByOrderID($order_id)
    {
        $sql = "SELECT * FROM order_details WHERE order_id = ?";
        $params = ['i', $order_id];
        return self::executeQuery($sql, $params);
    }
}
