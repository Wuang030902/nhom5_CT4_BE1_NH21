<?php
class Manufacture extends Db{
    public function getAllManu()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delManufacture($id)
    {
        $sql = self::$connection->prepare("DELETE  FROM `manufactures` WHERE `manufactures`.`manu_id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function addManufacture($manu_name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `manufactures`(`manu_name`) 
        VALUES (?)");
        $sql->bind_param("s", $manu_name);
        return $sql->execute(); //return an object
    }
}
