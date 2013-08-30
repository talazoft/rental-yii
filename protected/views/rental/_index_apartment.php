<script type="text/javascript">

$.fn.hasAttr = function(name) {  
    return this.attr(name) !== undefined;
};

$(function () { 
    $(".right-container").alternateScroll();

    $(".phone").mask("(999) 999-9999");
    $(".currency").autoNumeric();
    $(".zip").mask("99999");
    $(".ssn").mask("999-99-9999");


    $(".step_1 div.show").attr('class', 'hide')
    $(".hide").unbind("click").click(function(){
        var id = $(this).attr('id');
        if(id==1){
            $(".step_content_1").slideToggle(350);
            $("#"+id).toggleClass('show hide');
        }
    }); 

    $("#box5").unbind("click").click(function(){
        $("div#box5").hide("slow");
    });

    function validate(name){

        $("."+name+" :required").each(function(){
            var element = $(this);
            element.css({border:"", color:""});
            element.removeAttr("placeholder");
        });

        var test1 = 0;
        var test2 = 0;
        $("."+name+" :required").each(function(){
            var element = $(this);
            if(element.val() == ""){
                element.css({border:"2px solid red", color:"red"});
                element.attr("placeholder", "this field is required");
                test1--;
            } else {
                test1++;
                test2++;
            }
        });

        if(test1 == test2){
            return true;
        } else {
            return false;
        }
    }

    $(".show").unbind("click").click(function () {

        var step=$(this).attr('id');
        if(step == 1){
            $(".step_content_"+step).slideToggle(350);
        } else if(step == 2){
            if(validate("step1-form")){
            //if(test1 == test2){
                var step1frm = $("#step1-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                $.post("<?php echo Yii::app()->createUrl('/rental/step1tosession') ?>", step1frm, function(response){
                    $("#ai").load("<?php echo Yii::app()->createUrl('/rental/showstep2') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });
                if($(this).attr('class')=='hide'){
                    $(this).attr('class','show');	
                } else {
                    $(this).attr('class','hide');			
                }
            } else {
                $("#box5").show();
            }
        } else if(step == 3){

            if(validate("step1-form") && validate("step2-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step2tosession') ?>", $(".step2-form").serialize(), function(response){
                    $("#rh").load("<?php echo Yii::app()->createUrl('/rental/showstep3') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });
                
                if($(this).attr('class')=='hide'){
                    $(this).attr('class','show');	
                } else {
                    $(this).attr('class','hide');			
                }

            } else {
                $("#box5").show();
            }
        } else if(step == 4){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step3tosession') ?>", $(".step3-form").serialize(), function(response){
                    $("#eii").load("<?php echo Yii::app()->createUrl('/rental/showstep4'); ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });
                
                if($(this).attr('class')=='hide'){
                    $(this).attr('class','show');	
                } else {
                    $(this).attr('class','hide');			
                }

            } else {
                $("#box5").show();
            }
        } else if(step == 5){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form")){
                var formdata = $(".step4-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                $.post("<?php echo Yii::app()->createUrl('/rental/step4tosession') ?>", formdata, function(response){
                    $("#pr").load("<?php echo Yii::app()->createUrl('/rental/showstep5'); ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });
                
                if($(this).attr('class')=='hide'){
                    $(this).attr('class','show');	
                } else {
                    $(this).attr('class','hide');			
                }

            } else {
                $("#box5").show();
            }
        } else if(step == 6){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step5tosession') ?>", $(".step5-form").serialize(), function(response){
                    $("#cfi").load("<?php echo Yii::app()->createUrl('/rental/showstep6') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });
                
                if($(this).attr('class')=='hide'){
                    $(this).attr('class','show');	
                } else {
                    $(this).attr('class','hide');			
                }

            } else {
                $("#box5").show();
            }
        } else if(step == 7){

            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step6tosession') ?>", $(".step6-form").serialize(), function(response){
                    $("#gi").load("<?php echo Yii::app()->createUrl('/rental/showstep7') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });
                
                if($(this).attr('class')=='hide'){
                    $(this).attr('class','show');	
                } else {
                    $(this).attr('class','hide');			
                }

            } else {
                $("#box5").show();
            }
        } else if(step == 8){
            var t = $("#ApplicationInformation_selection").val();
            if(t == "Apartment"){               
                if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form") && validate("step7-form")){

                    $.post("<?php echo Yii::app()->createUrl('/rental/step5tosession') ?>", $(".step5-form").serialize(), function(response){
                        $("#cf").load("<?php echo Yii::app()->createUrl('/rental/showstep8') ?>", null, function(){
                            $(".step_content_"+step).slideToggle(350);
                        });
                    });
                    
                    if($(this).attr('class')=='hide'){
                        $(this).attr('class','show');	
                    } else {
                        $(this).attr('class','hide');			
                    }

                } else {
                    $("#box5").show();
                }
            } else {
                if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form") && validate("step7-form")){
                    var formdata = $(".step7-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                    $.post("<?php echo Yii::app()->createUrl('/rental/step7tosession') ?>", formdata, function(response){
                        $("#cf").load("<?php echo Yii::app()->createUrl('/rental/showstep8') ?>", null, function(){
                            $(".step_content_"+step).slideToggle(350);
                        });
                    });
                    
                    if($(this).attr('class')=='hide'){
                        $(this).attr('class','show');	
                    } else {
                        $(this).attr('class','hide');			
                    }

                } else {
                    $("#box5").show();
                }
            }

        } else if(step == "final"){

            if(validate("step1-form")&&validate("step2-form")&&validate("step3-form")&&validate("step4-form")&&validate("step5-form")){
                $("#agreements").load("<?php echo Yii::app()->createUrl('/rental/showfinalstep') ?>", null, function(){
                    //$(".step_content_"+step).slideToggle(350);
                    $(".step_content_final").slideToggle(350);

                    if($(this).attr('class')=='hide'){
                        $(this).attr('class','show');	
                    } else {
                        $(this).attr('class','hide');			
                    }
                });
            } else {
                $("#box5").show();
            }
        }

    });

    $("#saved").unbind('click').click(function(){
        $("#box3").show("slow");
        $("#box2").hide("slow");
    });

    $("#show").unbind('click').click(function(){
        $("#box2").show("slow");
        $("#box3").hide("slow");
    });

    $(".right").unbind('click').click(function(){
        $("#box2").hide("slow");
        $("#box3").hide("slow");
        $("#box4").hide("slow");
    });
    $("#box4").unbind('click').click(function(){
        $(this).hide("slow");
    });
});
</script>
<?php
//$this->renderPartial('step1');
$this->renderPartial('step2');
$this->renderPartial('step3');
$this->renderPartial('step4');
$this->renderPartial('step5');
$this->renderPartial('step8');
$this->renderPartial('finalstep');
?>
