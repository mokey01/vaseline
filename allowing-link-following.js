$(document).ready(function(){
	
  $('.ajaxtrigger').click(function(){
    var url = $(this).attr('href');
    if(url.match('^http')){
      return true;
    } else {
	  $('#target').html('<p><div id="loading2" align="center"><div id="bgt">Chargement en cours...</div></p>');
      $('#target').load(url);	
      return false;
    }
	
  });
  
  
  
  
   
 });
 

 
 
 
