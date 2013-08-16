var urll='localhost/trashmetal';

$(document).ready(function(){
 
  $('#submit').click(function(){
     var username=$("#username").val();
      var password=$("#password").val();
	  //alert(("#datepicker").datepicker());
	  $('#form_message').html('<img src="images/loadingAnimation.gif"> ');
$.ajax({
  		type: "POST",
  		url: "login/post_login",
  		 data: "username="+username+"&password="+password,
  		success: function(msg){
  			//$("#tunggutambahjabatan").html("");
  
							//alert(msg);
							if (msg=='Username and password  cocok')
							{
								location.href="main";
							}else{
							$('#form_message').html(msg);
							}
							
							
  				                       
         
  			
  		}
      });
 
      return false;
	  
  });
  

 
});