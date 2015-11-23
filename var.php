<?php session_start(); $a = session_id(); ?>
<?php require('_config.php');	require_once('configs/functions.php');	require_once('configs/fonctions.php');	
	 $refd = $DB->query('select * from mytab where idse=:id order by id desc limit 1', array('id' => $a));
	 ?>
     <script src="js/jquery.min.js" type="text/javascript"></script>     
      <script src="jquery-latest.pack.js"></script>
<script src="code.js"></script>
<script src="allowing-link-following.js"></script>     
      <style>
   .buttons i {color: #fff; cursor:pointer;}  .buttons .selected  i { color:#39F;}
input[type=range] {
    /*removes default webkit styles*/
    -webkit-appearance: none;    
    /*fix for FF unable to apply focus style bug */
    border: 1px solid white;    
    /*required for proper track sizing in FF*/
    width: 300px;
}
input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 2px;
    background: #fff;
    border: none;
    border-radius: 3px;
}
input[type=range]::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    background: #87d2f6;
    margin-top: -25px;
}
input[type=range]:focus {
    outline: none;
}
input[type=range]:focus::-webkit-slider-runnable-track {
    background: #fff;
}

input[type=range]::-moz-range-track {
    width: 100%;
    height: 5px;
    background: #ddd;
    border: none;
    border-radius: 3px;
}
input[type=range]::-moz-range-thumb {
    border: none;
    height: 32px;
    width: 32px;
    border-radius: 50%;
    background: #fff;
}

/*hide the outline behind the border*/
input[type=range]:-moz-focusring{
    outline: 1px solid white;
    outline-offset: -1px;
}

input[type=range]::-ms-track {
    width: 100%;
    height: 5px;    
    /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
    background: transparent;    
    /*leave room for the larger thumb to overflow with a transparent border */
    border-color: transparent;
    border-width: 6px 0;
    /*remove default tick marks*/
    color: transparent;
}
input[type=range]::-ms-fill-lower {
    background: #777;
    border-radius: 10px;
}
input[type=range]::-ms-fill-upper {
    background: #ddd;
    border-radius: 10px;
}
input[type=range]::-ms-thumb {
    border: none;
    height: 32px;
    width: 32px;
    border-radius: 50%;
    background:#fff;
}
input[type=range]:focus::-ms-fill-lower {
    background: #ccc;
}
input[type=range]:focus::-ms-fill-upper {
    background: #888;
}    </style>
    <script>
	$('.showSingle').on('click', function () {
    $(this).addClass('selected').siblings().removeClass('selected');
    $('.targetDiv').hide();
    $('#div' + $(this).data('target')).show();
});
$('.showSingle2').on('click', function () {
    $('.targetDiv').hide();
    $('#div' + $(this).data('target')).show();
	$('#a' + $(this).data('target')).addClass('selected').siblings().removeClass('selected');
});
$('.showSingle').first().click();
$(".bfinal").click(function() {
var vfinal = $("#slider").val();
var dataStrings=$("#ffinal").serialize();
$.ajax({
type: "POST",
data: dataStrings,
success: function(data){ 
if( vfinal=='' )
{
$('.errors').fadeOut(200).show();
}
else{
$('#target').html('<p><div id="loading2" align="center"><div id="bgt">Chargement en cours...</div></p>');
$('#target').load('submit.php?sed=<?=$_GET['sed']?>&var=' + vfinal);	
}
  }
});
return false;
});
$(".bfinal2").click(function() {
var vfinal2 = $("#slideX2").val();
var dataStringse=$("#ffinal2").serialize();
$.ajax({
type: "POST",
data: dataStringse,
success: function(data){ 
if( vfinal2=='' )
{
$('.errorw2').fadeOut(200).show();
}
else{
$('#target').html('<p><div id="loading2" align="center"><div id="bgt">Chargement en cours...</div></p>');
$('#target').load('submit.php?sed=<?=$_GET['sed']?>&var=' + vfinal2);	
}
  }
});
return false;
});	</script>
    <div style="position:absolute; width:20%; bottom:20px;  z-index:9999999999999999999999  ; right:20px">
 <img src="images/vaseline.png" width="100%" />
 </div>
    <div   style="position:absolute; width:100%; bottom:80px; z-index:9999999999999999999999   " align="center">    
 <div class="buttons">   
  <a class="showSingle" id="a1" data-target="1"><i style="margin-right:10px" class="fa fa-circle"></i></a>
   <a class="showSingle" id="a2" data-target="2"><i style="margin-right:10px" class="fa fa-circle"></i></a>
 <a class="showSingle" id="a3" data-target="3"><i style="margin-right:10px" class="fa fa-circle"></i></a>
   <a class="showSingle" id="a4" data-target="4"><i style="margin-right:10px" class="fa fa-circle"></i></a>
    <a class="showSingle" id="a5" data-target="5"><i style="margin-right:10px" class="fa fa-circle"></i></a>
     <a class="showSingle" id="a6" data-target="6"><i style="margin-right:10px" class="fa fa-circle"></i></a>
 </div>
