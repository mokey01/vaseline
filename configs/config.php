<?php

$serveur='127.0.0.1';	
$user='undeplus_use0711';	
$mdp='@aqwz12345';	
$base='undeplus_niv';
 
 

@$connect=mysql_connect($serveur, $user, $mdp) or die ('Erreur : '.mysql_error());
@mysql_select_db($base) or die ('Erreur : '.mysql_error());
 
?>