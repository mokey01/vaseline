// JavaScript Document

<!--
/* wording of your error and thank you messages */
var error_1="Veuillez entrez une adresse mail valide";
var error_2="ce mail existe déjà !";
var thankyou="<p><img src='images/valide.png' /></p><br/><p >Votre mail à été enregistré. Merci pour votre soutien!</p>"; 
function trim(str){str = str.replace(/^\s*$/, '');return str;}
function $Npro(field){var element =  document.getElementById(field);return element;return false;}
function emailvalidation(field, errorMessage) {
	var goodEmail = field.value.match(/[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?/); 
	apos=field.value.indexOf("@");dotpos=field.value.lastIndexOf(".");lastpos=field.value.length-1;tldLen = lastpos-dotpos;dmLen=dotpos-apos-1;var badEmail= (tldLen<2 || dmLen<2 || apos<1);
	if (!goodEmail || badEmail) {$Npro("Error").innerHTML=errorMessage;$Npro("Error2").style.display="inline";field.focus();field.select();return false;}
	else {return true;}
}
function emptyvalidation(entered, errorMessage) {
	$Npro("Error2").innerHTML="";
	with (entered) {
	if (trim(value)==null || trim(value)=="" || trim(value)=="Entrez votre adresse mail") {/*alert(errorMessage);*/$Npro("Error2").innerHTML=errorMessage;$Npro("Error2").style.display="inline";return false;}
	else {return true;}}//with
}//emptyvalidation

function signup(thisform) {
	with (thisform) {
		if (emailvalidation(email2,error_1)==false) {email2.focus(); return false;};
 	}
	$("#submit2, #myResponse2").hide();
	$("#loading2").show();				 
	parames=$("#subforme").serialize();
	$.ajax({
   type : "POST",
   url : "fichier2.php",
   data2: parames,
   success:function(data2)
   {
       
       if (data2 == 1) {
       $("#loading2").hide();
			  $("#formes").hide();
			  $("#myResponse2").html(thankyou);
		$('#myResponse2').css({display:'inline',color:'white'})
		$("#submit2").show();
           
	   }
	   if(data2 == 0){
       
       
			  $("#loading2").hide();
           $("#Error2").fadeIn().html(error_2);  
        $("#Error2").css({display:'inline',color:'red'})
		$("#submit2").show(); 
        
        
        
     }  
	 
   }
     
    })
return false;
}

  

//-->