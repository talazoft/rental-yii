<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css2/style.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css2/jquery.signature.css" rel="stylesheet" />
        
        <?php /*
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js" ></script>
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
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <div id="box2"><div id="form2"></div></div>
    <div id="box3"><div id="form3"></div></div>
    <div id="box4"><div id="form4"></div></div>
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