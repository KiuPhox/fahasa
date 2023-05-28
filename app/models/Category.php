<?php

require_once('./core/model.php');

class Category extends Model
{
    public static function create($category)
    {
        $conn = self::connect();
        $sql = "INSERT INTO categories (name) VALUES (?)";
        $params = ['s', $category];
        self::executeQuery($sql, $params);
    }
}
