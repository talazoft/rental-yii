var urll='localhost/trashmetal';

$(document).ready(function(){
 
   $('#submit_addcus').click(function(){
 alert('asem');    
	  var nama=$("#nama").val();
      var alamat=$("#alamat").val();
	  var nohp=$("#nohp").val();
$.ajax({
  		type: "POST",
  		url: "customers/simpan_customer",
  		 data: "nama="+nama+"&alamat="+alamat+"&nohp="+nohp,
  		success: function(msg){
  			$('#m_addcus').html(msg);
  		}
      });
 
      return false;
	  
  });
 
});