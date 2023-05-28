<?php

require_once('./core/model.php');

class Supplier extends Model
{
    public static function create($supplier)
    {
        $sql = "INSERT INTO suppliers (name) VALUES (?)";
        $params = ['s', $supplier];
        self::executeQuery($sql, $params);
    }
}
