<?php

$serveur='127.0.0.1';	
$user='MC95_ousers0815';	
$mdp='fD6ps$24';	
$base='MC95_obams0815';
 
 

@$connect=mysql_connect($serveur, $user, $mdp) or die ('Erreur : '.mysql_error());
@mysql_select_db($base) or die ('Erreur : '.mysql_error());
 
?>