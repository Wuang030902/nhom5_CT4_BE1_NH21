<?php
class Chart extends Db{
    public function getQTYByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM chart WHERE id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editChart($id,$qty)
    {
        $sql = self::$connection->prepare("UPDATE `chart` SET `qty` = ?  WHERE  `id` = ?");
        $sql->bind_param("ii",$qty,$id);
        return $sql->execute(); //return an object
    }
    public function addChart($id,$qty)
    {
        $sql = self::$connection->prepare("INSERT INTO `chart`(`id`,`qty`) VALUES (?,?)");
        $sql->bind_param("ii", $id,$qty);
        return $sql->execute(); //return an object
    }
}
