<?php session_start(); $a = session_id(); ?>
<?php   require('_config.php');	require_once('configs/functions.php');	require_once('configs/fonctions.php');

	 $refd = $DB->query('select * from mytab where idse=:id order by id desc limit 1', array('id' => $a));
	 
 if($_GET['var']<50){ $ta=0;}elseif($_GET['var']==50){ $ta=50;}elseif($_GET['var']>50){ $ta=100;} ?>
 
<?php $resse = $DB->query('select * from resultat where sid=:id and vale='.$ta.' order by id desc limit 1', array('id' => $_GET['sed']));

$resse2 = $DB->query('select * from resultat where sid=:id and vale='.$ta.' order by id desc limit 1', array('id' => $_GET['sed']));
 ?>
     <script src="js/jquery.min.js" type="text/javascript"></script>
    <script>
	 $(".submitem").click(function() {
var email = $("#email").val();
/*var username = $("#username").val();
var password = $("#password").val();*/
var etel = $("#etel").val();
//var dataString = 'name='+ name + '&age=' + age;
var dataString3=$("#formmail").serialize();
$.ajax({
type: "POST",
url: "sending.php?xvar=<?=$resse[0]->id?>",
data: dataString3,
success: function(data){
 if(email=='VOTRE ADRESSE MAIL*' || email=='' || !(email.match('@') && email.match('.')))
{
$('.successem').fadeOut(200).hide();
$('.errorem2').fadeOut(200).show();
}
else
{
$("#loading").fadeIn(200).show();
$('.successem2').fadeIn(200).show();
$('.errorem').fadeOut(200).hide();
$('#formen').fadeOut(200).hide();
$('#enterem').fadeIn(200).show();
	} 
  }
});
return false;
});
$(".submitem2").click(function() {
var email2 = $("#email2").val();
/*var username = $("#username").val();
var password = $("#password").val();*/
var etel2 = $("#etel2").val();
//var dataString = 'name='+ name + '&age=' + age;
var dataString32=$("#formmail2").serialize();
$.ajax({
type: "POST",
url: "sending2.php?xvar2=<?=$resse[0]->id?>",
data: dataString32,
success: function(data){
 if(email2=='VOTRE ADRESSE MAIL*' || email2=='' || !(email2.match('@') && email2.match('.')))
{
$('.successem2').fadeOut(200).hide();
$('.errorem22').fadeOut(200).show();
}
else
{
$("#loading").fadeIn(200).show();
$('.successem22').fadeIn(200).show();
$('.errorem2').fadeOut(200).hide();
$('#formen2').fadeOut(200).hide();
$('#enterem2').fadeIn(200).show();
	} 
  }
});
return false;
});	 </script> 
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
	</script>
     <div  id="niv1" style="position:absolute; width:20%; bottom:20px;  z-index:9999999999999999999999  ; right:20px">
 <img src="images/vaseline.png" width="100%" />
 </div>
    <div   style="position:absolute; width:100%; bottom:80px; z-index:9999999999999999999999   " align="center">
 <div class="buttons">
  <a class="showSingle" id="a1" data-target="1"></a>
   <a class="showSingle" id="a2" data-target="2"></a>
 <a class="showSingle" id="a3" data-target="3"></a>
 </div>
</div>
<div id="div1" class="targetDiv">
<div id="niv1">
<section id="videos"    >
   <div id="bg"  >
    <div style="width:90%; display:block; margin-left:auto; margin-right:auto; margin-top:130px; ">
     <div style="width:100%; display:inline; float:left ">
    <div style="width:40%; display:block; float:left; margin-left:100px ">
<div style="width:100%; display:block; float:left; ">
<div style="width:100%; display:block;  font-family: 'Open Sans', sans-serif; font-size:18px " align="left">
<span style="font-size:12px">RESULTAT DE L&acute;ANALYSE DE LA PEAU</span> <br/><br/>
<span style="font-size:44px"><?= utf8_decode($resse[0]->tit); ?></span> <br/><br/>
<span style="font-size:12px"><?= utf8_decode($refd[0]->nam); ?>, <?= utf8_decode($resse[0]->desc); ?></span>
</div>
<div style="width:70%; display:block; float:left; " align="center">
<div id="link5"  style="margin-top:30px; ">
<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="2"   ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2" >RESULTAT PAR MAIL</a></td>
  </tr>
</table>
<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="3"   ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="3" >TERMINER</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
<div style="width:25%; display:block; float:left;  ">
<img src="images/<?= utf8_decode($resse[0]->img); ?>"   />
</div>

</div>
</div>
   </div>
</section>
</div>
 <div id="niv2">
