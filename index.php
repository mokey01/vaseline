<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>VASELINE | ANALYSE DE LA PEAU EN 60 SENCONDES</title>
<meta name="description" content="">
        <meta name="keywords" content="vaseline, analyse de peau, unilever, skin analysis"/>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
 <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />
    <link href="images/favico.jpg" rel="SHORTCUT ICON"/>
    <meta property="og:title" content="VASELINE | ANALYSE DE LA PEAU EN 60 SENCONDES" />
<meta property="og:url" content="http://skin.unilever.ci" />
 <meta property="og:description" content="" />
<meta property="og:site_name" content="UNILEVER" />
    <meta property="og:image" content="http://skin.unilever.ci/images/analyse-de-peau-vaseline.jpg">
 <meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="470">
 <meta property="og:image:height" content="246">
 <link rel="image_src" href="http://skin.unilever.ci/images/analyse-de-peau-vaseline.jpg" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
     <script> 
	$(document).ready(function(){
		// $('#div1').show();
$('.showSingle3').on('click', function () {
    $('.targetDiv').hide();
    $('#div' + $('.showSingle3').data('target')).show();	 
});
});
	</script>
    <script type="text/javascript" >
$(function() {
$(".submit").click(function() {
var name = $("#name").val();
var age = $("#age").val();
var dataString=$("#form").serialize();
$.ajax({
type: "POST",
url: "fichier.php",
data: dataString,
success: function(data){ 
 if(name=='ENTREZ VOTRE NOM' || name=='' || age =='' ){
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();}
if(name.match(' ')){
	$('.success').fadeOut(200).hide();
$('.error2').fadeOut(200).show();
}
else
{
$("#loading").fadeIn(200).show();
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
$('#forme').fadeOut(200).hide();
$('#enter').fadeIn(200).show();	
	} 
  }
});
return false;
});
$(".submit2").click(function() {
var name2 = $("#name2").val();
var age2 = $("#age2").val();
var dataString2=$("#form2").serialize();
$.ajax({
type: "POST",
url: "fichier2.php",
data: dataString2,
success: function(data){ 
 if(name2=='ENTREZ VOTRE NOM' || name2=='' || age2 =='' )
{
$('.success2').fadeOut(200).hide();
$('.error2').fadeOut(200).show();
}
if(name2.match(' ')){
	$('.success2').fadeOut(200).hide();
$('.error22').fadeOut(200).show();
}
else
{ 
$("#loading").fadeIn(200).show();
$('.success2').fadeIn(200).show();
$('.error2').fadeOut(200).hide();
$('#forme2').fadeOut(200).hide();
$('#enter2').fadeIn(200).show();
	} 
  }
});

return false;
});
});
</script>    
</head>
<body>
<div id="heit1" >
<div id="doc" class="yui-t7">
  <div id="bd">
     <div id="target">
    <?php require('home.php'); ?>
    </div>    
  </div>   
</div>
</div>
<div id="heit2" >
<div style="position:fixed; display:block; float:left; min-width:100%; height:100%;   z-index:9999999999999999999999999999999  ; "> 
 <div style="width:80%; display:block; margin-left:auto; margin-right:auto; margin-top:10%; " align="center"> 
<p style="width:100%; display:block; float:left;  color:#fff; font-size:16px; line-height:normal; margin-bottom:30px"> La resolution de l'écran de votre terminal n'est pas compatible avec l'application</p>
<p><i class="fa fa-lock" style="font-size:140px; color:#fff"></i></p>
 </div>   
 </div>
</div>
<script src="jquery-latest.pack.js"></script>
<script src="code.js"></script>
<script src="allowing-link-following.js"></script>
</body>
</html>