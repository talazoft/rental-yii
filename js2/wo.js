
(function($) {
    $.fn.hasScrollBar = function() {
        return this.get(0).scrollHeight > this.innerHeight();
    }
})(jQuery);

//
//		$(document).ready(function () {
//			$(".show").click(function () {
//				var step=$(this).attr('id');
//				var addressri=$("#address").val();
//				var cityri=$("#city").val();
//				var anticipated_dateri=$("#anticipated_date").val();
//				var depositri=$("#deposit").val();
//				var unitri=$("#unit").val();
//				var stateri=$("#state").val();
//				var zipri=$("#zipcode").val();
//				var monthlyrentri=$("#monthlyrent").val();
//				
//				var fnai1=$("#firstname1").val();
//				var mnai1=$("#middle1").val();
//				var lnai1=$("#lastname1").val();
//				var birthai1=$("#birth").val();
//				var ssn11=$("#ssn11").val();
//				var ssn21=$("#ssn21").val();
//				var ssn31=$("#ssn31").val();
//				var vallicense1=$("#vallicense1").val();
//				var email1=$("#email1").val();
//				var vemail1=$("#vemail1").val();
//				var cellphone11=$("#cellphone11").val();
//				var homephone11=$("#homephone11").val();
//				
//				var currentaddress1=$("#currentaddress1").val();
//				var unit11=$("#unit11").val();
//				var city1=$("#city1").val();
//				var staterh1=$("#staterh1").val();
//				var rentrh1=$("#rentrh1").val();
//				var namerh1=$("#namerh1").val();
//				var phonerh11=$("#phonerh11").val();
//				var reasonrh1=$("#reasonrh1").val();
//				
//				var selectstatus1=$("#selectstatus1").val();
//				var employer1=$("#employer1").val();
//				var occupation1=$("#occupation1").val();
//				var dateemployed1=$("#dateemployed1").val();
//				var monthsalary1=$("#monthsalary1").val();
//				
//				//alert(step+addressri);
//		if( (step ==2) && (addressri !="")&& (cityri !="")&& (anticipated_dateri !="")&& (stateri !="")&& (zipri !="")){
//					$(".step_content_"+step).slideToggle(350);
//					//alert('asem');
//				}else if( ((step ==3) && (fnai1 !="")&& (lnai1 !="")&& (ssn11 !="")&& (ssn21 !="")&& (ssn31 !="")&& (vallicense1 !="")&& (cellphone11 !="")) || ((fnai1 !="")&& (lnai1 !="")&& (ssn11 !="")&& (ssn21 !="")&& (ssn31 !="")&& (vallicense1 !="")&& (cellphone11 !="") && (step==3) && ($("#skipai2:checked").val()))){
//					$(".step_content_"+step).slideToggle(350);
//				
//				}else if(((step==4) && (currentaddress1 !="")&& (unit11 !="")&& (city1 !="")&& (staterh1 !="")&& (rentrh1 !="")&& (namerh1 !="")&& (phonerh11 !="")&& (reasonrh1 !="")|| ((step==4) && (currentaddress1 !="")&& (unit11 !="")&& (city1 !="")&& (staterh1 !="")&& (rentrh1 !="")&& (namerh1 !="")&& (phonerh11 !="")&& (reasonrh1 !="") && ($("#skiprh2:checked").val())))){
//					$(".step_content_"+step).slideToggle(350);
//				}else if((step==5) && (selectstatus1 !="")&& (employer1 !="")&& (occupation1 !="")&& (dateemployed1 !="")&& (monthsalary1 !="")){
//					$(".step_content_"+step).slideToggle(350);
//				}else if(step==1){
//					$(".step_content_"+step).slideToggle(350);
//				}else if(step==6){
//					$(".step_content_"+step).slideToggle(350);
//				}else if(step==7){
//					//alert(step);
//					$(".step_content_"+step).slideToggle(350);
//				}else if(step==8){
//					$(".step_content_"+step).slideToggle(350);
//				}else if(step==9){
//					$(".step_content_"+step).slideToggle(350);
//				}
//				
//				if($(this).attr('class')=='hide'){
//					$(this).attr('class','show');	
//						
//				}else{
//					$(this).attr('class','hide');	
//					
//					//alert(step);			
//				}
//
//			});  
//
//			$(".next").click(function () {
//				var options = { path: '/', expires: 10000000000000 };
//				var co=0;
//				 if ($.cookie('step')==null) {
//					  // jika tdk ada
//					  $.cookie('step', co, options);
//				 }
//				 if (jQuery.cookie('step')) {
//					  // jika ada
//					   var y=parseInt($.cookie('step'));
//					  var step=y + 1;
//					  if(y>0 && y<9){
//					  $.cookie('step', step, options);
//					  }else{
//					  $.cookie('step', 1, options);
//					  }
//				 }
//				
//				if(parseInt($.cookie('step'))>0 && parseInt($.cookie('step'))<9){
//				var stepminus=parseInt($.cookie('step'))-1;
//				}else{
//					var stepminus=8;
//				}
//				//alert(stepminus);
//				 $(".step_content_"+$.cookie('step')).show();
//				 $(".step_content_"+stepminus).hide();
//				 /*var int step=$(this).attr('id');
//				 var int stepcount=step+1;
//				 $(this).attr('id',stepcount);*/
//                            
//                                 
//			});
//			
//			$(".prev").click(function () {
//				var options = { path: '/', expires: 10000000000000 };
//				var co=0;
//				 if ($.cookie('step')==null) {
//					  // jika tdk ada
//					  $.cookie('step', co, options);
//				 }
//				 if (jQuery.cookie('step')) {
//					  // jika ada
//					   var y=parseInt($.cookie('step'));
//					   var step=y - 1;
//					   if(y>0 && y<9){
//						$.cookie('step', step, options);
//					   }else{
//						$.cookie('step', 1, options);
//					   }
//					  
//				 }
//				if(parseInt($.cookie('step'))>0 && parseInt($.cookie('step'))<9){
//				var steppos=parseInt($.cookie('step'))+1;
//				}else{
//					var steppos=8;
//				}
//				//alert(".step_content_"+steppos);
//				 $(".step_content_"+$.cookie('step')).show();
//				 $(".step_content_"+steppos).hide();
//				 /*var int step=$(this).attr('id');
//				 var int stepcount=step+1;
//				 $(this).attr('id',stepcount);*/
//			});  
////		$(".all").click(function () {
////			$(".step_content_1").show();
////			$("#1").attr('class','hide');
////			$(".step_content_2").show();
////			$("#2").attr('class','hide');
////			$(".step_content_3").show();
////			$("#3").attr('class','hide');
////			$(".step_content_4").show();
////			$("#4").attr('class','hide');
////			$(".step_content_5").show();
////			$("#5").attr('class','hide');
////			$(".step_content_6").show();
////			$("#6").attr('class','hide');
////			$(".step_content_7").show();
////			$("#7").attr('class','hide');
////			$(".step_content_8").show();
////			$("#8").attr('class','hide');
////			$(".all").hide();
////			$(".collapse").show();
////		});  
////		$(".collapse").click(function () {
////			$(".step_content_1").hide();
////			$("#1").attr('class','show');
////			$(".step_content_2").hide();
////			$("#2").attr('class','show');	
////			$(".step_content_3").hide();
////			$("#3").attr('class','show');	
////			$(".step_content_4").hide();
////			$("#4").attr('class','show');	
////			$(".step_content_5").hide();
////			$("#5").attr('class','show');
////			$(".step_content_6").hide();
////			$("#6").attr('class','show');
////			$(".step_content_7").hide();
////			$("#7").attr('class','show');
////			$(".step_content_8").hide();
////			$("#8").attr('class','show');
////			$(".all").show();
////			$(".collapse").hide();
////		}); 
//		
//			$(".download").click(function () {
//				//$(".downloadmodal").slideToggle(350);
//                                /*if($("body").hasScrollBar()){
//                                    alert("kldfjsklfjklsdjfklsdjf");
//                                } else {
//                                    alert("YYYYYYYYYYYYYYY")
//                                }*/
//				$(".downloadmodal").load('index.php/save_form');
//			});
//			$(".search2").click(function () {
//				$(".searchmodal").slideToggle(350);
//			});
//			$(".titlestep input[type='submit']").click(function () {
//				if($("#email").val()==''){
//					$(".overlay img").attr('src','img/modalemaill.png');
//					$(".overlay").show();
//				}else{
//					$(".overlay img").attr('src','img/modal.png');
//					$(".overlay").show();
//				}
//			});
//			$(".overlay").click(function () {
//				$(".overlay").hide();
//			});
//		
//		}
//            );