$(document).ready(function(){
 
		$('#h1').show();
		$('#s1').hide();
		
		$('#h2').show();
		$('#s2').hide();
		
		$('#h3').show();
		$('#s3').hide();
		
		$('#h4').show();
		$('#s4').hide();
		
		$('#h5').show();
		$('#s5').hide();
		
		$('#h6').show();
		$('#s6').hide();
		
		$('#h7').show();
		$('#s7').hide();
	
		$('#h8').show();
		$('#s8').hide();


	$('#selection3').change(function(){
		
		var a,b,c,sel,kali;
		a=$("#firstname1").val();
		b=$("#middle1").val();
		c=$("#lastname1").val();
		sel=$("#selection3").val();
		kali=$("#applic").val();
		if(a==''){
		alert('Firstname must be fill');
		}else{
		$.ajax({
				type: "POST",
				url: "index.php/credit_check_fee",
				 data: "a="+a+"&b="+b+"&c="+c+"&sel="+sel+"&kali="+kali,
				success: function(msg){
					$('#cash').html(msg);
				}
			  });
		 
			  return false;
		}
	});	
	
	
		
		
//        $('#hide1').click(function(){
//		$("#ri").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h1').hide();
//		$('#s1').show();
//	});
//	
//	$('#show1').click(function(){
//		$("#ri").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h1').show();
//		$('#s1').hide();
//	});
//	
//	   $('#hide2').click(function(){
//		$("#ai").slideToggle();
//		//$('#vbtn2').html("<img border='0' src='images/show.jpg' >");
//		$('#h2').hide();
//		$('#s2').show();
//	});
//	
//	$('#show2').click(function(){
//		$("#ai").slideToggle();
//		//$('#vbtn2').html("<img border='0' src='images/show.jpg' >");
//		$('#h2').show();
//		$('#s2').hide();
//	});
//	
//	   $('#hide3').click(function(){
//		$("#rh").slideToggle();
//		//$('#vbtn2').html("<img border='0' src='images/show.jpg' >");
//		$('#h3').hide();
//		$('#s3').show();
//	});
//	
//	$('#show3').click(function(){
//		$("#rh").slideToggle();
//		//$('#vbtn2').html("<img border='0' src='images/show.jpg' >");
//		$('#h3').show();
//		$('#s3').hide();
//	});
//	
//	$('#hide4').click(function(){
//		$("#eii").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h4').hide();
//		$('#s4').show();
//	});
//	
//	$('#show4').click(function(){
//		$("#eii").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h4').show();
//		$('#s4').hide();
//	});
//	
//	$('#hide5').click(function(){
//		$("#pr").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h5').hide();
//		$('#s5').show();
//	});
//	
//	$('#show5').click(function(){
//		$("#pr").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h5').show();
//		$('#s5').hide();
//	});
//	
//	$('#hide6').click(function(){
//		$("#bi").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h6').hide();
//		$('#s6').show();
//	});
//	
//	$('#show6').click(function(){
//		$("#bi").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h6').show();
//		$('#h6').hide();
//	});
//	
//	$('#hide7').click(function(){
//		$("#cf").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h7').hide();
//		$('#s7').show();
//	});
//	
//	$('#show7').click(function(){
//		$("#cf").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h7').show();
//		$('#h7').hide();
//	});
//	
//$('#hide8').click(function(){
//		$("#agreements").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h8').hide();
//		$('#s8').show();
//	});
//	
//	$('#show8').click(function(){
//		$("#agreements").slideToggle();
//		//$('#vbtn').html("<img border='0' src='images/show.jpg' >");
//		$('#h8').show();
//		$('#h8').hide();
//	});

		$('#vreference1').hide();
		$('#vreference2').hide();
		$('#vreference3').hide();
		$('#vreference4').hide();
		$('#vreference5').hide();
	
		$('#MsRentalInformation_referedlead').change(function(){
                    
		var ref;
		ref=$(this).val();
                
		switch (ref)
		{
		  case '1': $('#vreference1').show();
					$('#vreference2').hide();
					$('#vreference3').hide();
					$('#vreference4').hide();
					$('#vreference5').hide();
					break;
		  case '2': $('#vreference2').show();
					$('#vreference3').hide();
					$('#vreference4').hide();
					$('#vreference5').hide();
					break;
		  case '3':  $('#vreference3').show();
					$('#vreference2').hide();
					$('#vreference4').hide();
					$('#vreference5').hide();
					break;
		  case '4':  $('#vreference4').show();
					$('#vreference3').hide();
					$('#vreference2').hide();
					$('#vreference5').hide();
					break;
		  case '5':  $('#vreference5').show();
					$('#vreference3').hide();
					$('#vreference4').hide();
					$('#vreference2').hide();
					break;
                  default: 		
                      $('#vreference1').hide();
                      $('#vreference2').hide();
                      $('#vreference3').hide();
                      $('#vreference4').hide();
                      $('#vreference5').hide();
                      break;
		 
		}
		
	});

	$('#deposit').keypress(function(e){
      if(e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
      {
        return false;
      }
  });

  $("#zipcode").keypress(function(e){
      if(e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
      {
        return false;
      }
  });
  
  $("#monthlyrent").keypress(function(e){
      if(e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
      {
        return false;
      }
  });

  
  $('#deposit').blur(function() {
 	 var myLength = $("#deposit").val().length;
	 if (myLength< 6){
	 	$("#msgbox").html("Deposit must be >= 100.00");
	 }else{
		$("#msgbox").html("");
	 }

});

$('#address').blur(function() {
 	 
	 	var myLength = $("#address").val().length;
	 if (myLength<=0){
	 	$("#msgbox").html("Address can not be empty");
	 }else{
		$("#msgbox").html("");
	 }
	 

});

$('#city').blur(function() {
 	 
	 	var myLength = $("#city").val().length;
	 if (myLength<=0){
	 	$("#msgbox").html("City can not be empty");
	 }else{
		$("#msgbox").html("");
	 }
	 

});



$('#state').blur(function() {
 	 
	 	var myLength = $("#state").val().length;
	 if (myLength<=0){
	 	$("#msgbox").html("State can not be empty");
	 }else{
		$("#msgbox").html("");
	 }
	 

});

$('#zipcode').blur(function() {
 	 
	 	var myLength = $("#zipcode").val().length;
	 if (myLength<5){
	 	$("#msgbox").html("Invalid Zip Code");
	 }else{
		$("#msgbox").html("");
	 }
	 

});


$(function() {
		$('#anticipated_date').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });
			
			$('#birth1').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			$('#birth2').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth3').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth4').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth5').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth6').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth7').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth8').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth9').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });

			 $('#birth10').datepicker({
		      changeMonth: true,
		      changeYear: true
	        });
	});

				$('#pref1').keypress(function(e){
					  if(e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
					  {
						return false;
					  }
				  });
				  $('#pref2').keypress(function(e){
					  if(e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
					  {
						return false;
					  }
				  });
				  $('#pref3').keypress(function(e){
					  if(e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
					  {
						return false;
					  }
				  });


	

	$('#saveform').click(function(){
		//alert($("#selection").val());
		var txtuser=$("#txtuser").val();
		var txtpassword=$("#txtpassword").val();
		var rentalinformation,ai,rh,vareii,varpr,varbi,vb;
		var applicationinformation="";
		var residentalhistory="";	
		var subresidentalhistory="";
		var eii="";
		var subeii="";
		var pr="";
		var prsub="";
		var bi="";
		

		/*----------------------- rental information--------------------------------------------*/
		if($("#applic").val()=='0')
		{
			alert('Please Select Applicant on Rental Information');
			exit();
		}
		if($("#address").val()==""){
			alert('The Field Adddress is required on Rental Information');
			exit();
		}
		if($("#city").val()==""){
			alert('The Field  City is required on Rental Information');
			exit();
		}
		if($("#anticipated_date").val()==""){
			alert('The Field  Anticipated date is required on Rental Information');
			exit();
		}
		if($("#state").val()==""){
			alert('The Field  State  is required on Rental Information');
			exit();
		}
		if($("#zipcode").val()==""){
			alert('The Field  Zip Code  is required on Rental Information');
			exit();
		}	
		rentalinformation=$("#applic").val()+"##"+$("#company").val()+"##"+$("#address").val()+"##"+$("#city").val()+"##"+$("#anticipated_date").val()+"##"+$("#deposit").val()+"##"+$("#selection1").val()+"##"+$("#selection2").val()+"##"+$("#unit").val()+"##"+$("#state").val()+"##"+$("#zipcode").val()+"##"+$("#monthlyrent").val()+"##"+$("#referedlead").val()+"##"+$("#venue").val()+"##"+$("#nameref").val()+"##"+$("#pref1").val()+"##"+$("#pref2").val()+"##"+$("#pref3").val()+"##"+$("nameref2").val()+"##"+$("#tenantexisting").val()+"##"+$("#other").val();
		/*----------------------- rental information--------------------------------------------*/
		
		/*----------------------- application information--------------------------------------------*/
		if($("#firstname1").val()=='')
		{
			alert('The Field First Name is required on Applicant Information');
			exit();
		}
		if($("#lastname1").val()=='')
		{
			alert('The Field Last Name is required on Applicant Information');
			exit();
		}
		if($("#birth1").val()=='')
		{
			alert('The Field Birth is required on Applicant Information');
			exit();
		}
		if($("#ssn11").val()=='' || $("#ssn21").val()=='' || $("#ssn31").val()=='')
		{
			alert('The Field SSN is required on Applicant Information');
			exit();
		}
		if($("#vallicense1").val()=='')
		{
			alert('The Field ID  is required on Applicant Information');
			exit();
		}
		if($("#email1").val()=='' || $("#vemail1").val()=='')
		{
			alert('The Field Email  is required on Applicant Information');
			exit();
		}
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if(!emailReg.test($("#email1").val())) {
			alert('Enter a valid email address on Applicant Information');
			exit();
		}
		if($("#cellphone11").val()=='')
		{
			alert('The Field Cell Phone  is required on Applicant Information');
			exit();
		}
 params =["firstname","middle","lastname","birth","ssn1","ssn2","ssn3","driverlicense","vallicense","email","vemail","cellphone1","cellphone2","cellphone3","homephone1","homephone2","homephone3","cekpet","pet","depositpet"];
 ai=$("#applic").val();
 //alert($("#skipai2").val());
if ($("#skipai2:checked").val()){
	ai=1;
}else{
	ai=ai;
}
//alert(ai);
 for (var i=1;i<=ai;i++)
{

			jQuery.each(params, function() {
				params[this] = jQuery('#'+this+i).val();
			});

			applicationinformation=applicationinformation+"@@"+params.firstname+"##"+params.middle+"##"+params.lastname+"##"+params.birth+"##"+params.ssn1+"##"+params.ssn2+"##"+params.ssn3+"##"+params.driverlicense+"##"+params.vallicense+"##"+params.email+"##"+params.vemail+"##"+params.cellphone1+"##"+params.cellphone2+"##"+params.cellphone3+"##"+params.homephone1+"##"+params.homephone2+"##"+params.homephone3+"##"+params.cekpet+"##"+params.pet+"##"+params.depositpet+"##";
}
/*----------------------- application information--------------------------------------------*/

/*----------------------- residental history--------------------------------------------*/
if($("#currentaddress1").val()=='')
{
	alert('The Field Address  is required on Residental history');
	exit();
}
if($("#city1").val()=='')
{
	alert('The Field City  is required on Residental history');
	exit();
}
if($("#currentaddress1").val()=='')
{
	alert('The Field Address  is required on Residental history');
	exit();
}
if($("#staterh1").val()=='')
{
	alert('The Field State  is required on Residental history');
	exit();
}
if($("#ziprh1").val()=='')
{
	alert('The Field Zip Code  is required on Residental history');
	exit();
}
if($("#rentrh1").val()=='')
{
	alert('The Field Rent $  is required on Residental history');
	exit();
}
if($("#reasonrh1").val()=='')
{
	alert('The Field Reason is required on Residental history');
	exit();
}
 paramsrh =["currentaddress","unit1","city","staterh","ziprh","month","year","rentrh","lanlord","namerh","reasonrh","phonerh1","phonerh2","phonerh3","idformrh","counterrh"];
 paramsrhsub =["subcurrentaddress","subunit","subcity","substaterh","subziprh","submonth","subyear","subrentrh","sublanlord","subnamerh","subreasonrh","subphonerh1","subphonerh2","subphonerh3"]
rh=$("#applic").val();
 //alert($("#skipai2").val());
if ($("#skiprh2:checked").val()){
	rh=1;
}else{
	rh=rh;
}
//alert(ai);
 for (var ii=1;ii<=rh;ii++)
{

			jQuery.each(paramsrh, function() {
				paramsrh[this] = jQuery('#'+this+ii).val();
			});

			residentalhistory=residentalhistory+"@@"+paramsrh.currentaddress+"##"+paramsrh.unit1+"##"+paramsrh.city+"##"+paramsrh.staterh+"##"+paramsrh.ziprh+"##"+paramsrh.month+"##"+paramsrh.year+"##"+paramsrh.rentrh+"##"+paramsrh.lanlord+"##"+paramsrh.namerh+"##"+paramsrh.reasonrh+"##"+paramsrh.phonerh1+"##"+paramsrh.phonerh2+"##"+paramsrh.phonerh3+"##"+paramsrh.idformrh+"##"+paramsrh.counterrh+"##";
			if(paramsrh.counterrh>=1){
				
				for (var s=1;s<=paramsrh.counterrh;s++)
				{
					jQuery.each(paramsrhsub, function() {
						paramsrhsub[this] = jQuery('#'+this+ii+s).val();
					});

					subresidentalhistory=subresidentalhistory+"@@"+paramsrhsub.subcurrentaddress+"##"+paramsrhsub.subunit+"##"+paramsrhsub.subcity+"##"+paramsrhsub.substaterh+"##"+paramsrhsub.subziprh+"##"+paramsrhsub.submonth+"##"+paramsrhsub.subyear+"##"+paramsrhsub.subrentrh+"##"+paramsrhsub.sublanlord+"##"+paramsrhsub.subnamerh+"##"+paramsrhsub.subreasonrh+"##"+paramsrhsub.subphonerh1+"##"+paramsrhsub.subphonerh2+"##"+paramsrhsub.subphonerh3+"##"+paramsrh.idformrh+"##";
				}
			}
}

/*----------------------- residental history--------------------------------------------*/

/*----------------------- employment income information--------------------------------------------*/
paramseii =["employer",  "occupation",  "dateemployed",  "monthsalary",  "supervisorname",  "supervisorphone1",  "supervisorphone2",  "supervisorphone3",  "schoolname",  "grade",  "schoolcontact",  "schoolphone1",  "schoolphone2",  "schoolphone3",  "incomeamount",  "sourcecontact",  "otherphone1", "otherphone2",  "otherphone3",  "idformeii",  "selectstatus","countereii"];

paramseiisub =["subemployer",  "suboccupation",  "subdateemployed",  "submonthsalary",  "subsupervisorname",  "subsupervisorphone1",  "subsupervisorphone2",  "subsupervisorphone3",  "subschoolname",  "subgrade",  "subschoolcontact",  "subschoolphone1",  "subschoolphone2",  "subschoolphone3",  "subincomeamount",  "subsourcecontact",  "subotherphone1", "subotherphone2",  "subotherphone3",  "subidformeii",  "subselectstatus","countereii"];

vareii=$("#applic").val();
 //alert($("#skipai2").val());
if ($("#skipeii2:checked").val()){
	vareii=1;
}else{
	vareii=vareii;
}
//alert(ai);
 for (var b=1;b<=vareii;b++)
{

			jQuery.each(paramseii, function() {
				paramseii[this] = jQuery('#'+this+b).val();
			});

			eii=eii+"@@"+paramseii.employer+"##"
  +paramseii.occupation+"##"
  +paramseii.dateemployed+"##"
  +paramseii.monthsalary+"##"
  +paramseii.supervisorname+"##"
  +paramseii.supervisorphone1+"##"
  +paramseii.supervisorphone2+"##"
  +paramseii.supervisorphone3+"##"
  +paramseii.schoolname+"##"
  +paramseii.grade+"##"
  +paramseii.schoolcontact+"##"
  +paramseii.schoolphone1+"##"
  +paramseii.schoolphone2+"##"
  +paramseii.schoolphone3+"##"
  +paramseii.incomeamount+"##"
  +paramseii.sourcecontact+"##"
  +paramseii.otherphone1+"##"
  +paramseii.otherphone2+"##"
  +paramseii.otherphone3+"##"
  +paramseii.idformeii+"##"
  +paramseii.selectstatus+"##"
  +paramseii.countereii+"##";
			if(paramseii.countereii>=1){
				
				for (var c=1;c<=paramseii.countereii;c++)
				{
					jQuery.each(paramseiisub, function() {
						paramseiisub[this] = jQuery('#'+this+b+c).val();
					});

					subeii=subeii+"@@"+paramseiisub.subemployer+"##"
						  +paramseiisub.suboccupation+"##"
						  +paramseiisub.subdateemployed+"##"
						  +paramseiisub.submonthsalary+"##"
						  +paramseiisub.subsupervisorname+"##"
						  +paramseiisub.subsupervisorphone1+"##"
						  +paramseiisub.subsupervisorphone2+"##"
						  +paramseiisub.subsupervisorphone3+"##"
						  +paramseiisub.subschoolname+"##"
						  +paramseiisub.subgrade+"##"
						  +paramseiisub.subschoolcontact+"##"
						  +paramseiisub.subschoolphone1+"##"
						  +paramseiisub.subschoolphone2+"##"
						  +paramseiisub.subschoolphone3+"##"
						  +paramseiisub.subincomeamount+"##"
						  +paramseiisub.subsourcecontact+"##"
						  +paramseiisub.subotherphone1+"##"
						  +paramseiisub.subotherphone2+"##"
						  +paramseiisub.subotherphone3+"##"
						  +paramseii.idformeii+"##"
						  +paramseiisub.subselectstatus+"##"
						  +paramseii.countereii+"##";
				}
			}
}

/*----------------------- employment income information--------------------------------------------*/

/*----------------------- Personal Reference--------------------------------------------*/

paramspr =["namepr",
  "relathionshippr",
  "addresspr",
  "phonepr1",
  "phonepr2",
  "phonepr3",
  "emergencypr",
  "idformpr",
  "counterpr"];

paramsprsub =["subnamepr",
  "subrelathionshippr",
  "subaddresspr",
  "subphonepr1",
  "subphonepr2",
  "subphonepr3",
  "subemergencypr",
  "subidformpr",
  "subcounterpr"];
  
  varpr=$("#applic").val();
 //alert($("#skipai2").val());
if ($("#skippr2:checked").val()){
	varpr=1;
}else{
	varpr=varpr;
}
//alert(ai);
 for (var d=1;d<=varpr;d++)
{

			jQuery.each(paramspr, function() {
				paramspr[this] = jQuery('#'+this+d).val();
			});

			pr=pr+"@@"+paramspr.namepr+"##"
				  +paramspr.relathionshippr+"##"
				  +paramspr.addresspr+"##"
				  +paramspr.phonepr1+"##"
				  +paramspr.phonepr2+"##"
				  +paramspr.phonepr3+"##"
				  +paramspr.emergencypr+"##"
				  +paramspr.idformpr+"##"
				  +paramspr.counterpr+"##";
			if(paramspr.counterpr>=1){
				
				for (var e=1;e<=paramspr.counterpr;e++)
				{
					jQuery.each(paramsprsub, function() {
						paramsprsub[this] = jQuery('#'+this+d+e).val();
					});

					prsub=prsub+"@@"+paramsprsub.subnamepr+"##"
					  +paramsprsub.subrelathionshippr+"##"
					  +paramsprsub.subaddresspr+"##"
					  +paramsprsub.subphonepr1+"##"
					  +paramsprsub.subphonepr2+"##"
					  +paramsprsub.subphonepr3+"##"
					  +paramsprsub.subemergencypr+"##"
					  +paramspr.idformpr+"##"
					   +paramspr.counterpr+"##";
				}
			}
}

/*----------------------- personal Reference--------------------------------------------*/


/*----------------------- background information--------------------------------------------*/

 paramsbi =["bankruptcy",
  "tenancy",
  "foreclosure",
  "due"];
 paramsbi2 =["information"];
 vb=$("#applic").val();
 //alert($("#skipai2").val());
if ($("#skipbi2:checked").val()){
	vb=1;
}else{
	vb=vb;
}
//alert(ai);
 for (var f=1;f<=vb;f++)
{

			jQuery.each(paramsbi, function() {
				paramsbi[this] = jQuery('#'+this+f+':checked').val();
			});

			bi=bi+"@@"+paramsbi.bankruptcy+"##"
					  +paramsbi.tenancy+"##"
					  +paramsbi.foreclosure+"##"
					  +paramsbi.due+"##";
					  

			jQuery.each(paramsbi2, function() {
				paramsbi2[this] = jQuery('#'+this+f).val();
			});
			bi=bi+paramsbi2.information+"##";
}
/*----------------------- application information--------------------------------------------*/


	$.ajax({
				type: "POST",
				url: "index.php/save_rental/simpan",
				 data: "rentalinformation="+rentalinformation+"&txtuser="+txtuser+"&txtpassword="+txtpassword+"&applicationinformation="+applicationinformation+"&residentalhistory="+residentalhistory+"&subresidentalhistory="+subresidentalhistory+"&eii="+eii+"&subeii="+subeii+"&pr="+pr+"&prsub="+prsub+"&bi="+bi,
				success: function(msg){
					//$('#selection1').html(msg);
					//alert(msg);
					//if(msg=="OK"){
					$("div#form4").html(msg);
					//$("div#box2").show();
					$("div#box4").slideDown("slow");
					$("#cf").slideDown("slow");
					//}else{
					//	alert(msg);
					//}
				}
			  });
		 
			  return false;
			  
			 
	});
 
});