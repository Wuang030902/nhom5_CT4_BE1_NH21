<?php
class Products extends Db
{
    public function getAllProducts()
    {
        // Tính số thứ tự trang bắt đầu 

        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id ");

        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get3ProductsByManu($manu_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE manu_id = ?  LIMIT ?,?");
        $sql->bind_param("iii", $manu_id, $firstLink, $perPage);
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
    public function getProductsByManu($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editProduct($id,$name,$manu_id,$type_id,$price,$image,$desc)
    {
        $sql = self::$connection->prepare("UPDATE `products` SET `name`= ?, `manu_id`= ?, `type_id` =?, `price`= ?,`image`= ? , `description` = ?  WHERE `id` = ?");
        $sql->bind_param("siiissi", $name,$manu_id,$type_id,$price,$image,$desc,$id);
        return $sql->execute(); //return an object
    }
    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE  FROM `products` WHERE `products`.`id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function getProductById($id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addProduct($name,$manu_id,$type_id,$price,$image,$desc)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`) VALUES (?,?,?,?,?,?)");
        $sql->bind_param("siiiss", $name,$manu_id,$type_id,$price,$image,$desc);
        return $sql->execute(); //return an object
    }
}