<section id="videos"    >
   <div id="bg"  >
    <div style="width:100%; display:block; margin-left:auto; margin-right:auto; margin-top:30px; ">
     <div style="width:100%; display:inline; float:left ">
    <div style="width:100%; display:block; float:left;  " align="center">
<div style="width:100%; display:block; float:left; ">
<div style="width:90%; display:block;  font-family: 'Open Sans', sans-serif; font-size:18px " align="center">
<span style="font-size:12px">RESULTAT DE L&acute;ANALYSE DE LA PEAU</span> <br/><br/>
<span style="font-size:44px"><?= utf8_decode($resse2[0]->tit); ?></span> <br/><br/>
<span style="font-size:12px"><?= utf8_decode($refd[0]->nam); ?>, <?= utf8_decode($resse2[0]->desc); ?></span>
 </div>
<div style="width:100%; display:block; float:left; " align="center">
<div id="link5"  style="margin-top:30px; ">
<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="2"   ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2" >RESULTAT PAR MAIL</a></td>
  </tr>
</table>
<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="3"   ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="3" >TERMINER</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
<div style="width:100%; display:block; float:left;  " align="center">
<img src="images/<?= utf8_decode($resse2[0]->img); ?>" width="60%"   />
</div>
</div>
</div>
   </div>
</section>
</div>
</div>
 <div id="div2" class="targetDiv">
<div id="niv1">
<section id="videos"    >
   <div id="bg"  >
    <div style="width:90%; display:block; margin-left:auto; margin-right:auto; margin-top:130px; ">
     <div style="width:100%; display:inline; float:left ">
    <div style="width:40%; display:block; float:left; margin-left:100px ">
<div style="width:100%; display:block; float:left; ">
<div style="width:100%; display:block; float:right; ">
<div id="formen"  style=" display:block;margin-top:20px; " align="left">
<div style="display:block; width:100%; float:left; margin-bottom:30px; font-size:16px">
 Entrez votre adresse email pour recevoir une copie de votre analyse de la peau.
 </div>
 <form method="post" action="#" name="formem" id="formmail" >
<div style="margin-bottom:10px"><input id="email" required name="email" value="VOTRE ADRESSE MAIL*" onFocus="this.value=''" type="email" style=" text-align:center; background:rgba(255,255,255,0.5); color:#fff; padding-top:10px; padding-bottom:10px;  width:400px;" /></div>
 <div style="margin-bottom:10px"><input id="etel" name="etel" value="VOTRE NUMERO DE TELEPHONE" onFocus="this.value=''" type="tel" style=" text-align:center; background:rgba(255,255,255,0.5); color:#fff; padding-top:10px; padding-bottom:10px;  width:400px;" /></div>
  <div style="display:block; width:100%; margin-top:20px; font-size:11px; margin-bottom:30px; margin-top:30px; float:left"  >
 (*) Champ obligatoire 
 </div>
  <div style="width:100%; display:block; float:left; margin-top:50px; margin-botom:20px; font-size:14px"  >
Je souhaite recevoir les mises à jour occasionnelles de vaseline
</div>
<div  style="margin-bottom:10px"  >
<p><input type="submit" value="Valider" name="send" style="background:#039; color:#fff; border:none; cursor:pointer; padding:10px; margin-right:20px" class="submitem"/> 
 <a href="#" class="showSingle2" data-target="1" style="background:#039;  width:200px;color:#fff; border:none; cursor:pointer; padding:10px; margin-top:30px; font-size:12px"   >ANNULER</a></p>
<p class="errorem" style="display:none; color:#F00"> Veuillez saisir une adresse mail svp</p>
<p class="errorem2" style="display:none; color:#F00"> Veuillez saisir une adresse mail valide svp</p>
</div>
</form>
</div>
<div id="enterem" style="display:none;">
  <p style="font-size:32px; color:#fff">Merci <?= utf8_decode($refd[0]->nam); ?>!</p>
<p style="font-size:18px; color:#fff; margin-top:10px ; margin-bottom:10px">Votre résultat vous sera envoyé par email sous peu.</p>
<p>
<table width="180" border="0"  >
  <tr>
    <td><a href="https://www.facebook.com/VaselineZA" target="_blank">
                            <img src="images/fb_tcm3045-777449.png" alt="Vaseline sur Facebook">
                        </a></td>
    <td><a href="https://www.youtube.com/user/vaselinesa" target="_blank">
                            <img src="images/youtube_tcm3045-795408.png" alt="Vaseline sur Youtube">
                        </a></td>
    <td><a href="https://instagram.com/vaselineza/" target="_blank">
                            <img src="images/Instagram_tcm3045-971380.png" alt="Vaseline sur Instagram">
                        </a></td>
  </tr>
