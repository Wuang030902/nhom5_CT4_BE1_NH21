<?php
require "config.php";
require "models/db.php";
require "models/account.php";

$account = new Account ;
if(isset($_POST['submit'])){
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $first_name = $_POST['first_name']; 
    $last_name = $_POST['last_name']; 

    $password = md5($password);
    //Thêm tài khoản
    $account->addAccount($email,$password,$first_name,$last_name);
    header('location:index.php');
}
?>