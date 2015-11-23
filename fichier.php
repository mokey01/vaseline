<?php
session_start();
$a = session_id();

require('configs/config.php');
require_once('configs/functions.php');
require_once('configs/fonctions.php');
	

 $name=$_POST['name'];
$age=$_POST['age'];
 $date= date('d/m/y');
/*$password=$_POST['password'];
$gender=$_POST['gender'];*/

 
$products = "INSERT into mytab VALUES ('','".$a."', '".$name."', '".$age."','', '".$date."')";
 mysql_query($products);

 
 
 
?>