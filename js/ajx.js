$(function() {
$(".submit").click(function() {
var name = $("#name").val();
var username = $("#username").val();
var password = $("#password").val();
var gender = $("#gender").val();
var dataString = 'name='+ name + '&username=' + username + '&password=' + password + '&gender=' + gender;

if(name=='' || username=='' || password=='' || gender=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "fichier.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
$('#forme').fadeOut(200).hide();
$('#enter').fadeOut(200).show();
}
});
}
return false;
});
});