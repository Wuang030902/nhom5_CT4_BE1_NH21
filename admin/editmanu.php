<?php 
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
if(isset($_POST['submit'])){
    
    $manu_name = $_POST['manu_name'];
    $manufacture->editManufacture($_GET['id'],$manu_name);
}
header('location:manufacture.php');