<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/account.php";
$account = new Account;
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($account->checkLogin($email,$password)){
        $_SESSION['email'] = $email;
    }
    header('location:index.php');
}
?>