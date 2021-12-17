<?php
class OrderDetails extends Db{
    public function addOrderDetails($order_id,$id,$product_id,$qty)
    {
        $sql = self::$connection->prepare("INSERT INTO `order_details` (`order_id`,`id`,`product_id`,`qty`) VALUES (?,?,?,?)");
        $sql->bind_param("isii", $order_id,$id,$product_id,$qty);
        return $sql->execute(); //return an object
    }
    public function getOrderDetailsByOrderID($order_id,$id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `order_details` WHERE `order_id` = ? AND `id` = ?");
        $sql->bind_param("is", $order_id,$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
