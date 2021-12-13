<?php
class Order extends Db{
    public function getAllOrder()
    {
        $sql = self::$connection->prepare("SELECT * FROM `order`");
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
    public function addOrder($id,$sanPham,$tongtien,$trangthai)
    {
        $sql = self::$connection->prepare("INSERT INTO `order`(`id`,`sanpham`,`tongtien`,`trangthai`) VALUES (?,?,?,?)");
        $sql->bind_param("ssis", $id,$sanPham,$tongtien,$trangthai);
        return $sql->execute(); //return an object
    }
    public function deleteCart($id,$product_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `cart` WHERE `product_id` = ? AND `id` = ?");
        $sql->bind_param("is",$product_id,$id);
        return $sql->execute(); //return an object
    }
    public function deleteCartByMaDonHang($madonhang)
    {
        $sql = self::$connection->prepare("DELETE FROM `order` WHERE `madonhang` = ?");
        $sql->bind_param("i",$madonhang);
        return $sql->execute(); //return an object
    }
}
