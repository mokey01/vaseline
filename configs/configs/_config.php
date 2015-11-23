<?php
require('configs/db.class.php');
 $DB= new DB();
$panier = new panier($DB);
?>