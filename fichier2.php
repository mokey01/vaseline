<?php
session_start();
$a2 = session_id();

require('configs/config.php');
	require_once('configs/functions.php');
	require_once('configs/fonctions.php');
 
$name2=$_POST['name2'];
$age2=$_POST['age2'];
 $date2= date('d/m/y');
/*$password=$_POST['password'];
$gender=$_POST['gender'];*/

 
$products2 = "INSERT into mytab VALUES ('','".$a2."', '".$name2."', '".$age2."','', '".$date2."')";
 mysql_query($products2);

 
 
?>

