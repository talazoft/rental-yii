var urll='localhost/trashmetal';

$(document).ready(function(){
 
    $('#klikmain').click(function(){
			 $('#isi').load("main/klikmain");							
  }); 

   $('#kliktambahcustomer').click(function(){
	  $('#isi').load("customers/kliktambahcustomer");
  }); 

   $('#klikdaftarcustomer').click(function(){
    // alert('asem');
	  $('#isi').load("customers/klikdaftarcustomer");
  });

  $('#kliktambahbrg').click(function(){
    // alert('asem');
	  $('#isi').load("barang/kliktambahbrg");
  });

  $('#klikdaftarbrg').click(function(){
    // alert('asem');
	  $('#isi').load("barang/klikdaftarbrg");
  });

  $('#klikbrgmasuk').click(function(){
    // alert('asem');
	  $('#isi').load("barang/klikbrgmasuk");
  });

   $('#kliklogout').click(function(){
 //alert('asem');    
$.ajax({
  		type: "POST",
  		url: "login/kliklogout",
  		 data: "",
  		success: function(msg){
  			//$("#tunggutambahjabatan").html("");
  
							//alert(msg);
							if (msg=='berhasil')
							{
								location.href="login";
							}
  		}
      });
 
      return false;
	  
  });
 
});