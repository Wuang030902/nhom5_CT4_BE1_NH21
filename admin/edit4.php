<?php 
require "config.php";
require "models/db.php";
require "models/account.php";
$account = new Account;
if(isset($_POST['submit'])){
    
    $password = md5($_POST['password']);
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $account->editUser($_GET['id'],$password,$first,$last);
    
}
header('location:user.php');