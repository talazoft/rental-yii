<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css2/style.css" rel="stylesheet" />        
        
        <?php /*<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.9.0.custom.min.js" ></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/facescroll.js"></script>
        <script type="text/javascript">
            $(function(){
                $(".right-container").alternateScroll();
            });
        </script>
        <?php /*<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.compiled.js"></script>	
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.signature.min.js"></script>	
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/base64.js"></script>	
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/canvas2image.js"></script>
        <script>
            $(function(){
                $(".right-container").alternateScroll();
                $(".phone").mask("(999) 999-9999");
                $(".ssn").mask("999-99-9999");
                $(".currency").autoNumeric();
            });
        </script> */ ?>
        <?php /*<script src="<?php echo Yii::app()->baseUrl; ?>/js2/jquery.cookie.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js2/wo.js" type="text/javascript"></script> 
        <script src="<?php echo Yii::app()->baseUrl; ?>/scripts/history.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/scripts/setting.js" type="text/javascript"></script>*/ ?>
        <?php /*
        <style type="text/css">
            <!--
            #box2
            {
                position: absolute;
                top:111px;
                left:176px;
                width: 271px;
                height: auto;
                text-align: center;
                display: none;
                background-color:transparent;
            }

            #form2{
                background-color:transparent;
                width: 271px;
                height: auto;
            }

            #box3
            {
                position: absolute;
                top:111px;
                left:176px;
                width: 278px;
                height: auto;
                text-align: center;
                display: none;
                background-color:transparent;
            }
            #form3{
                background-color:transparent;
                width: 278px;
                height: auto;
                margin: 0 auto;
            }

            #box4
            {
                position: absolute;
                top:111px;
                right:50%;
                width: 278px;
                height: auto;
                text-align: center;
                display: none;
                background-color:transparent;
            }
            #form4{
                background-color:transparent;
                width: 278px;
                height: auto;
                margin: 0 auto;
            }
        </style> 
        <script>                
//            function formatCurrency(num) {
//                num = num.toString().replace(/\$|\,/g,'');
//                if(isNaN(num))
//                    num = "0";
//                sign = (num == (num = Math.abs(num)));
//                num = Math.floor(num*100+0.50000000001);
//                cents = num%100;
//                num = Math.floor(num/100).toString();
//                if(cents<10)
//                    cents = "0" + cents;
//                for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
//                    num = num.substring(0,num.length-(4*i+3))+','+
//                num.substring(num.length-(4*i+3));
//                return (((sign)?'':'-') + '' + num + '.' + cents);
//            }
            
//            $(document).ready(function(){
//                $('#garteng1').hide();
//                $('#garteng2').hide();
//                $('#garteng3').hide();
//                $('#garteng4').hide();
//                $('#garteng5').hide();
//
//                $('#applic').change(function(){  
//                    var applic=$("#applic").val();
//
//                    $("#ai").load("index.php/rental/change_applicant",{applic:applic});
//                    $("#rh").load("index.php/rental/residential_history",{applic:applic});
//                    $("#eii").load("index.php/rental/change_eii",{applic:applic});
//                    $("#pr").load("index.php/personal_reference/select_pr",{applic:3});
//                    //$("#bi").load("background_information/select_bi",{a:1});
//                    $('#select_bi1').html('');
//                    $('#select_bi2').html('');
//                    $('#select_bi3').html('');
//                    $('#select_bi4').html('');
//                    $('#select_bi5').html('');
//                    $('#select_bi6').html('');
//                    $('#select_bi7').html('');
//                    $('#select_bi8').html('');
//                    $('#select_bi9').html('');
//                    $('#select_bi10').html('');
//                    $('#garteng1').hide();
//                    $('#garteng2').hide();
//                    $('#garteng3').hide();
//                    $('#garteng4').hide();
//                    $('#garteng5').hide();
//
//                    //("#select_bi2").load("background_information/select_bi",{applic:2});
//                    switch (applic) {
//                            case '1':$("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $('#garteng2').hide();
//                                $('#garteng3').hide();
//                                $('#garteng4').hide();
//                                $('#garteng5').hide();
//                            break;
//                            case '2': $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $('#garteng2').hide();
//                                $('#garteng3').hide();
//                                $('#garteng4').hide();
//                                $('#garteng5').hide();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                            break;
//                            case '3':  $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                            break;
//                            case '4':  $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                                $("#select_bi4").load("index.php/background_information/select_bi",{a:4});
//                            break;
//                            case '5': $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                                $("#select_bi4").load("index.php/background_information/select_bi",{a:4});
//                                $("#select_bi5").load("index.php/background_information/select_bi",{a:5});
//                                $('#garteng3').show();
//                            break;
//
//                            case '6': $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                                $("#select_bi4").load("index.php/background_information/select_bi",{a:4});
//                                $("#select_bi5").load("index.php/background_information/select_bi",{a:5});
//                                $('#garteng3').show();
//                                $("#select_bi6").load("index.php/background_information/select_bi",{a:6});
//                            break;
//                            case '7': $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                                $("#select_bi4").load("index.php/background_information/select_bi",{a:4});
//                                $("#select_bi5").load("index.php/background_information/select_bi",{a:5});
//                                $('#garteng3').show();
//                                $("#select_bi6").load("index.php/background_information/select_bi",{a:6});
//                                $("#select_bi7").load("index.php/background_information/select_bi",{a:7});
//                                $('#garteng4').show();
//                            break;
//                            case '8': $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                                $("#select_bi4").load("index.php/background_information/select_bi",{a:4});
//                                $("#select_bi5").load("background_information/select_bi",{a:5});
//                                $('#garteng3').show();
//                                $("#select_bi6").load("background_information/select_bi",{a:6});
//                                $("#select_bi7").load("index.php/background_information/select_bi",{a:7});
//                                $('#garteng4').show();
//                                $("#select_bi8").load("index.php/background_information/select_bi",{a:8});
//                            break;
//                            case '9': $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                                $("#select_bi4").load("index.php/background_information/select_bi",{a:4});
//                                $("#select_bi5").load("index.php/background_information/select_bi",{a:5});
//                                $('#garteng3').show();
//                                $("#select_bi6").load("index.php/background_information/select_bi",{a:6});
//                                $("#select_bi7").load("index.php/background_information/select_bi",{a:7});
//                                $('#garteng4').show();
//                                $("#select_bi8").load("index.php/background_information/select_bi",{a:8});
//                                $("#select_bi9").load("index.php/background_information/select_bi",{a:9});
//                                $('#garteng5').show();
//                            break;
//                            case '10': $("#select_bi1").load("index.php/background_information/select_bi",{a:1});
//                                $('#garteng1').show();
//                                $("#select_bi2").load("index.php/background_information/select_bi",{a:2});
//                                $("#select_bi3").load("index.php/background_information/select_bi",{a:3});
//                                $('#garteng2').show();
//                                $("#select_bi4").load("index.php/background_information/select_bi",{a:4});
//                                $("#select_bi5").load("index.php/background_information/select_bi",{a:5});
//                                $('#garteng3').show();
//                                $("#select_bi6").load("index.php/background_information/select_bi",{a:6});
//                                $("#select_bi7").load("index.php/background_information/select_bi",{a:7});
//                                $('#garteng4').show();
//                                $("#select_bi8").load("index.php/background_information/select_bi",{a:8});
//                                $("#select_bi9").load("index.php/background_information/select_bi",{a:9});
//                                $('#garteng5').show();
//                                $("#select_bi10").load("index.php/background_information/select_bi",{a:10});
//                            break;
//
//                        }
//
//                    });
//
//                    $('#selection1').change(function(){
//                        //alert($("#selection").val());
//                        var b;
//                        b=$("#selection1").val();
//
//                        $.ajax({
//                            type: "POST",
//                            url: "index.php/rental/change_selection",
//                            data: "nb="+b,
//                            success: function(msg){
//                                $('#selection11').html(msg);
//                            }
//                        });
//
//                        return false;
//                    });
//
//        /*$("a#in").click(function(event){
//                        $("div#box2").fadeIn("slow");
//                });
//    
//                    $("#ri").click(function(event){
//                        $("div#box2").hide("slow");
//                        $("div#box3").hide("slow");
//                        $("div#box4").hide("slow");
//                    });
//
//                    $("#box4").click(function(event){
//                        $("div#box2").hide("slow");
//                        $("div#box3").hide("slow");
//                        $("div#box4").hide("slow");
//                    });
//                    $("#x").click(function(event){
//                        $("div#box2").hide("slow");
//                        $("div#box3").hide("slow");
//                        $("div#box4").hide("slow");
//                    });
//
//                    $("#show").click(function(event){
//
//                        //		alert (idmeter);
//                        $("div#form2").load('index.php/save_form');
//                        //$("div#box2").show();
//                        $("div#box2").slideDown("slow");
//                        $("div#box3").hide("slow");
//                    });
//
//                    $("#showopen").click(function(event){
//
//                        //		alert (idmeter);
//                        $("div#form3").load('index.php/open_save');
//                        //$("div#box2").show();
//                        $("div#box3").slideDown("slow");
//                    });
//
//                    $("#saved").click(function(event){
//                        //		alert (idmeter);
//                        $("div#form3").load('index.php/saved');
//                        //$("div#box2").show();
//                        $("div#box3").slideDown("slow");
//                        $("div#box2").hide("slow");
//                    });
//
//                /*$("a#slide").click(function(event){
//                                $("div#box2").slideDown("slow");
//                });
//        
//        $("#btndownload").click(function(event){
//                        alert('asem');
//                });
//
//
//            });
        </script> */ ?> 
        <style>
            #box2
            {
                position: absolute;
                top:111px;
                left:176px;
                width: 271px;
                height: auto;
                text-align: center;
                display: none;
                background-color:transparent;
                z-index: 1000;
            }

            #form2{
                background-color:transparent;
                width: 271px;
                height: auto;
            }
            #box3
            {
                position: absolute;
                top:111px;
                left:176px;
                width: 278px;
                height: auto;
                text-align: center;
                display: none;
                background-color:transparent;
                z-index: 1000;
            }
            #form3{
                background-color:transparent;
                width: 278px;
                height: auto;
                margin: 0 auto;
            }
            #box4
            {
                position: absolute;
                top:111px;
                right:46%;
                width: 278px;
                height: auto;
                text-align: center;
                display: none;
                background-color:transparent;
                z-index: 1000;
            }
            #form4{
                background-color:transparent;
                width: 278px;
                height: auto;
                margin: 0 auto;
            }
            #box5{
                background-color: transparent;
                display: none;
                height: auto;
                position: absolute;
                right: 40%;
                text-align: center;
                top: 111px;
                width: 278px;
                z-index: 999;
            }
            #form5{
                background-color: transparent;
                height: auto;
                margin: 0 auto;
                width: 278px;
                cursor: pointer;
            }
        </style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body id="mainbody">
    <link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css2/jquery.signature.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/facescroll.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/auto-numeric.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.localscroll-1.2.7-min.js"></script>
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
        $(".age").mask("?999");
        $(".year").mask("?9999");
        
        $(".step_content_1").slideToggle(350);
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
   
            var step=$(this).attr('id');
            if(step == 1){
                $(".step_content_"+step).slideToggle(350);
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
        
        $(".all").unbind('click').click(function(){
            showAll();
            $(this).hide();
            $(".show").attr('class', 'hide');
            $(".collapse").show();
        });
        
        $(".collapse").unbind('click').click(function(){
            for(var z=1;z<=8;z++){            
                if($(".step_content_"+z).is(':visible') == true){
                    var step_content = $(".step_content_"+z);
                    var child = step_content.children();
                    if(child.contents().length > 0){
                        $(".step_content_"+z).slideUp(350);
                    }
                }
            }
            $(".step_content_final").slideUp(350);
            $(".hide").attr('class', 'show');
            $(this).hide();
            $(".all").show();
        });
        
        var stepvar = 1;
        $(".next").click(function () {
            /*var sess = <?php echo count(Yii::app()->session['step1']); ?>;
            if(sess > 0){
                var options = { path: '/', expires: 10000000000000 };
                var co=0;
                if ($.cookie('step')==null) {
                    // jika tdk ada
                    $.cookie('step', co, options);
                }
                if (jQuery.cookie('step')) {
                    // jika ada
                    var y=parseInt($.cookie('step'));
                    //var step=y + 1;
                    var step = co +
                    if(y>0 && y<9){
                        $.cookie('step', step, options);
                    }else{
                        $.cookie('step', 1, options);
                    }
                }

                if(parseInt($.cookie('step'))>0 && parseInt($.cookie('step'))<9){
                    var stepminus=parseInt($.cookie('step'))-1;
                }else{
                    var stepminus=8;
                }
                //alert(stepminus);
                //$(".step_content_"+$.cookie('step')).show();
                if(prevnextsteps($.cookie('step'))){
                //$(".step_content_"+stepminus).hide();
                //if($.cookie('step') > 0 && stepminus > 0){
                    //$("#"+$.cookie('step')).attr('class', 'hide');
                    $("#"+$.cookie('step')).attr('class', 'hide');
                    //$("#"+stepminus).attr('class', 'show');
                }
                //}
            }*/
                
            //$().localScroll({target:".right-container"});
            if(prevnextsteps(stepvar)){
                $("#"+stepvar).attr('class', 'hide');
            }
           
            if(stepvar <= 8){
                stepvar++;
            } else {
                stepvar = 1;
            }
        });
        
        $(".prev").click(function () {
            /*var sess = <?php echo count(Yii::app()->session['step1']); ?>;
            if(sess > 0){
                var options = { path: '/', expires: 10000000000000 };
                var co=0;
                if ($.cookie('step')==null) {
                    // jika tdk ada
                    $.cookie('step', co, options);
                }
                if (jQuery.cookie('step')) {
                    // jika ada
                    var y=parseInt($.cookie('step'));
                    var step=y - 1;
                    if(y>0 && y<9){
                        $.cookie('step', step, options);
                    }else{
                        $.cookie('step', 1, options);
                    }
                }
                if(parseInt($.cookie('step'))>0 && parseInt($.cookie('step'))<9){
                    var steppos=parseInt($.cookie('step'))+1;
                }else{
                    var steppos=8;
                }

                //$(".step_content_"+$.cookie('step')).show();
                if(prevnextsteps($.cookie('step'))){
                //$(".step_content_"+steppos).hide();

                //if($.cookie('step') > 0 && steppos > 0){
                    $("#"+$.cookie('step')).attr('class', 'hide');
                    //$("#"+steppos).attr('class', 'show');
                }
                //}
            }*/
            if(prevnextsteps(stepvar)){
                $("#"+stepvar).attr('class', 'hide');
            }
            
            if(stepvar >= 1){
                stepvar--;
            } else {
                stepvar = 8;
            }
        }); 
    });
    
    function showAll(){
        var stepsurl = "<?php echo Yii::app()->createUrl("rental/showsteps"); ?>";
        $("#nextsteps").nextAll().remove();
        $("#nextsteps").remove();
        $.post(stepsurl, null, function(){
            $("#ri").load("<?php echo Yii::app()->createUrl("rental/showstep1"); ?>", null, function(){
                $(".step_content_1").slideDown(350);
            });
            $("#ai").load("<?php echo Yii::app()->createUrl("rental/showstep2"); ?>", '', function(){
                $(".step_content_2").slideDown(350);
            });
            $("#rh").load("<?php echo Yii::app()->createUrl("rental/showstep3"); ?>", '', function(){
                $(".step_content_3").slideDown(350);
            });
            $("#eii").load("<?php echo Yii::app()->createUrl("rental/showstep4"); ?>", '', function(){
                $(".step_content_4").slideDown(350);
            });
            $("#pr").load("<?php echo Yii::app()->createUrl("rental/showstep5"); ?>", '', function(){
                $(".step_content_5").slideDown(350);
            });

            //var t= "<?php echo strtolower(Yii::app()->session['step1']['selection']); ?>";
            //if(t == "commercial"){
                $("#cfi").load("<?php echo Yii::app()->createUrl("rental/showstep6"); ?>", '', function(){
                    $(".step_content_6").slideDown(350);
                });
                $("#gi").load("<?php echo Yii::app()->createUrl("rental/showstep7"); ?>", '', function(){
                    $(".step_content_7").slideDown(350);
                });
            //}
            $("#cf").load("<?php echo Yii::app()->createUrl("rental/showstep8"); ?>", '', function(){
                $(".step_content_8").slideDown(350);
            });
            $("#agreements").load("<?php echo Yii::app()->createUrl("rental/showfinalstep"); ?>", '', function(){
                $(".step_content_final").slideDown(350);
            });

            $(".all").hide();
            $(".collapse").show();
        });
    }
    
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

    function validateEmail(name){
        $("."+name+" input[email='email']").each(function(){
            var element = $(this);
            element.css({border:"", color:""});
            element.removeAttr("placeholder");
        });

        var test1 = 0;
        var test2 = 0;
        $("."+name+" input[email='email']").each(function(){
            var element = $(this);
            if(!emailValidationExpression(element.val())){
                element.css({border:"2px solid red", color:"red"});
                element.val("");
                element.attr("placeholder", "email not valid");
                test1--;
            } else {
                test1++;
                test2++;
            }
        });

        if(test1 === test2){
            return true;
        } else {
            return false;
        }
    }
    
    function validatestep7(){
        
        var test1 = 0;
        var test2 = 0;
        
        $('.step7-form :required').each(function(){
            var parentdiv  = $(this).parent().parent();
            parentdiv.css({border:"", color:""});
        });
        
        $('.step7-form :required').each(function(){
            var classname = $(this).attr('class');
            var parentdiv  = $(this).parent().parent();
            
            if(!$("."+classname).is(":checked")){
                if($(this).is("input") && $(this).attr('type') == 'text'){
                    if($(this).val() == ""){
                        $(this).css({border:"2px solid red", color:"red"});
                        test1--;
                    } else {
                        $(this).css({border:"", color:""});
                        $(this).removeAttr("required");
                    }
                } else if($(this).is("textarea")){
                    if($(this).val() == ""){
                        $(this).css({border:"2px solid red", color:"red"});
                        test1--;
                    } else {
                        $(this).css({border:"", color:""});
                        $(this).removeAttr("required");
                    }
                } else {
                    parentdiv.css({border:"2px solid red", color:"red"});
                    test1--;
                }
                
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
    
    function prevnextsteps(step){
        if(step == 1){
            $(".step_content_"+step).slideDown(350);
            return true;
        } else if(step == 2){
            if(validate("step1-form")){
            //if(test1 == test2){
                var step1frm = $("#step1-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                $.post("<?php echo Yii::app()->createUrl('/rental/step1tosession') ?>", step1frm, function(response){
                    $("#ai").load("<?php echo Yii::app()->createUrl('/rental/showstep2') ?>", null, function(){
                        $(".step_content_"+step).slideDown(350);
                    });
                });

//                if(elem.attr('class')=='hide'){
//                    elem.attr('class','show');	
//                } else {
//                    elem.attr('class','hide');			
//                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 3){
            
            if(validate("step1-form") && validate("step2-form") && validateEmail("step2-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step2tosession') ?>", $(".step2-form").serialize(), function(response){
                    $("#rh").load("<?php echo Yii::app()->createUrl('/rental/showstep3') ?>", null, function(){
                        $(".step_content_"+step).slideDown(350);
                    });
                });
                
//                if(elem.attr('class')=='hide'){
//                    elem.attr('class','show');	
//                } else {
//                    elem.attr('class','hide');			
//                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 4){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step3tosession') ?>", $(".step3-form").serialize(), function(response){
                    $("#eii").load("<?php echo Yii::app()->createUrl('/rental/showstep4') ?>", null, function(){
                        $(".step_content_"+step).slideDown(350);
                    });
                });

//                if(elem.attr('class')=='hide'){
//                    elem.attr('class','show');	
//                } else {
//                    elem.attr('class','hide');			
//                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 5){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form")){
                var formdata = $(".step4-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                $.post("<?php echo Yii::app()->createUrl('/rental/step4tosession') ?>", formdata, function(response){
                    $("#pr").load("<?php echo Yii::app()->createUrl('/rental/showstep5') ?>", null, function(){
                        $(".step_content_"+step).slideDown(350);
                    });
                });

//                if(elem.attr('class')=='hide'){
//                    elem.attr('class','show');	
//                } else {
//                    elem.attr('class','hide');			
//                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 6){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step5tosession') ?>", $(".step5-form").serialize(), function(response){
                    $("#cfi").load("<?php echo Yii::app()->createUrl('/rental/showstep6') ?>", null, function(){
                        $(".step_content_"+step).slideDown(350);
                    });
                });

//                if(elem.attr('class')=='hide'){
//                    elem.attr('class','show');	
//                } else {
//                    elem.attr('class','hide');			
//                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 7){

            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step6tosession') ?>", $(".step6-form").serialize(), function(response){
                    $("#gi").load("<?php echo Yii::app()->createUrl('/rental/showstep7') ?>", null, function(){
                        $(".step_content_"+step).slideDown(350);
                    });
                });

