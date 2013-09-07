<script>
    $(function(){
        $("#open").unbind('click').click(function(){
            var openurl = "<?php echo Yii::app()->createUrl("openform"); ?>";
            var data = {code:$("#txtcode").val(), pass:$("#txtpassword").val()};
            
            $.post(openurl, data, function(response){ 
                
                if(response == 0){
                    alert("Form with given code and password does not found in database");
                } else {
                    var stepsurl = "<?php echo Yii::app()->createUrl("rental/showsteps"); ?>";
                    $("#nextsteps").nextAll().remove();
                    $("#nextsteps").remove();
                    $("#ri").load("<?php echo Yii::app()->createUrl("rental/showstep1"); ?>", null, function(){
                        $.post(stepsurl, {res:response}, function(res){
                            //$(".right").append(res);
                            $(".right").append(res);
                            
                            $("#ai").load("<?php echo Yii::app()->createUrl("rental/showstep2"); ?>", '', function(){
                                $(".step_content_2").slideToggle(350);
                            });
                            $("#rh").load("<?php echo Yii::app()->createUrl("rental/showstep3"); ?>", '', function(){
                                $(".step_content_3").slideToggle(350);
                            });
                            $("#eii").load("<?php echo Yii::app()->createUrl("rental/showstep4"); ?>", '', function(){
                                $(".step_content_4").slideToggle(350);
                            });
                            $("#pr").load("<?php echo Yii::app()->createUrl("rental/showstep5"); ?>", '', function(){
                                $(".step_content_5").slideToggle(350);
                            });
                            
                            //var t= "<?php echo strtolower(Yii::app()->session['step1']['selection']); ?>";
                            //if(t == "commercial"){
                                $("#cfi").load("<?php echo Yii::app()->createUrl("rental/showstep6"); ?>", '', function(){
                                    $(".step_content_6").slideToggle(350);
                                });
                                $("#gi").load("<?php echo Yii::app()->createUrl("rental/showstep7"); ?>", '', function(){
                                    $(".step_content_7").slideToggle(350);
                                });
                            //}
                            $("#cf").load("<?php echo Yii::app()->createUrl("rental/showstep8"); ?>", '', function(){
                                $(".step_content_8").slideToggle(350);
                            });
                            $("#agreements").load("<?php echo Yii::app()->createUrl("rental/showfinalstep"); ?>", '', function(){
                                $(".step_content_final").slideToggle(350);
                            });
                            
                            $(".all").hide();
                            $(".collapse").show();
                            
                            $(".show").attr('class', 'hide');
                        });
                    });
                    //$("#nextsteps").load(stepsurl, {res:response});
                }
                /*$("#ri").load("<?php echo Yii::app()->createUrl("rental/showstep1"); ?>");*/
                /*$("#ai").load("<?php echo Yii::app()->createUrl("rental/showstep2"); ?>", '', function(){
                    $(".step_content_2").slideToggle(350);
                });
                $("#rh").load("<?php echo Yii::app()->createUrl("rental/showstep3"); ?>", '', function(){
                    $(".step_content_3").slideToggle(350);
                });
                $("#eii").load("<?php echo Yii::app()->createUrl("rental/showstep4"); ?>", '', function(){
                    $(".step_content_4").slideToggle(350);
                });
                $("#pr").load("<?php echo Yii::app()->createUrl("rental/showstep5"); ?>", '', function(){
                    $(".step_content_5").slideToggle(350);
                });
                $("#cfi").load("<?php echo Yii::app()->createUrl("rental/showstep6"); ?>", '', function(){
                    $(".step_content_6").slideToggle(350);
                });
                $("#gi").load("<?php echo Yii::app()->createUrl("rental/showstep7"); ?>", '', function(){
                    $(".step_content_7").slideToggle(350);
                });
                $("#cf").load("<?php echo Yii::app()->createUrl("rental/showstep8"); ?>", '', function(){
                    $(".step_content_8").slideToggle(350);
                });
                $("#agreements").load("<?php echo Yii::app()->createUrl("rental/showfinalstep"); ?>", '', function(){
                    $(".step_content_final").slideToggle(350);
                });*/
            });
        });
    });
</script>
<div bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="width:282px;">
    <!-- Save for Web Slices (Untitled-1) -->
    <table>
        <tr>
            <td background="img/savedform.png" width="278" height="143" align="center" valign="middle">
                <table>
                    <tr>
                        <td colspan=3 align="right"><br></td>
                    </tr>
                    <tr>
                        <td>Form Code</td>
                        <td>:</td>
                        <td>
                            <input type="text" style="background:#FFF" id="txtcode" name="code" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="password" name="" style="background:#FFF" id="txtpassword" name="pass" value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=3 align="right">
                            <a href="#" id="open">
                                <img src="images/submit_send.png">
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- End Save for Web Slices -->
</div>
