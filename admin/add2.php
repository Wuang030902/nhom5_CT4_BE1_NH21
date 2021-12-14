<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";

$manufacture = new Manufacture;
$getAllManu = $manufacture->getAllManu();
// var_dump($getAllManu);
// var_dump($manufacture);
if(isset($_POST['submit'])){
   
    
            
            $manu_name = $_POST['manu_name'];
    $manufacture->addManufacture($manu_name);
         
    
    
    

    
}
header("location:manufacture.php");


