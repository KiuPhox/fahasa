<?php

require_once('./core/model.php');

class Address extends Model
{
    public static function update($id, $name, $phone_number, $address, $city, $district, $ward, $default)
    {
        if ($default == 1) {
            $sql = "UPDATE addresses SET is_default = 0 WHERE user_id = ? AND is_default = 1";
            $params = ['i', $_SESSION['id']];
            self::executeQuery($sql, $params);
        }

        $sql = "UPDATE addresses SET name = ?, phone_number = ?, address = ?, 
        city = ?, district = ?, ward = ?, is_default = ? WHERE id = ?";
        $params = ['ssssssii', $name, $phone_number, $address, $city, $district, $ward, $default, $id];
        self::executeQuery($sql, $params);
    }

    public static function store($name, $phone_number, $address, $city, $district, $ward, $default)
    {
        if ($default == 1) {
            $sql = "UPDATE addresses SET is_default = 0 WHERE user_id = ? AND is_default = 1";
            $params = ['i', $_SESSION['id']];
            self::executeQuery($sql, $params);
        }

        $sql = "INSERT INTO addresses (name, phone_number, address, city, district, ward, is_default, user_id)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $params = ['ssssssii', $name, $phone_number, $address, $city, $district, $ward, $default, $_SESSION['id']];
        self::executeQuery($sql, $params);
    }
}