</div>
<div id="div1" class="targetDiv">
<div id="niv1">
<section id="videoc2"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:130px; ">
    
    <div style="width:30%; display:block; float:left; margin-left:100px ">

<div style="width:100%; display:block; float:left; ">

<div style="width:80%; display:block;  font-family: 'Open Sans', sans-serif; font-size:18px " align="center">
 
<span style="text-transform:uppercase"><?= utf8_decode($refd[0]->nam); ?></span>, VOTRE PEAU A T ELLE DEJA ETE IRRITEE SUITE A UN CHANGEMENT
DE VOTRE CREME DE SOIN OU APRES L'UTILISATION D'UN PRODUIT TRES PARFUME ? 
</div>

<div style="width:70%; display:block; float:left; " align="center">
<div id="link5"  style="margin-top:30px; ">
<table width="200px" border="0">
  <tr>
    <td align="right"><a href="#" class="showSingle2" data-target="2"  ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2">OUI</a></td>
  </tr>
</table>
<table width="200px" border="0">
  <tr>
    <td align="right"><a href="#" class="showSingle2" data-target="2"   ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2" >NON</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>
<div id="niv2">
<section id="videoc2"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:30px; ">
    <div style="width:100%; display:block; float:left; ">
<div style="width:100%; display:block; float:left; ">
<div style="width:95%; display:block;  margin-left:auto; margin-right:auto ; font-family: 'Open Sans', sans-serif; font-size:14px " align="center">
<span style="text-transform:uppercase"><?= utf8_decode($refd[0]->nam); ?></span>, VOTRE PEAU A T ELLE DEJA ETE IRRITEE SUITE A UN CHANGEMENT
DE VOTRE CREME DE SOIN OU APRES L'UTILISATION D'UN PRODUIT TRES PARFUME ? 
</div>
<div style="width:100%; margin-top:40px; display:block; float:left; " align="center">
 <div style="width:90%; display:block; margin-left:auto; margin-right:auto">
     <div style="   width:100%;  display:block; float:left" align="center">
    <span style="padding-top:80px" align="center"><a  href="#" class="showSingle2" data-target="2"><img src="images/yes.png" width="30%" /></a></span>
    </div>
    <div style="   width:100%;  display:block; float:left" align="center">
   <span style="padding-top:20px"><a href="#" class="showSingle2" data-target="2"><img src="images/no.png" width="30%" /></a></span>
    </div>
    </div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>
</div>
<div id="div2" class="targetDiv">
<div id="niv1">
<section id="videoc3"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:130px; ">
    <div style="width:30%; display:block; float:left; margin-left:100px ">
<div style="width:100%; display:block; float:left; ">
<div style="width:80%; display:block;  font-family: 'Open Sans', sans-serif; font-size:18px " align="center">
AVEZ-VOUS DEJA SOUFFERT D'ACNE OU AVEZ-VOUS  DEJA EU UNE PEAU GRASSE ?
</div>
<div style="width:70%; display:block; float:left; " align="center">
<div id="link5" style="margin-top:30px; ">
<table width="200px" border="0">
  <tr>
    <td align="right"><a href="#" class="showSingle2" data-target="3"  ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="3">OUI</a></td>
  </tr>
</table>
<table width="200px" border="0">
  <tr>
    <td align="right"><a href="#" class="showSingle2" data-target="3"  ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a  href="#" class="showSingle2" data-target="3">NON</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>
<div id="niv2">
<section id="videoc3"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:30px; ">
    <div style="width:100%; display:block; float:left;   ">
