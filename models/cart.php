<?php
class Cart extends Db{
    public function getAllCart()
    {
        $sql = self::$connection->prepare("SELECT * FROM cart");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editCart($id,$qty,$product_id)
    {
        $sql = self::$connection->prepare("UPDATE `cart` SET `qty` = ?  WHERE `product_id` = ? AND `id` = ?");
        $sql->bind_param("iis",$qty,$product_id,$id);
        return $sql->execute(); //return an object
    }
    public function addCart($id,$product_id,$qty)
    {
        $sql = self::$connection->prepare("INSERT INTO `cart`(`id`,`product_id`,`qty`) VALUES (?,?,?)");
        $sql->bind_param("sii", $id,$product_id,$qty);
        return $sql->execute(); //return an object
    }
    public function deleteCart($id,$product_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `cart` WHERE `product_id` = ? AND `id` = ?");
        $sql->bind_param("is",$product_id,$id);
        return $sql->execute(); //return an object
    }
}
