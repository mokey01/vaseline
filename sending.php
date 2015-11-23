<?php
session_start();
$as = session_id();
//ini_set('display_errors', 0);
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

	require_once('configs/functions.php');
	require_once('configs/fonctions.php');

function VerifierAdresseMail($adresse) 
{ 
   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
   if(preg_match($Syntaxe,$adresse)) 
      return true; 
   else 
     return false; 
}

//Attention: you may want to use stronger function here to 
//purify the requested parameters and protect against injections.
//Example: $email	= clean_this($_REQUEST["email"]);
 
$email	= trim(htmlspecialchars($_POST["email"]));
$etel	= trim(htmlspecialchars($_POST["etel"]));
 
 $date= date('d/m/y');
// Lets connect to mySQL ==> replace with your own values for Server/Host, database, username, password
 /*$pdbHost = "127.0.0.1";
$pdbUserName = "root";
$pdbPassword = "";
$pdbName    ="niv";*/

$pdbHost = "127.0.0.1";
$pdbUserName = "undeplus_use0711";
$pdbPassword = "@aqwz12345";
$pdbName    ="undeplus_niv";



//  You can use a different table (and fields for name and email). 
//  But change the table name and field names in the SQL queries below.

//  connect to mySQL
$conlink = mysql_connect($pdbHost, $pdbUserName, $pdbPassword);
if(!$conlink) {die('<span class=errormessage>Unable to connect to '.$pdbHost.'</span><br>');}
mysql_select_db($pdbName, $conlink);
//  Check if subscriber exists already
$SQL= "select * from mytab where idse='".$as."' order by id desc limit 1";
$result	= mysql_query($SQL);
$req = mysql_fetch_array($result);
if(!$result) {die('Problem in SQL: '.$SQL);  }    //just ccking if there was a problem with your query
 
 $SQL2= "INSERT into nletter VALUES ('','".utf8_decode($req['nam'])."','".$email."','".$etel."','".$_GET['xvar']."', '".$date."')";
    mysql_query($SQL2);
	
	$resu= "select * from resultat where id='".$_GET['xvar']."' order by id desc limit 1";
$resus	= mysql_query($resu);
$rest = mysql_fetch_array($resus);
	
   
 $subject = 'RESULTAT DE VOTRE ANALYSE DE LA PEAU';
 $subject2 = 'ANALYSE DE LA PEAU : NOUVELLE PARTICIPATION';
$message = '<div style="width:80%; display:block;   margin-left:auto; margin-right:auto; color:#fff; font-family:Segoe, Verdana, sans-serif" align="center"  >

<div style="width:100%; display:block;background:#F4F4F4; padding:50px;float:left">

<div style="width:100%; display:block; background:#0f66b9;float:left">

<div style="width:100%; display:block; float:left">
<img src="http://undeplus.net/vaseline/images/header_680.png" width="100%" />
</div>

<div style="width:100%; display:inline;   float:left">
 
 <div style="width:65%; display:block;   margin-left:15px; margin-bottom:20px;  float:left">
 <div style="font-size:14px; margin-bottom:30px">RESULTAT DE L\'ANALYSE DE LA PEAU</div>
  <div style="font-size:34px; margin-bottom:30px">'.$rest['tit'].'</div>
 <div style="font-size:12px; margin-bottom:30px; color:#caddf5;"><b style="color:#fff">'.utf8_decode($req['nam']).'</b>, vous avez une <b style="color:#fff">'.$rest['tit'].'</b>.</div>
 
<div style="font-size:12px; margin-bottom:30px; color:#caddf5;">'.$rest['desc2'].'</div>
</div>

 <div style="width:30%; display:block;   float:left">
<img src="http://undeplus.net/vaseline/images/'.$rest['img'].'" width="100%" />
</div>
 
</div>


</div>

<div style="width:100%; display:block; padding-top:20px; padding-bottom:30px; background:#5088c3; float:left">
 
 <div style="width:100%; display:block;   float:left">
 
 <div style="width:45%; display:block; margin-left:20px;  float:left">
 <div style="font-size:14px;  ">&copy; Unilever 2016.Tous droits reserves</div>
 
  
</div>

 <div style="width:30%; display:block; margin-right:20px;  float:right" align="right">
<div>
<table width="200" border="0">
  <tr>
    <td align="right" style="font-size:12px; color:#fff">Contactez-nous |</td>
    <td align="left"  ><a href="https://www.facebook.com/VaselineZA" style="text-decoration:none;color:#caddf5;font-size:12px;font-family:Gotham,  Helvetica, Arial, sans-serif;" target="_blank" class=""><img style="vertical-align:middle;" src="https://skin.vaseline.co.za/images/facebook.jpg" alt="facebook logo"></a></td>
  </tr>
</table>

 </div>
</div>
 
</div>
 
</div>

</div>

</div>';

$message2 = '<div style="width:80%; display:block;   margin-left:auto; margin-right:auto; color:#fff; font-family:Segoe,Verdana, sans-serif" align="center"  >

<div style="width:100%; display:block;background:#F4F4F4; padding:50px;float:left">

<div style="width:100%; display:block; background:#0f66b9;margin-top:30px;float:left">

<div style="width:100%; display:block; float:left">
<img src="http://undeplus.net/vaseline/images/header_680.png" width="100%" />
</div>

<div style="width:100%; display:inline;   float:left" align="center">
 
 <div style="width:90%; display:block;   margin-left:15px;  float:left">
 <div style="font-size:14px; margin-bottom:30px">NOUVELLE PARTICIPATION</div>
  <div style="font-size:24px; margin-bottom:30px">ANALYSE DE LA PEAU EN 60 SECONDES</div>
 <div style="font-size:12px; margin-bottom:30px; color:#caddf5;"><b style="color:#fff">'.$email.'</b><br/><b style="color:#fff">'.utf8_decode($req['nam']).'</b>.</div>
 
 
</div>

  
 
</div>


</div>

<div style="width:100%; display:block; padding-top:20px; padding-bottom:30px; background:#5088c3; float:left">
 
 <div style="width:100%; display:block;   float:left">
 
 <div style="width:45%; display:block; margin-left:20px;  float:left">
 <div style="font-size:14px;  ">&copy; Unilever 2016.Tous droits reserves</div>
 
  
</div>

 <div style="width:30%; display:block; margin-right:20px;  float:right" align="right">
<div>
 <a href="https://www.facebook.com/VaselineZA" style="text-decoration:none;color:#caddf5;font-size:12px;font-family:Gotham,Helvetica, Arial, sans-serif;" target="_blank" class=""><img style="vertical-align:middle;" src="https://skin.vaseline.co.za/images/facebook.jpg" alt="facebook logo"></a> 

 </div>
</div>
 
</div>
 
</div> 

</div>

</div>';


$headers = "From: \"VASELINE\"<contact@unilever.ci>\n";
$headers .= "Reply-To:  \n";
$headers .= "Content-Type: text/html; charset=\"utf-8\"";
mail($email, $subject, $message, $headers);	
mail('michel.kw@live.fr', $subject2, $message2, $headers);				  
   
    

 
mysql_close($conlink);
 
 
 
?>
	