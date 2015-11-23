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
	if (!goodEmail || badEmail) {$Npro("Error").innerHTML=errorMessage;$Npro("Error").style.display="inline";field.focus();field.select();return false;}
	else {return true;}
}
function emptyvalidation(entered, errorMessage) {
	$Npro("Error").innerHTML="";
	with (entered) {
	if (trim(value)==null || trim(value)=="" || trim(value)=="Entrez votre adresse mail") {/*alert(errorMessage);*/$Npro("Error").innerHTML=errorMessage;$Npro("Error").style.display="inline";return false;}
	else {return true;}}//with
}//emptyvalidation

function signup(thisform) {
	with (thisform) {
		if (emailvalidation(email,error_1)==false) {email.focus(); return false;};
 	}
	$("#submit, #myResponse").hide();
	$("#loading").show();				 
	params=$("#subform").serialize();
	$.ajax({
   type : "POST",
   url : "fichier.php",
   data: params,
   success:function(data)
   {
       
       if (data == 1) {
       $("#loading").hide();
			  $("#forme").hide();
			  $("#myResponse").html(thankyou);
		$('#myResponse').css({display:'inline',color:'white'})
		$("#submit").show();
           
	   }
	   if(data == 0){
       
       
			  $("#loading").hide();
           $("#Error").fadeIn().html(error_2);  
        $("#Error").css({display:'inline',color:'red'})
		$("#submit").show(); 
        
        
        
     }  
	 
   }
     
    })
return false;
}

  

//-->