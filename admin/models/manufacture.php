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
    
}
