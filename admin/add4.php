<?php
require "config.php";
require "models/db.php";
require "models/account.php";

$account = new Account;

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
   
    
            
            
    $account->addAccount($email,$password,$firstname,$lastname);
         
    
    
    

    
}
header("location:user.php");


