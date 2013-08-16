<?php 
$data['random_pass'] = $random_pass;
$data['random_user'] = $random_user;
$data['rentalModel'] = $rentalModel;
//$data['applicantModel'] = $applicantModel; 
?>

<script type="text/javascript">
$(document).ready(function () {    
    $(".show").click(function () {
        var step=$(this).attr('id');
        
        if(step == 1){
            $(".step_content_"+step).slideToggle(350);
        } else if(step == 2){  
            $.post("<?php echo Yii::app()->createUrl('/rental/step1tosession') ?>", $("#step1-form").serialize(), function(response){
                if(response == 1){
                    $(".step_content_"+step).slideToggle(350);
                }
            });
        }
                
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
?>