<div style="width:100%; display:block;  margin-left:auto; margin-right:auto " align="center">
<div style="width:95%; display:block;  font-family: 'Open Sans', sans-serif; font-size:14px " align="center">
AVEZ-VOUS  DEJA SOUFFERT D'ACNE OU AVEZ-VOUS  DEJA EU UNE PEAU GRASSE ?
</div>
<div style="width:100%; display:block; float:left; " align="center">
 <div style="width:100%; margin-top:40px; display:block; float:left; " align="center">
 <div style="width:90%; display:block; margin-left:auto; margin-right:auto">
    
     <div style="   width:100%;  display:block; float:left" align="center">
    <span style="padding-top:80px" align="center"><a  href="#" class="showSingle2" data-target="3"><img src="images/yes.png" width="30%" /></a></span>
    </div>
    <div style="   width:100%;  display:block; float:left" align="center">
   <span style="padding-top:20px"><a href="#" class="showSingle2" data-target="3"><img src="images/no.png" width="30%" /></a></span>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>
</div>
<div id="div3" class="targetDiv">
<div id="niv1">
<section id="videoc4"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:80px; ">
    <div style="width:35%; display:block; float:right; margin-right:100px ">
<div style="width:100%; display:block; float:left; ">
<div style="width:100%; display:block;  font-family: 'Open Sans', sans-serif; font-size:16px " align="left">
SELECTIONNEZ LA PHRASE QUI DECRIT LE MIEUX VOTRE PREFERENCE EN MATIERE DE 
PRODUIT DE SOIN POUR LA PEAU : 
</div>
<div style="width:100%; display:block; float:left; " align="left">
<div id="link5" style="margin-top:30px; ">
<div style="width:100%; display:block; float:left;">
<div style="width:20%; display:block; float:left; padding:0;  margin-right:5px ">
<a href="#" class="showSingle2" data-target="4"   ><img src="images/1_Tick_Normal.png"  /></a>
</div>
<div style="    width: 78%;    margin-top: 10px; display:block; float:right">
<a href="#" class="showSingle2" data-target="4" >Je préfère le lait corporels parce qu'ils créée une sensation de légèreté, non encombrante et ils entre rapidement sous ma peau</a>
</div>
</div>
 <div style="width:100%; display:block; float:left; margin-top:30px; margin-bottom:30px;">
<div style="width:17%; display:block; float:left; ">
&nbsp;
</div>

<div style="width:80%;  display:block;font-size:40px;   float:right">
OU
</div>

</div>

<div style="width:100%; display:block; float:left">

<div style="width:20%; display:block; float:left; ;  margin-right:5px ">
<a href="#" class="showSingle2" data-target="4"  ><img src="images/1_Tick_Normal.png" /></a>
</div>

<div style="width:78%;  margin-top: 10px;  display:block; float:right">
<a href="#" class="showSingle2" data-target="4" >Je préfère une crème de soin riche qui est plus légère du point de vue de sa teneur et qui est capable d'hydrater les zones à traiter sur ma peau </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>
<div id="niv2">
<section id="videoc4"    >
  
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:30px; ">
     <div style="width:100%; display:block; float:left;  ">
 <div style="width:100%; display:block; float:left">

<div style="width:95%; display:block;  margin-left:auto; margin-right:auto ; font-family: 'Open Sans', sans-serif; font-size:14px " align="center">
SELECTIONNEZ LA PHRASE QUI DECRIT LE MIEUX VOTRE PREFERENCE EN MATIERE DE 
PRODUIT DE SOIN POUR LA PEAU : 
</div>
<div style="width:100%; display:block; float:left; " align="center">
<div id="link5" style="margin-top:30px; ">
<div style="width:95%; display:block; float:left;">
<div style="width:20%; display:block; float:left; padding:0;  margin-right:5px ">
<a href="#" class="showSingle2" data-target="4"  ><img src="images/1_Tick_Normal.png"  /></a>
</div>
<div style="    width: 78%;    margin-top: 10px; display:block; float:right">
<a href="#" class="showSingle2" data-target="4"  style="font-size:11px" >Je préfère le lait corporels parce qu'ils créée une sensation de légèreté, non encombrante et ils entre rapidement sous ma peau</a>
</div>

</div>
 <div style="width:100%; display:block; float:left; margin-top:30px; margin-bottom:30px;">

