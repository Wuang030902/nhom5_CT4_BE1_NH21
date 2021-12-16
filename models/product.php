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
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` =1 LIMIT 0,4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsTypeID2()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` =1 LIMIT 4,4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsTypeID3()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` =1 LIMIT 8,4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsTypeID4()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` =1 LIMIT 8,4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTenNewProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE `products`.`manu_id`=`manufactures`.`manu_id` AND `feature` = 1 LIMIT 2");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword,$type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ? AND `type_id` = ?");
        $keyword = "%$keyword%";
        $sql->bind_param("si", $keyword,$type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search3($keyword,$page,$perPage,$type_id)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ? AND `type_id` = ? LIMIT ?,?");
        $keyword = "%$keyword%";
        $sql->bind_param("siii", $keyword,$type_id,$firstLink,$perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function searchAll($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search3All($keyword,$page,$perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?  LIMIT ?,?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword,$firstLink,$perPage);
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
    public function getProductByTypeId6($type_id,$id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? AND `id` !=? LIMIT 2");
        $sql->bind_param("ii", $type_id,$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByTypeId7($manu_id,$id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ? AND `id` !=? LIMIT 2");
        $sql->bind_param("ii", $manu_id,$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByTypeId6Rand($type_id,$id,$dau,$cuoi)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? AND `id` !=? LIMIT ?,?");
        $sql->bind_param("iiii", $type_id,$id,$dau,$cuoi);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get3ProductByTypeId($type_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu 
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? LIMIT ?,?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function paginate($url, $total, $perPage)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<li><a href='$url&page=$j'> $j </a></li>";
        }
        return $link;
    }
    public function getProductByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `id` = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductsByManu($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByTypeIdGioiHan($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? LIMIT 1");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