//                if(elem.attr('class')=='hide'){
//                    elem.attr('class','show');	
//                } else {
//                    elem.attr('class','hide');			
//                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 8){
            var t = $("#ApplicationInformation_selection").val();
            if(t == "Apartment"){               
                if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form") && validate("step7-form")){

                    $.post("<?php echo Yii::app()->createUrl('/rental/step5tosession') ?>", $(".step5-form").serialize(), function(response){
                        $("#cf").load("<?php echo Yii::app()->createUrl('/rental/showstep8') ?>", null, function(){
                            $(".step_content_"+step).slideDown(350);
                        });
                    });

//                    if(elem.attr('class')=='hide'){
//                        elem.attr('class','show');	
//                    } else {
//                        elem.attr('class','hide');			
//                    }
                    return true;
                } else {
                    $("#box5").show();
                    return false;
                }
            } else {
            
                if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form") && validatestep7()){
                    var formdata = $(".step7-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                    $.post("<?php echo Yii::app()->createUrl('/rental/step7tosession') ?>", formdata, function(response){
                        $("#cf").load("<?php echo Yii::app()->createUrl('/rental/showstep8') ?>", null, function(){
                            $(".step_content_"+step).slideDown(350);
                        });
                    });

//                    if(elem.attr('class')=='hide'){
//                        elem.attr('class','show');	
//                    } else {
//                        elem.attr('class','hide');			
//                    }
                    return true;
                } else {
                    $("#box5").show();
                    return false;
                }
            }

        } else if(step == "final"){

            if(validate("step1-form")&&validate("step2-form")&&validate("step3-form")&&validate("step4-form")&&validate("step5-form")&&validate("step6-form")){
                $("#agreements").load("<?php echo Yii::app()->createUrl('/rental/showfinalstep') ?>");
                //$(".step_content_"+step).slideToggle(350);
                $(".step_content_final").slideDown(350);

//                if(elem.attr('class')=='hide'){
//                    elem.attr('class','show');	
//                } else {
//                    elem.attr('class','hide');			
//                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        }
    }

    function steps(step, elem){
        if(step == 1){
            $(".step_content_"+step).slideToggle(350);
            return true;
        } else if(step == 2){
            if(validate("step1-form")){
            //if(test1 == test2){
                var step1frm = $("#step1-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                $.post("<?php echo Yii::app()->createUrl('/rental/step1tosession') ?>", step1frm, function(response){
                    $("#ai").load("<?php echo Yii::app()->createUrl('/rental/showstep2') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });

                if(elem.attr('class')=='hide'){
                    elem.attr('class','show');	
                } else {
                    elem.attr('class','hide');			
                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 3){
            
            if(validate("step1-form") && validate("step2-form") && validateEmail("step2-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step2tosession') ?>", $(".step2-form").serialize(), function(response){
                    $("#rh").load("<?php echo Yii::app()->createUrl('/rental/showstep3') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });
                
                if(elem.attr('class')=='hide'){
                    elem.attr('class','show');	
                } else {
                    elem.attr('class','hide');			
                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 4){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step3tosession') ?>", $(".step3-form").serialize(), function(response){
                    $("#eii").load("<?php echo Yii::app()->createUrl('/rental/showstep4') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });

                if(elem.attr('class')=='hide'){
                    elem.attr('class','show');	
                } else {
                    elem.attr('class','hide');			
                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 5){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form")){
                var formdata = $(".step4-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                $.post("<?php echo Yii::app()->createUrl('/rental/step4tosession') ?>", formdata, function(response){
                    $("#pr").load("<?php echo Yii::app()->createUrl('/rental/showstep5') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });

                if(elem.attr('class')=='hide'){
                    elem.attr('class','show');	
                } else {
                    elem.attr('class','hide');			
                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 6){
            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step5tosession') ?>", $(".step5-form").serialize(), function(response){
                    $("#cfi").load("<?php echo Yii::app()->createUrl('/rental/showstep6') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });

                if(elem.attr('class')=='hide'){
                    elem.attr('class','show');	
                } else {
                    elem.attr('class','hide');			
                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        } else if(step == 7){

            if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form")){
                $.post("<?php echo Yii::app()->createUrl('/rental/step6tosession') ?>", $(".step6-form").serialize(), function(response){
                    $("#gi").load("<?php echo Yii::app()->createUrl('/rental/showstep7') ?>", null, function(){
                        $(".step_content_"+step).slideToggle(350);
                    });
                });

                if(elem.attr('class')=='hide'){
                    elem.attr('class','show');	
                } else {
                    elem.attr('class','hide');			
                }
                return true;
            } else {
                $("#box5").show();
                return false;
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

                    if(elem.attr('class')=='hide'){
                        elem.attr('class','show');	
                    } else {
                        elem.attr('class','hide');			
                    }
                    return true;
                } else {
                    $("#box5").show();
                    return false;
                }
            } else {
            
                if(validate("step1-form") && validate("step2-form") && validate("step3-form") && validate("step4-form") && validate("step5-form") && validate("step6-form") && validatestep7()){
                    var formdata = $(".step7-form").find("input[type='hidden'], :input:not(:hidden)").serialize();
                    $.post("<?php echo Yii::app()->createUrl('/rental/step7tosession') ?>", formdata, function(response){
                        $("#cf").load("<?php echo Yii::app()->createUrl('/rental/showstep8') ?>", null, function(){
                            $(".step_content_"+step).slideToggle(350);
                        });
                    });

                    if(elem.attr('class')=='hide'){
                        elem.attr('class','show');	
                    } else {
                        elem.attr('class','hide');			
                    }
                    return true;
                } else {
                    $("#box5").show();
                    return false;
                }
            }

        } else if(step == "final"){

            if(validate("step1-form")&&validate("step2-form")&&validate("step3-form")&&validate("step4-form")&&validate("step5-form")&&validate("step6-form")){
                $("#agreements").load("<?php echo Yii::app()->createUrl('/rental/showfinalstep') ?>");
                //$(".step_content_"+step).slideToggle(350);
                $(".step_content_final").slideToggle(350);

                if(elem.attr('class')=='hide'){
                    elem.attr('class','show');	
                } else {
                    elem.attr('class','hide');			
                }
                return true;
            } else {
                $("#box5").show();
                return false;
            }
        }
    }
    
    function emailValidationExpression($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if( !emailReg.test( $email ) ) {
            return false;
        } else {
            return true;
        }
    }
    </script>
    <div id="box2">
        <div id="form2">
            <?php 
            echo $this->renderPartial("//rental/send_to_email_form", '', true);
            ?>
        </div>
    </div>
    <div id="box3">
        <div id="form3">
            <?php 
            echo $this->renderPartial("//rental/open_saved_form", '', true);
            ?>
        </div>
    </div>
    <div id="box4"><div id="form4"></div></div>
    <div id="box5">
        <div id="form5">
            <?php echo $this->renderPartial("//rental/empty_field", array('message' => "Please fill the form above")); ?>
        </div>
    </div>
    <div class="overlay"><img style="border:none" src="img/modal.png"></div> 
    <div class="top">
            <div class="logo"></div>
            <div class="title">Rental Application Form</div>
            <div class="date">
                    <h3>Application Date : <?=date("F j, Y")?></h3>
            </div>
    </div>
    <div class="container">
        <?php echo $content; ?>
    </div>
</body>
</html>