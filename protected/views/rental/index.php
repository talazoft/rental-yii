<?php 
//$data['random_pass'] = $random_pass;
//$data['random_user'] = $random_user;
$data['model'] = $model;
//$data['applicantModel'] = $applicantModel; 
?>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.9.0.custom.min.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput.min.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/auto-numeric.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/facescroll.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.compiled.js"></script>	
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.signature.min.js"></script>	
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/base64.js"></script>	
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/canvas2image.js"></script>

<script type="text/javascript">
$(document).ready(function () { 
    
    $(".right-container").alternateScroll();
    $(".phone").mask("(999) 999-9999");
    $(".ssn").mask("999-99-9999");
    $(".currency").autoNumeric();
    
    $(".step_content_1").slideToggle(350);
    $(".step_1 div.show").attr('class', 'hide')
    $(".hide").click(function(){
        var id = $(this).attr('id');
        if(id==1){
            $(".step_content_1").slideToggle(350);
            $("#"+id).toggleClass('show hide');
        }
    }); 
    
    $(".show").click(function () {
        var step=$(this).attr('id');
        
//        $(".step_content_"+step).slideToggle(350);
        if(step == 1){
            $(".step_content_"+step).slideToggle(350);
        } else if(step == 2){  
            $.post("<?php echo Yii::app()->createUrl('/rental/step1tosession') ?>", $("#step1-form").serialize(), function(response){
                $("#ai").load("<?php echo Yii::app()->createUrl('/rental/showstep2') ?>");
                //$(".step_content_"+step).slideToggle(350);
            });
        } else if(step == 3){
            $.post("<?php echo Yii::app()->createUrl('/rental/step2tosession') ?>", $(".step2-form").serialize(), function(response){
                $("#rh").load("<?php echo Yii::app()->createUrl('/rental/showstep3') ?>");
                //$(".step_content_"+step).slideToggle(350);
                //if(response === 1){
                    //$(".step_content_"+step).slideToggle(350);
                //}
            });
        } //else if(step == 4){
//            //$.post("<?php echo Yii::app()->createUrl('/rental/step4tosession') ?>", $("#step3-form").serialize(), function(response){
//                //if(response === 1){
//                    $(".step_content_"+step).slideToggle(350);
//                //}
//            //});
//        }

        $(".step_content_"+step).slideToggle(350);
                
        if($(this).attr('class')=='hide'){
            $(this).attr('class','show');	
        } else {
            $(this).attr('class','hide');			
        }
 
    });

});
</script>
<?php 
$this->renderPartial('step1', $data);
$this->renderPartial('step2');
$this->renderPartial('step3');
$this->renderPartial('step4');
$this->renderPartial('step5');
$this->renderPartial('step6');
$this->renderPartial('step7');
$this->renderPartial('step8');
?>