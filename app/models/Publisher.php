<?php

require_once('./core/model.php');

class Publisher extends Model
{
    public static function create($publisher)
    {
        $sql = "INSERT INTO publishers (name) VALUES (?)";
        $params = ['s', $publisher];
        self::executeQuery($sql, $params);
    }
}
