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

    $(".show").unbind("click").click(function () {

        var step = $(this).attr('id');
        var elem = $(this);
        steps(step, elem);
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
$this->renderPartial('step6');
$this->renderPartial('step7');
$this->renderPartial('step8');
$this->renderPartial('finalstep');
?>
