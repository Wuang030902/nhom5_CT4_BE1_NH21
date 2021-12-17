<?php
class OrderDetails extends Db{
    public function getAllOrderDetails()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM order_details");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delOrderDetails($order_id)
    {
        $sql = self::$connection->prepare("DELETE  FROM `order_details` WHERE `order_details`.`order_id`= ?");
        $sql->bind_param("i", $order_id);
        return $sql->execute(); //return an object
    }
    public function addOrderDetails($order_id,$id,$product_id,$qty)
    {
        $sql = self::$connection->prepare("INSERT INTO `order_details` (`order_id`,`id`,`product_id`,`qty`) VALUES (?,?,?,?)");
        $sql->bind_param("isii", $order_id,$id,$product_id,$qty);
        return $sql->execute(); //return an object
    }
    public function getOrderDetailsById($order_id){
        $sql = self::$connection->prepare("SELECT * FROM `order_details` WHERE `order_id` = ?");
        $sql->bind_param("i", $order_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editOrderDetail($order_id,$id,$product_id,$qty)
    {
        $sql = self::$connection->prepare("UPDATE `order_details` SET  `id` = ?, `product_id` = ?, `qty` = ? WHERE `order_id` = ?");
        $sql->bind_param("siii", $id,$product_id,$qty,$order_id);
        return $sql->execute(); //return an object
    }
}