 				
				

$(document).ready(function(){

        $("#word").hide();
		$("#words").hide();
		$("#word2").hide();
		$("#wordu2").hide();
		$("#word3").hide();
		$("#worde3").hide();
 	

	$('#sword').click(function(){
	$("#word").slideDown(500);
	$("#word2").hide();
		$("#word3").hide();
   	return false;
 	});
	
	$('#swords').click(function(){
	$("#words").slideDown(500);
	$("#worde2").hide();
		$("#worde3").hide();
   	return false;
 	});
	
	$('#swords2').click(function(){
	$("#words").slideUp(500);
	 
   	return false;
 	});
	
	$('#swordu').click(function(){
	$("#wordu2").slideDown(500);
	$("#words").hide();
		$("#worde3").hide();
   	return false;
 	});
	
	$('#swordu2').click(function(){
	$("#wordu2").slideUp(500);
	 
   	return false;
 	});
	
	$('#swordis').click(function(){
	$("#worde3").slideDown(500);
	$("#words").hide();
		$("#worde2").hide();
   	return false;
 	});
	
	$('#swordis2').click(function(){
	$("#worde3").slideUp(500);
	 
   	return false;
 	});
	
	    $("#visa").hide();
	    $("#chek").hide();
		$("#om").hide();
		$("#mtn").hide();
		$("#paypal").hide();
		
		$('#paypalclik').click(function(){
	$("#paypal").fadeIn(500);
	$("#chek").hide();
	$("#om").hide();
	$("#mtn").hide();
	$("#visa").hide();
 		 
   	return false;
 	});
	
	$('#paypalaf').click(function(){
	$("#paypal").fadeOut(500);
	 
   	return false;
 	});
		
	$('#visaclik').click(function(){
	$("#visa").fadeIn(500);
	$("#chek").hide();
	$("#om").hide();
	$("#mtn").hide();
	$("#paypal").hide();
 		 
   	return false;
 	});
	
	$('#visaaf').click(function(){
	$("#visa").fadeOut(500);
	 
   	return false;
 	});
	
	$('#chekclik').click(function(){
	$("#chek").fadeIn(500);
	$("#visa").hide();
	$("#om").hide();
	$("#mtn").hide();
	$("#paypal").hide();
 		 
   	return false;
 	});
	
	$('#ckekaf').click(function(){
	$("#chek").fadeOut(500);
	 
   	return false;
 	});
	
	$('#omclik').click(function(){
	$("#om").fadeIn(500);
	$("#visa").hide();
	$("#chek").hide();
	$("#mtn").hide();
	$("#paypal").hide();
 		 
   	return false;
 	});
	
	$('#omaf').click(function(){
	$("#om").fadeOut(500);
	 
   	return false;
 	});
	
	$('#mtnclik').click(function(){
	$("#mtn").fadeIn(500);
	$("#visa").hide();
	$("#chek").hide();
	$("#om").hide();
	$("#paypal").hide();
  		 
   	return false;
 	});
	
	$('#mtnaf').click(function(){
	$("#mtn").fadeOut(500);
	 
   	return false;
 	});
	$("#visa2").hide();
	    $("#chek2").hide();
		$("#om2").hide();
		$("#mtn2").hide();
		$("#paypal2").hide();
        
		
		$('#paypalclik2').click(function(){
	$("#paypal2").fadeIn(500);
	$("#chek2").hide();
	$("#om2").hide();
	$("#mtn2").hide();
	$("#visa2").hide();
 		 
   	return false;
 	});
	
	$('#paypalaf2').click(function(){
	$("#paypal2").fadeOut(500);
	 
   	return false;
 	});
		
	$('#visaclik2').click(function(){
	$("#visa2").fadeIn(500);
	$("#chek2").hide();
	$("#om2").hide();
	$("#mtn2").hide();
	$("#paypal2").hide();
 		 
   	return false;
 	});
	
	$('#visaaf2').click(function(){
	$("#visa2").fadeOut(500);
	 
   	return false;
 	});
	
	$('#chekclik2').click(function(){
	$("#chek2").fadeIn(500);
	$("#visa2").hide();
	$("#om2").hide();
	$("#mtn2").hide();
	$("#paypal2").hide();
 		 
   	return false;
 	});
	
	$('#ckekaf2').click(function(){
	$("#chek2").fadeOut(500);
	 
   	return false;
 	});
	
	$('#omclik2').click(function(){
	$("#om2").fadeIn(500);
	$("#visa2").hide();
	$("#chek2").hide();
	$("#mtn2").hide();
	$("#paypal2").hide();
 		 
   	return false;
 	});
	
	$('#omaf2').click(function(){
	$("#om2").fadeOut(500);
	 
   	return false;
 	});
	
	$('#mtnclik2').click(function(){
	$("#mtn2").fadeIn(500);
	$("#visa2").hide();
	$("#chek2").hide();
	$("#om2").hide();
	$("#paypal2").hide();
  		 
   	return false;
 	});
	
	$('#mtnaf2').click(function(){
	$("#mtn2").fadeOut(500);
	 
   	return false;
 	});
		 



  	 
	
	 
	
	$('#sword2').click(function(){
	$("#word").slideUp(500);
   	return false;
 	});
	
	$('#sworde').click(function(){
	$("#word2").slideDown(500);
	$("#word").hide();
		$("#word3").hide();
   	return false;
 	});
	
	$('#sworde2').click(function(){
	$("#word2").slideUp(500);
   	return false;
 	});
	
	$('#swordi').click(function(){
	$("#word3").slideDown(500);
	$("#word2").hide();
		$("#word").hide();
   	return false;
 	});
	
	$('#swordi2').click(function(){
	$("#word3").slideUp(500);
   	return false;
 	});
	
	
        $(".slidingDiv").hide();
        $(".show_hide").show();
	

	$('.show_hide').click(function(){
	$(".slidingDiv").slideToggle(500);
  	return false;
 	});
	
	
        $(".info").show();
        $(".closeinf").show();
	

	$('.closeinf').click(function(){
	$(".info").slideToggle(500);
  	return false;
 	});
	 
	  
	  $(".baner").fadeIn(1000);
         
	  

	$('.banerinf').click(function(){
	$(".baner").fadeOut(500);
  	return false;
 	});
	
        $(".slidingDivv").hide();
        $(".show_hidev").show();
	

	$('.show_hidev').click(function(){
	$(".slidingDivv").slideToggle(500);
		$(".indr").hide();
        $(".indr2").hide();
   	return false;
 	});
	
	    $(".indr").hide();
        $(".inde").show();
	

	$('.inde').click(function(){
	$(".indr").slideToggle(500);
	$(".indr2").hide();
   	return false;
 	});
	
	    $(".indr2").hide();
        $(".inde2").show();
	

	$('.inde2').click(function(){
	$(".indr2").slideToggle(500);
	$(".indr").hide();
   	return false;
 	});


     

});
 
