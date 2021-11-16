<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsTypeID1()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE type_id =1 LIMIT 4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsTypeID2()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE type_id =2 LIMIT 4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsTypeID3()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE type_id =3 LIMIT 4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsTypeID4()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE type_id =4 LIMIT 4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTenNewProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE `products`.`manu_id`=`manufactures`.`manu_id` AND `feature` = 1 LIMIT 5");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products 
        WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByTypeId($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
