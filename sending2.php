<?php
session_start();
$as2 = session_id();
//ini_set('display_errors', 0);
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

	require_once('configs/functions.php');
	require_once('configs/fonctions.php');

function VerifierAdresseMail($adresse2) 
{ 
   $Syntaxe2='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
   if(preg_match($Syntaxe2,$adresse2)) 
      return true; 
   else 
     return false; 
}

//Attention: you may want to use stronger function here to 
//purify the requested parameters and protect against injections.
//Example: $email	= clean_this($_REQUEST["email"]);
 
$email2	= trim(htmlspecialchars($_POST["email2"]));
$etel2	= trim(htmlspecialchars($_POST["etel2"]));
 
 $date2= date('d/m/y');
// Lets connect to mySQL ==> replace with your own values for Server/Host, database, username, password
 /*$pdbHost = "127.0.0.1";
$pdbUserName = "root";
$pdbPassword = "";
$pdbName    ="niv";*/

$pdbHost2 = "127.0.0.1";
$pdbUserName2 = "undeplus_use0711";
$pdbPassword2 = "@aqwz12345";
$pdbName2    ="undeplus_niv";




//  You can use a different table (and fields for name and email). 
//  But change the table name and field names in the SQL queries below.

//  connect to mySQL
$conlink2 = mysql_connect($pdbHost2, $pdbUserName2, $pdbPassword2);
if(!$conlink2) {die('<span class=errormessage>Unable to connect to '.$pdbHost2.'</span><br>');}
mysql_select_db($pdbName2, $conlink2);
//  Check if subscriber exists already
$SQL2= "select * from mytab where idse='".$as2."' order by id desc limit 1";
$result2	= mysql_query($SQL2);
$req2 = mysql_fetch_array($result2);
if(!$result2) {die('Problem in SQL: '.$SQL2);  }    //just ccking if there was a problem with your query
 
 $SQL22= "INSERT into nletter VALUES ('','".utf8_decode($req2['nam'])."','".$email2."','".$etel2."','', '".$date2."')";
    mysql_query($SQL22);
	
$resu2= "select * from resultat where id='".$_GET['xvar2']."' order by id desc limit 1";
$resus2	= mysql_query($resu2);
$rest2 = mysql_fetch_array($resus2);
 
 

   
 $subject2 = 'RESULTAT DE VOTRE ANALYSE DE LA PEAU';
 $subject22 = 'ANALYSE DE LA PEAU : NOUVELLE PARTICIPATION';
$message2 = '<div style="width:80%; display:block;   margin-left:auto; margin-right:auto; color:#fff; font-family:Segoe, Verdana, sans-serif" align="center"  >

<div style="width:100%; display:block;background:#F4F4F4; padding:50px;float:left">

<div style="width:100%; display:block; background:#0f66b9;float:left">

<div style="width:100%; display:block; float:left">
<img src="http://undeplus.net/vaseline/images/header_680.png" width="100%" />
</div>

<div style="width:100%; display:inline;   float:left">
 
 <div style="width:65%; display:block;   margin-left:15px; margin-bottom:20px;  float:left">
 <div style="font-size:14px; margin-bottom:30px">RESULTAT DE L\'ANALYSE DE LA PEAU</div>
  <div style="font-size:34px; margin-bottom:30px">'.$rest2['tit'].'</div>
 <div style="font-size:12px; margin-bottom:30px; color:#caddf5;"><b style="color:#fff">'.utf8_decode($req2['nam']).'</b>, vous avez une <b style="color:#fff">'.$rest2['tit'].'</b>.</div>
 
<div style="font-size:12px; margin-bottom:30px; color:#caddf5;">'.$rest2['desc2'].'</div>
</div>

 <div style="width:30%; display:block;   float:left">
<img src="http://undeplus.net/vaseline/images/'.$rest2['img'].'" width="100%" />
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

$message22 = '<div style="width:80%; display:block;   margin-left:auto; margin-right:auto; color:#fff; font-family:Segoe,Verdana, sans-serif"  >

<div style="width:100%; display:block;background:#F4F4F4; padding:50px;float:left">

<div style="width:100%; display:block; background:#0f66b9;margin-top:30px;float:left">

<div style="width:100%; display:block; float:left">
<img src="http://undeplus.net/vaseline/images/header_680.png" width="100%" />
</div>

<div style="width:100%; display:inline;   float:left" align="center">
 
 <div style="width:90%; display:block;   margin-left:15px;  float:left">
 <div style="font-size:14px; margin-bottom:30px">NOUVELLE PARTICIPATION</div>
  <div style="font-size:24px; margin-bottom:30px">ANALYSE DE LA PEAU EN 60 SECONDES</div>
 <div style="font-size:12px; margin-bottom:30px; color:#caddf5;"><b style="color:#fff">'.utf8_decode($req2['nam']).'</b><br/><b style="color:#fff">'.$email2.'</b>.</div>
 
 
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


$headers2 = "From: \"VASELINE\"<contact@unilever.ci>\n";
$headers2 .= "Reply-To:  \n";
$headers2 .= "Content-Type: text/html; charset=\"utf-8\"";
mail($email2, $subject2, $message2, $headers2);	
mail('michel.kw@live.fr', $subject22, $message22, $headers2);				  
   
    

 
mysql_close($conlink2);
 
 
 
?>
	