<div style="width:17%; display:block; float:left; ">
&nbsp;
</div>
<div style="width:80%;  display:block;font-size:40px;   float:right">
OU
</div>
</div>
<div style="width:95%; display:block; float:left">
<div style="width:20%; display:block; float:left; ;  margin-right:5px ">
<a href="#" class="showSingle2" data-target="4"  ><img src="images/1_Tick_Normal.png" /></a>
</div>
<div style="width:78%;  margin-top: 10px;  display:block; float:right">
<a href="#" class="showSingle2" data-target="4" style="font-size:11px" >Je préfère une crème de soin riche qui est plus légère du point de vue de sa teneur et qui est capable d'hydrater les zones à traiter sur ma peau </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>
</div>
<div id="div4" class="targetDiv">
<div id="niv1">
<section id="videoc5"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:130px; ">
    <div style="width:30%; display:block; float:right; margin-right:100px ">
<div style="width:100%; display:block; float:left; ">
<div style="width:80%; display:block;  text-transform:uppercase; font-family: 'Open Sans', sans-serif; font-size:18px " align="center">
Avez-vous des surfaces de peau irrégulières ou inégales en teinte sur votre corps?
</div>
<div style="width:90%; display:block; float:left; " align="center">
<div id="link5" style="margin-top:30px; ">
<table width="200px" border="0">
  <tr>
    <td align="right"><a  href="#" class="showSingle2" data-target="5"  ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="5">OUI</a></td>
  </tr>
</table>

<table width="200px" border="0">
  <tr>
    <td align="right"><a href="#" class="showSingle2" data-target="5"   ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="5"  >NON</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>

</div>
   </div>
</section>
</div>
<div id="niv2">
<section id="videoc5"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:30px; ">
    <div style="width:100%; display:block; float:left;  ">
<div style="width:100%; display:block; float:left; ">
<div style="width:95%; display:block; margin-left:auto; margin-right:auto;  text-transform:uppercase; font-family: 'Open Sans', sans-serif; font-size:14px " align="center">
Avez-vous des surfaces de peau irrégulières ou inégales en teinte sur votre corps?
</div>
<div style="width:100%; display:block; float:left; " align="center">
  <div style="width:100%; display:block; float:left; " align="center">
 <div style="width:100%; margin-top:40px; display:block; float:left; " align="center">
 <div style="width:90%; display:block; margin-left:auto; margin-right:auto">
     <div style="   width:100%;  display:block; float:left" align="center">
    <span style="padding-top:80px" align="center"><a  href="#" class="showSingle2" data-target="5"><img src="images/yes.png" width="30%" /></a></span>
    </div>
    <div style="   width:100%;  display:block; float:left" align="center">
   <span style="padding-top:20px"><a href="#" class="showSingle2" data-target="5"><img src="images/no.png" width="30%" /></a></span>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>

</div>

<div id="div5" class="targetDiv">

 <div id="niv1">
 <section id="videoc6"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:130px; ">
    
    <div style="width:30%; display:block; float:right; margin-right:100px ">

<div style="width:100%; display:block; float:left; ">

<div style="width:80%; display:block;  text-transform:uppercase;  font-family: 'Open Sans', sans-serif; font-size:18px " align="center">
Avez-vous besoin de réappliquer votre produit de soin de la peau parce que votre peau devient plus sèche durant la journée ?
</div>

<div style="width:90%; display:block; float:left; " align="center">
 
<div id="link5" style="margin-top:30px; ">
<table width="200px" border="0">
  <tr>
    <td align="right"><a href="#" class="showSingle2" data-target="6"   ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a  href="#" class="showSingle2" data-target="6" >OUI</a></td>
  </tr>
</table>

<table width="200px" border="0">
  <tr>
    <td align="right"><a href="#" class="showSingle2" data-target="6" ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="6"  >NON</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</div>
   </div>
</section>
</div>  
<div id="niv2">
 <section id="videoc6"    >
   <div id="bg"  >
    <div style="width:100%; display:block; float:left;margin-top:30px; ">
    <div style="width:100%; display:block; float:left;   ">
<div style="width:100%; display:block; float:left; ">
<div style="width:95%; display:block; margin-left:auto; margin-right:auto;  text-transform:uppercase; font-family: 'Open Sans', sans-serif; font-size:14px " align="center">
Avez-vous besoin de réappliquer votre produit de soin de la peau parce que votre peau devient plus sèche durant la journée ?
</div>
 <div style="width:100%; display:block; float:left; " align="center">
 <div style="width:100%; display:block; float:left; " align="center">
 <div style="width:100%; margin-top:40px; display:block; float:left; " align="center">
 <div style="width:90%; display:block; margin-left:auto; margin-right:auto">
     <div style="   width:100%;  display:block; float:left" align="center">
    <span style="padding-top:80px" align="center"><a  href="#" class="showSingle2" data-target="6"><img src="images/yes.png" width="30%" /></a></span>
    </div>
    <div style="   width:100%;  display:block; float:left" align="center">
   <span style="padding-top:20px"><a href="#" class="showSingle2" data-target="6"><img src="images/no.png" width="30%" /></a></span>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
   </div>
