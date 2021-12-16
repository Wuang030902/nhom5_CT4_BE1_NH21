<?php
class OrderDetails extends Db{
    public function addOrderDetails($order_id,$id,$product_id,$qty)
    {
        $sql = self::$connection->prepare("INSERT INTO `order_details` (`order_id`,`id`,`product_id`,`qty`) VALUES (?,?,?,?)");
        $sql->bind_param("isii", $order_id,$id,$product_id,$qty);
        return $sql->execute(); //return an object
    }
}