</table>
</p>
 <div style="   width:100%;  display:block; float:left; margin-top:40px" align="center">
   <span style=""><a  href="#" onClick="window.location.reload()"> &laquo; REVENIR A L'ACCUEIL</a></span>
    </div>
  </div>
</div>
</div>
</div>
<div style="width:25%; display:block; float:left;  ">
<img src="images/<?= utf8_decode($resse2[0]->img); ?>"   />

</div>
</div>
</div>
   </div>
</section>
</div>
 <div id="niv2">
<section id="videos"    >
   <div id="bg"  >
    <div style="width:100%; display:block; margin-left:auto; margin-right:auto; margin-top:30px; ">
     <div style="width:100%; display:inline; float:left ">
    <div style="width:97%; display:block; float:left; " align="center">
<div style="width:100%; display:block; float:left; ">
<div style="width:100%; display:block; float:right; ">
<div id="formen2"  style=" display:block; float:left;margin-top:20px; " align="center">
<div style="display:block; width:90%; float:left; margin-bottom:30px; margin-left:10px; font-size:16px" align="center">
 Entrez votre adresse email pour recevoir une copie de votre analyse de la peau.
 </div>
 <form method="post" action="#" name="formem2" id="formmail2" >
<div style="margin-bottom:10px"><input id="email2" required name="email2" value="VOTRE ADRESSE MAIL*" onFocus="this.value=''" type="email" style=" text-align:center; background:rgba(255,255,255,0.5); color:#fff; padding-top:10px; padding-bottom:10px;  width:90%;" /></div>
 <div style="margin-bottom:10px"><input id="etel2" name="etel2" value="VOTRE NUMERO DE TELEPHONE" onFocus="this.value=''" type="tel" style=" text-align:center; background:rgba(255,255,255,0.5); color:#fff; padding-top:10px; padding-bottom:10px;  width:90%;" /></div>
  <div style="display:block; width:100%; margin-top:20px; font-size:11px; margin-bottom:30px; margin-top:30px; float:left"  >
 (*) Champ obligatoire 
 </div>
  <div style="width:100%; display:block; float:left; margin-top:30px; margin-botom:30px; font-size:14px"  >
Je souhaite recevoir les mises à jour occasionnelles de vaseline
</div>
<div  style="margin-bottom:10px; display:block"  >
<p><input type="submit" value="Valider" name="send2" style="background:#039; color:#fff; border:none; cursor:pointer; padding:10px; margin-right:20px" class="submitem2"/> 
 <a href="#" class="showSingle2" data-target="1" style="background:#039;  width:200px;color:#fff; border:none; cursor:pointer; padding:10px; margin-top:30px; font-size:12px"   >ANNULER</a></p>
<p class="errorem2" style="display:none; color:#F00"> Veuillez saisir une adresse mail svp</p>
<p class="errorem22" style="display:none; color:#F00"> Veuillez saisir une adresse mail valide svp</p>
</div>
</form>
</div>
<div id="enterem2" style="display:none;">
  <p style="font-size:32px; color:#fff">Merci <?= utf8_decode($refd[0]->nam); ?>!</p>
<p style="font-size:18px; color:#fff; margin-top:10px ; margin-bottom:10px">Votre résultat vous sera envoyé par email sous peu.</p>
<p>
<table width="180" border="0"  >
  <tr>
    <td><a href="https://www.facebook.com/VaselineZA" target="_blank">
                            <img src="images/fb_tcm3045-777449.png" alt="Vaseline sur Facebook">
                        </a></td>
    <td><a href="https://www.youtube.com/user/vaselinesa" target="_blank">
                            <img src="images/youtube_tcm3045-795408.png" alt="Vaseline sur Youtube">
                        </a></td>
    <td><a href="https://instagram.com/vaselineza/" target="_blank">
                            <img src="images/Instagram_tcm3045-971380.png" alt="Vaseline sur Instagram">
                        </a></td>
  </tr>
</table>
</p>
 <div style="   width:100%;  display:block; float:left; margin-top:40px" align="center">
   <span style=""><a href="#" onClick="window.location.reload()"> &laquo; REVENIR A L'ACCUEIL</a></span>
    </div>
  </div>
</div>
</div>
</div>
<div style="width:100%; display:block; float:left;  " align="center">
<img src="images/<?= utf8_decode($resse2[0]->img); ?>" width="60%"   />
</div>
</div>
</div>
   </div>