</section></div>
</div>
<div id="div6" class="targetDiv">
 <section id="videoc7"    >
   <div id="bg"  >
    <div id="niv1" style="width:50%;  float:left; margin-top:30px; margin-left:50px "  >
    <div style="width:100%;  display:block; margin-left:auto; margin-right:auto;   " align="center">
<div style="width:100%; display:block; float:left; margin-top:80px; text-transform:uppercase;  font-family: 'Open Sans', sans-serif; font-size:20px; color:#fff " align="left">
A votre avis, quel est le niveau d’hydratation de votre peau ?
</div>
</div>
<br/> 
  <div style=" width:80%; margin-left:30px; display:block; float:left; margin-top:30px;   color:#000 " align="center">
<form method="post" action="#" name="ffinal" id="ffinal" >
<div     style="  width:100%;float:left; display:inline; margin-bottom:7px;   color:#fff " align="center">
 
<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="left">
0%
</div>

<div     style="  width:33.30%;float:left; display:block;   color:#fff " align="center">
50%
</div>

<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="right">
100%
</div>
 
 </div>
<div style="width:100%; display:block; float:left; margin-top:5px;      margin-bottom:5px; color:#000 "  >
 <input type="range" name="slider" id="slider" style="width:100%; display:block; height:20px" value="50" min="0" max="100" />
    </div>
<div     style="  width:100%;float:left; display:inline; margin-top:5px;   color:#fff " align="center">
 
<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="left">
Sec
</div>

<div     style="  width:33.30%;float:left; display:block;   color:#fff " align="center">
Normal
</div>

<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="right">
Hydraté
</div>
 
 </div>
<div  style="  width:100%;float:left; margin-top:30px;   color:#fff " align="center">
 <span ><input type="submit" value="VALIDER" name="send" style="background:#039;  width:200px;color:#fff; border:none; cursor:pointer; padding:10px" class="bfinal"/> </span>
 </div>
 <p class="errors" style="display:none; color:#F00"> probleme de connexion !</p> 
 </form>
 </div>
</div>
 <div id="niv2" style="width:90%; margin-left:auto; margin-right:auto; margin-top:30px;  " align="center" >
    <div style="width:100%;  display:block; float:left   " >
<div style="width:100%; display:block; float:left; margin-top:20px;  text-transform:uppercase; font-family: 'Open Sans', sans-serif; font-size:16px; color:#fff " align="center">
A votre avis, quel est le niveau d’hydratation de votre peau ?
</div>
</div>
<br/> 
  <div style=" width:100%; display:block; float:left; margin-top:30px;   color:#000 " align="center">
<form method="post" action="#" name="ffinal2" id="ffinal2" >
<div     style="  width:100%;float:left; display:inline; margin-bottom:7px;   color:#fff " align="center">
 
<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="left">
0%
</div>

<div     style="  width:33.30%;float:left; display:block;   color:#fff " align="center">
50%
</div>

<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="right">
100%
</div>
 </div>
<div style="width:100%; display:block; float:left; margin-top:10px; margin-bottom:5px; color:#000 "  >
 <input type="range" name="slideX2" id="slideX2" style="width:100%; display:block; height:20px" value="50" min="0" max="100" />
    </div>
<div     style="  width:100%;float:left; display:inline; margin-top:10px;   color:#fff " align="center">
 
<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="left">
Sec
</div>

<div     style="  width:33.30%;float:left; display:block;   color:#fff " align="center">
Normal
</div>
<div     style="  width:33.30%;float:left; display:block;  color:#fff " align="right">
Hydraté
</div>
 </div>
<div  style="  width:100%;float:left; margin-top:30px;   color:#fff " align="center">
 <span ><input type="submit" value="VALIDER" name="sends" style="background:#039;  width:200px;color:#fff; border:none; cursor:pointer; padding:10px" class="bfinal2"/> </span>
 </div>
 <p class="errorw2" style="display:none; color:#F00"> probleme de connexion !</p> 
 </form> </div>
</div>
</div>
</section>
</div>