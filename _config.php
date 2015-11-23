<?php
require('configs/db.class.php');
require('configs/panier.class.php');
$DB= new DB();
$panier = new panier($DB);
?>