</section>
</div>
</div>
<div id="div3" class="targetDiv">
<div id="niv1">
<section id="videos"    >
  <div style="position:fixed; background:rgba(15,102,185,0.9); display:block; float:left; min-width:100%; min-height:100%;  z-index:9999999999999999999999999999999  ; ">
 <div style="width:80%; display:block; margin-left:auto; margin-right:auto; margin-top:250px; " align="center">
<p style="width:100%; display:block; float:left; color:#fff; font-size:16px; margin-bottom:30px">Êtes-vous sûr de vouloir quitter sans recevoir votre résultat par e-mail?</p>
 <p><span style="margin-right:50px"><a   href="#" onClick="window.location.reload()"><img src="images/yes.png" border="0" width="90" /></a></span>  
 <span><a href="#" class="showSingle2" data-target="1"><img src="images/no.png" width="90"  border="0" /></a></span></p>
 </div>
 </div>
   <div id="bg"  >
    <div style="width:90%; display:block; margin-left:auto; margin-right:auto; margin-top:130px; ">
     <div style="width:100%; display:inline; float:left ">
    <div style="width:40%; display:block; float:left; margin-left:100px ">
<div style="width:100%; display:block; float:left; ">
<div style="width:100%; display:block;  font-family: 'Open Sans', sans-serif; font-size:18px " align="left">
<span style="font-size:12px">RESULTAT DE L&acute;ANALYSE DE LA PEAU</span> <br/><br/>
<span style="font-size:44px"><?= utf8_decode($resse[0]->tit); ?></span> <br/><br/>
<span style="font-size:12px"><?= utf8_decode($refd[0]->nam); ?>, <?= utf8_decode($resse[0]->desc); ?></span>
</div>
<div style="width:70%; display:block; float:left; " align="center">
<div id="link5"  style="margin-top:30px; ">
<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="2"   ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2" >RESULTAT PAR MAIL</a></td>
  </tr>
</table>

<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="2"   ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2" >TERMINER</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
<div style="width:25%; display:block; float:left;  ">
<img src="images/<?= utf8_decode($resse[0]->img); ?>"   />
</div>
</div>
</div>
   </div>
</section>
</div>
 <div id="niv2">
<section id="videos"    >
  <div style="position:fixed; background:rgba(15,102,185,0.9); display:block; float:left; min-width:100%; height:100%;   z-index:9999999999999999999999999999999  ; ">
 <div style="width:80%; display:block; margin-left:auto; margin-right:auto; margin-top:20%; " align="center">
<p style="width:100%; display:block; float:left; color:#fff; font-size:16px; margin-bottom:30px">Êtes-vous sûr de vouloir quitter sans recevoir votre résultat par e-mail?</p>
 <p style="margin-bottom:30px"><a   href="#" onClick="window.location.reload()"><img src="images/yes.png" border="0" width="90" /></a></p>  
 <p><a href="#" class="showSingle2" data-target="1"><img src="images/no.png" width="90"  border="0" /></a></p>
 </div>
 </div>
   <div id="bg"  >
    <div style="width:100%; display:block; margin-left:auto; margin-right:auto; margin-top:30px; ">
     <div style="width:100%; display:inline; float:left ">
    <div style="width:100%; display:block; float:left;  " align="center">
<div style="width:100%; display:block; float:left; ">
<div style="width:90%; display:block;  font-family: 'Open Sans', sans-serif; font-size:18px " align="center">
<span style="font-size:12px">RESULTAT DE L&acute;ANALYSE DE LA PEAU</span> <br/><br/>
<span style="font-size:44px"><?= utf8_decode($resse2[0]->tit); ?></span> <br/><br/>
<span style="font-size:12px"><?= utf8_decode($refd[0]->nam); ?>, <?= utf8_decode($resse2[0]->desc); ?></span>
</div>
<div style="width:100%; display:block; float:left; " align="center">
<div id="link5"  style="margin-top:30px; ">
<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="2"   ><img src="images/1_Tick_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2" >RESULTAT PAR MAIL</a></td>
  </tr>
</table>

<table width="300px" border="0">
  <tr>
    <td align="left"><a href="#" class="showSingle2" data-target="2"   ><img src="images/1_Cross_Normal.png" /></a></td>
    <td align="left"><a href="#" class="showSingle2" data-target="2" >TERMINER</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
<div style="width:100%; display:block; float:left;  " align="center">
<img src="images/<?= utf8_decode($resse2[0]->img); ?>" width="60%"   />
</div>
</div>
</div>
   </div>
</section>
</div>
</div>
 <script src="jquery-latest.pack.js"></script>
<script src="code.js"></script>
<script src="allowing-link-following.js"></script>