<?php 
require "config.php";
require "models/db.php";
require "models/account.php";
$account = new Account;
if(isset($_GET['id'])){
    $account->delUser($_GET['id']);
}
header('location:user.php');