$(document).ready(function(){

        $(".slidingDiv2").hide();
        $(".show_hide2").show();
	

	 
	
 
$(".show_hide2").mouseover(function () {  
$(".slidingDiv2").slideDown(800); 

});



$(".reference").mouseleave(function () { 
$(".slidingDiv2").slideUp(800);

});


});

 $(document).ready(function(){

        $(".about").hide();
        $(".show_hide3").show();
		 
	

	$('.show_hide3').click(function(){
	$(".about").slideToggle(500);
 	$(".famille").hide();
	$(".amis").hide();
	$(".joinus").hide();
	$(".contact").hide();
	$(".print").hide();
	$(".web").hide();
	$(".tv").hide();
     	return false;
 	});
	
	    $(".famille").hide();
        $(".show_hide6").show();
		 
	
 

$(".show_hide6").mouseover(function () {  
$(".famille").slideDown(800); 

});


$(".ac").mouseover(function () {  
$(".famille").slideUp(800); 

});
 

$(".pr").mouseover(function () {  
$(".famille").slideUp(800); 

});

$(".pv").mouseover(function () {  
$(".famille").slideUp(800); 

});

$(".ctc").mouseover(function () {  
$(".famille").slideUp(800); 

});

$(".imgov").mouseover(function () {  
$(".famille").slideUp(800); 

});

$(".as").mouseover(function () {  
$(".famille").slideUp(800); 

});

$(".famille").mouseleave(function () { 
$(".famille").slideUp(800);

});

        $(".amis").hide();
        $(".show_hide8").show();
		 
	

	$('.show_hide8').click(function(){
	$(".amis").slideToggle(500);
 	
	$(".famille").hide();
	$(".about").hide();
	$(".joinus").hide();
	$(".contact").hide();
	$(".print").hide();
	$(".web").hide();
	$(".tv").hide();
    	return false;
 	});

        $(".joinus").hide();
        $(".show_hide10").show();
		 
	

	$('.show_hide10').click(function(){
	$(".joinus").slideToggle(500);
	$(".famille").hide();
	$(".about").hide();
	$(".amis").hide();
	$(".contact").hide();
	$(".print").hide();
	$(".web").hide();
	$(".tv").hide();
    	return false;
 	});
	
        $(".contact").hide();
        $(".show_hide12").show();
		 
	

	$('.show_hide12').click(function(){
	$(".contact").slideToggle(500);
	$(".famille").hide();
	$(".about").hide();
	$(".amis").hide();
	$(".joinus").hide();
	$(".print").hide();
	$(".web").hide();
	$(".tv").hide();
    	return false;
 	});

        $(".print").hide();
        $(".printaf").show();
		 
	

	$('.printaf').click(function(){
	$(".print").slideToggle(500);
	$(".tv").hide();
	$(".web").hide();
	$(".famille").hide();
	$(".about").hide();
	$(".amis").hide();
	$(".joinus").hide();
	$(".contact").hide();

	return false;
 	});
	
	    $(".tv").hide();
        $(".tvaf").show();
		 
	

	$('.tvaf').click(function(){
	$(".tv").slideToggle(500);
	$(".print").hide();
	$(".web").hide();
	$(".famille").hide();
	$(".about").hide();
	$(".amis").hide();
	$(".joinus").hide();
	$(".contact").hide();
    	return false;
 	});

        $(".web").hide();
        $(".webaf").show();
		 
	

	$('.webaf').click(function(){
	$(".web").slideToggle(500);
	$(".tv").hide();
	$(".print").hide();
	$(".famille").hide();
	$(".about").hide();
	$(".amis").hide();
	$(".joinus").hide();
	$(".contact").hide();
return false;
 	});
	
	    $(".divplus").hide();
        $(".plus").show();
		 
	

	$('.plus').click(function(){
	$(".divplus").slideToggle(500);
 	 
return false;
 	});
	
        $(".about").hide();
        $(".show_hide4").show();
		 
	

	$('.show_hide4').click(function(){
	$(".about").slideToggle(500);
    	return false;
 	});
        $(".famille").hide();
        $(".show_hide5").show();
		 
	

	$('.show_hide5').click(function(){
	$(".famille").slideToggle(500);
 	$(".divplus").hide();
    	return false;
 	});
	
	    $(".amis").hide();
        $(".show_hide7").show();
		 
	

	$('.show_hide7').click(function(){
	$(".amis").slideToggle(500);
     	return false;
 	});
	
	    $(".joinus").hide();
        $(".show_hide9").show();
		 
	

	$('.show_hide9').click(function(){
	$(".joinus").slideToggle(500);
     	return false;
 	});
	
	    $(".contact").hide();
        $(".show_hide11").show();
		 
	

	$('.show_hide11').click(function(){
	$(".contact").slideToggle(500);
     	return false;
 	});
	
	    $(".rxin").hide();
        $(".rxind").show();
		 
	

	$('.rxind').click(function(){
	$(".rxin").slideToggle(500);
     	return false;
 	});
	
	    $(".rx43").hide();
        $(".r43").show();
		 
	

	$('.r43').click(function(){
	$(".rx43").slideToggle(500);
	$(".rx12").hide();
	$(".rxpor").hide();
     	return false;
 	});
	
	    $(".rx12").hide();
        $(".r12").show();
		 
	

	$('.r12').click(function(){
	$(".rx12").slideToggle(500);
	$(".rx43").hide();
	$(".rxpor").hide();
     	return false;
 	});
	
	$(".rxpor").hide();
        $(".rpor").show();
		 
	

	$('.rpor').click(function(){
	$(".rxpor").slideToggle(500);
	$(".rx43").hide();
	$(".rx12").hide();
     	return false;
 	});
	
	    $(".43r").hide();
        $(".43rx").show();
		 
	

	$('.43rx').click(function(){
	$(".43r").slideToggle(500);
	$(".12r").hide();
	$(".porr").hide();
     	return false;
 	});
	
	    $(".12r").hide();
        $(".12rx").show();
		 
	

	$('.12rx').click(function(){
	$(".12r").slideToggle(500);
	$(".43r").hide();
	$(".porr").hide();
     	return false;
 	});
	
	    $(".porr").hide();
        $(".porrx").show();
		 
	

	$('.porrx').click(function(){
	$(".porr").slideToggle(500);
	$(".43r").hide();
	$(".12r").hide();
     	return false;
 	});
	
	    $(".print").hide();
        $(".printaff").show();
		 
	

	$('.printaff').click(function(){
	$(".print").slideToggle(500);
     	return false;
 	});
	
	    $(".tv").hide();
        $(".tvaff").show();
		 
	

	$('.tvaff').click(function(){
	$(".tv").slideToggle(500);
     	return false;
 	});
	
	    $(".web").hide();
        $(".webaff").show();
		 
	

	$('.webaff').click(function(){
	$(".web").slideToggle(500);
     	return false;
 	});
	
});
 
  
$(document).ready(function(){

        $(".h06").show();
        $(".v06").show();
	
        $(".h07").hide();
        $(".v07").show();
	 
	    $(".h08").hide();
        $(".v08").show();
		
		$(".h09").hide();
        $(".v09").show();
		
		$(".h10").hide();
        $(".v10").show();
		
		$(".h11").hide();
        $(".v11").show();
		
		$(".h12").hide();
        $(".v12").show();
		
		$(".h13").hide();
        $(".v13").show();
		
		$(".h14").hide();
        $(".v14").show();
		
		$(".h15").hide();
        $(".v15").show();
		
		$(".h16").hide();
        $(".v16").show();
		
		$(".h17").hide();
        $(".v17").show();
		
		$(".h18").hide();
        $(".v18").show();
		
		$(".h19").hide();
        $(".v19").show();
		
		$(".h20").hide();
        $(".v20").show();
		
		$(".h21").hide();
        $(".v21").show();
		
		$(".h22").hide();
        $(".v22").show();
		
		$(".h23").hide();
        $(".v23").show();
		
		$(".h24").hide();
        $(".v24").show();
		
		$(".h25").hide();
        $(".v25").show();
		
		$(".h26").hide();
        $(".v26").show();
		
		$(".h27").hide();
        $(".v27").show();
		
	    $(".h28").hide();
        $(".v28").show();
		
		$(".h29").hide();
        $(".v29").show();
		
		$(".h30").hide();
        $(".v30").show();
		
		$(".h31").hide();
        $(".v31").show();
		
		$(".h32").hide();
        $(".v32").show();
		
		$(".h33").hide();
        $(".v33").show();
		
		$(".h34").hide();
        $(".v34").show();
		
		$(".h35").hide();
        $(".v35").show();
		
		$(".h36").hide();
        $(".v36").show();
		
		$(".h37").hide();
        $(".v37").show();
		
		$(".h38").hide();
        $(".v38").show();
		
		$(".h39").hide();
        $(".v39").show();
		
		$(".h40").hide();
        $(".v40").show();
		
		$(".h41").hide();
        $(".v41").show();
		
		$(".h42").hide();
        $(".v42").show();
		
		$(".h43").hide();
        $(".v43").show();
		
			$(".h44").hide();
        $(".v44").show();
 
		
		$(".h45").hide();
        $(".v45").show();
		
		$(".h46").hide();
        $(".v46").show();
		
		$(".h47").hide();
        $(".v47").show();
		
		$(".h48").hide();
        $(".v48").show();
		
		$(".h49").hide();
        $(".v49").show();
		
		$(".h50").hide();
        $(".v50").show();
		
		$(".h51").hide();
        $(".v51").show();
		
			$(".h52").hide();
        $(".v52").show();
 
 	$(".h53").hide();
        $(".v53").show();
		
 	$(".h54").hide();
        $(".v54").show();
		
			$(".h55").hide();
        $(".v55").show();
		
	 
 
 
 
$(".v06").click(function () {  
$(".h06").show(); 
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide(); 
$(".h12").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });

$(".v07").click(function () {  
$(".h07").show(); 
$(".h06").hide(); 
$(".h08").hide();
$(".h09").hide(); 
$(".h10").hide();
$(".h11").hide(); 
$(".h12").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();  
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
$(".v08").click(function () {  
$(".h08").show(); 
$(".h06").hide();
$(".h07").hide();  
$(".h09").hide(); 
$(".h10").hide();
$(".h11").hide(); 
$(".h12").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide(); 
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });


$(".v09").click(function () {  
$(".h09").show(); 
$(".h06").hide();
$(".h07").hide();  
$(".h08").hide(); 
$(".h10").hide();
$(".h11").hide(); 
$(".h12").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide(); 
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });


$(".v10").click(function () {  
$(".h10").show(); 
$(".h06").hide(); 
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
 $(".h11").hide(); 
 $(".h12").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide(); 
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });


$(".v11").click(function () {  
$(".h11").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h12").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v12").click(function () {  
$(".h12").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v13").click(function () {  
$(".h13").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
 $(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v14").click(function () {  
$(".h14").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v15").click(function () {  
$(".h15").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h14").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });

$(".v16").click(function () {  
$(".h16").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
 $(".h14").hide();
$(".h15").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v17").click(function () {  
$(".h17").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v18").click(function () {  
$(".h18").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h19").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v19").click(function () {  
$(".h19").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h20").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v20").click(function () {  
$(".h20").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h21").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
  $(".v21").click(function () {  
$(".h21").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
 });
 
 $(".v22").click(function () {  
$(".h22").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 
  $(".v23").click(function () {  
$(".h23").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v24").click(function () {  
$(".h24").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v25").click(function () {  
$(".h25").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v26").click(function () {  
$(".h26").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v25").click(function () {  
$(".h25").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h9").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 
 $(".v26").click(function () {  
$(".h26").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v27").click(function () {  
$(".h27").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v28").click(function () {  
$(".h28").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h29").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v29").click(function () {  
$(".h29").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h30").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v30").click(function () {  
$(".h30").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h31").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
  $(".v31").click(function () {  
$(".h31").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
  $(".v32").click(function () {  
$(".h32").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v33").click(function () {  
$(".h33").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v34").click(function () {  
$(".h34").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v35").click(function () {  
$(".h35").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v36").click(function () {
$(".h36").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
  $(".v37").click(function () {
$(".h37").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v38").click(function () {
$(".h38").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });

$(".v39").click(function () {
$(".h39").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });

$(".v40").click(function () {
$(".h40").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });

$(".v41").click(function () {
$(".h41").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });

$(".v42").click(function () {
$(".h42").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v43").click(function () {
$(".h43").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v44").click(function () {
$(".h44").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
 });
 
  $(".v45").click(function () {
$(".h45").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
 $(".v46").click(function () {
$(".h46").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
  $(".v47").click(function () {
$(".h47").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
  $(".v48").click(function () {
$(".h48").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
   $(".v49").click(function () {
$(".h49").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
    $(".v50").click(function () {
$(".h50").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
     $(".v51").click(function () {
$(".h51").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
  $(".v52").click(function () {
$(".h52").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h53").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
   $(".v53").click(function () {
$(".h53").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h54").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
    $(".v54").click(function () {
$(".h54").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h55").hide();
$(".h44").hide();
 });
 
    $(".v55").click(function () {
$(".h55").show();
$(".h06").hide();  
$(".h07").hide(); 
$(".h08").hide();
$(".h09").hide();
$(".h10").hide();
$(".h11").hide();
$(".h12").hide();
$(".h13").hide();
$(".h13").hide();
$(".h14").hide();
$(".h15").hide();
$(".h16").hide();
$(".h17").hide();
$(".h18").hide();
$(".h19").hide();
$(".h20").hide(); 
$(".h21").hide();
$(".h22").hide();
$(".h23").hide();
$(".h24").hide();
$(".h25").hide();
$(".h26").hide();
$(".h27").hide();
$(".h28").hide();
$(".h29").hide();
$(".h30").hide(); 
$(".h31").hide();
$(".h32").hide();
$(".h33").hide();
$(".h34").hide();
$(".h35").hide();
$(".h36").hide();
$(".h37").hide();
$(".h38").hide();
$(".h39").hide();
$(".h40").hide();
$(".h41").hide();
$(".h42").hide();
$(".h43").hide();
$(".h45").hide();
$(".h46").hide();
$(".h47").hide();
$(".h48").hide();
$(".h49").hide();
$(".h50").hide();
$(".h51").hide();
$(".h52").hide();
$(".h53").hide();
$(".h54").hide();
 });
     
		$(".l100").show();
        $(".g100").show();
		
		$(".l101").hide();
        $(".g101").show();
		
		$(".l102").hide();
        $(".g102").show();
		
		$(".l103").hide();
        $(".l103").show();
		
		$(".l104").hide();
        $(".g104").show();
		
		$(".l105").hide();
        $(".g105").show();
		
		$(".l106").hide();
        $(".g106").show();
		
		$(".l107").hide();
        $(".g107").show();
		
		$(".l108").hide();
        $(".g108").show();
		
		$(".l109").hide();
        $(".g109").show();
		
		$(".l110").hide();
        $(".g110").show();
		
		$(".l111").hide();
        $(".g111").show();
		
		$(".l112").hide();
        $(".g112").show();
		
		$(".l113").hide();
        $(".g113").show();
		
		 
 

$(".g100").mouseover(function () {  
$(".l100").show();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
$(".l113").hide();
});


$(".g101").mouseover(function () {  
$(".l101").show();
$(".l100").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
$(".l113").hide();
 });
 
 $(".g102").mouseover(function () {  
$(".l102").show();
$(".l100").hide();
$(".l101").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
$(".l113").hide();
 });
 
 $(".g103").mouseover(function () {  
$(".l103").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
$(".l113").hide();
 });
 
 $(".g104").mouseover(function () {  
$(".l104").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
$(".l113").hide();
 });
 
 $(".g105").mouseover(function () {  
$(".l105").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
$(".l113").hide();
 });

  $(".g106").mouseover(function () {  
$(".l106").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
$(".l113").hide();

 });
 
   $(".g107").mouseover(function () {  
$(".l107").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide();
$(".l111").hide(); 
$(".l112").hide();
$(".l113").hide();
 });
 
   $(".g108").mouseover(function () {  
$(".l108").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l109").hide();
$(".l110").hide();
$(".l111").hide(); 
$(".l112").hide();
$(".l113").hide();
 });
 
   $(".g109").mouseover(function () {  
$(".l109").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l110").hide();
$(".l111").hide(); 
$(".l112").hide();
$(".l113").hide();
 });
 
   $(".g110").mouseover(function () {  
$(".l110").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l111").hide(); 
$(".l112").hide();
$(".l113").hide();
 });
 
    $(".g111").mouseover(function () {  
$(".l111").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l112").hide();
$(".l113").hide();
 });
 
   $(".g112").mouseover(function () {  
$(".l112").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l113").hide();
 });
 
 
  $(".g113").mouseover(function () {  
$(".l113").show();
$(".l100").hide();
$(".l101").hide();
$(".l102").hide();
$(".l103").hide();
$(".l104").hide();
$(".l105").hide();
$(".l106").hide();
$(".l107").hide();
$(".l108").hide();
$(".l109").hide();
$(".l110").hide(); 
$(".l111").hide();
$(".l112").hide();
 

 });
 




});

/*plugin nail*/
 