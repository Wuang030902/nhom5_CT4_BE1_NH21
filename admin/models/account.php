<?php
class Account extends Db{
    public function addAccount($email,$password,$first,$last)
    {
        $sql = self::$connection->prepare("INSERT INTO `account`(`email`, `password`, `first_name`, `last_name`) VALUES (?,?,?,?)");
        $sql->bind_param("ssss", $email,$password,$first,$last);
        return $sql->execute(); //return an object
    }
    public function checkLogin($email,$password){
        $sql = self::$connection->prepare("SELECT * FROM account WHERE `email` = ? AND `password` = ?");
        $password = md5($password);
        $sql->bind_param("ss",$email,$password);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->num_rows;
        if($items == 1){
            return true;
        }
        else{
            return false;
        }
    }
    public function getAllAccount()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM account");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAccounttByTypeEmail($email)
    {
        $sql = self::$connection->prepare("SELECT * FROM account WHERE email = ?");
        $sql->bind_param("i", $$email);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delUser($email)
    {
        $sql = self::$connection->prepare("DELETE  FROM `account` WHERE `account`.`email`= ?");
        $sql->bind_param("s", $email);
        return $sql->execute(); //return an object
    }
    public function getUserByEmail($email){
        $sql = self::$connection->prepare("SELECT * FROM `account` WHERE `email` = ?");
        $sql->bind_param("s", $email);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editUser($email,$password,$first,$last)
    {
        $sql = self::$connection->prepare("UPDATE `account` SET `password`= ? , `first_name`=?,`last_name`=?  WHERE `email` = ?");
        $sql->bind_param("ssss", $password,$first,$last,$email);
        return $sql->execute(); //return an object
    }
}
