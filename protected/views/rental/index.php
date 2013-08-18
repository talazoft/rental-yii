<?php 
//$data['random_pass'] = $random_pass;
//$data['random_user'] = $random_user;
$data['model'] = $model;
//$data['applicantModel'] = $applicantModel; 
?>

<script type="text/javascript">
$(document).ready(function () { 
    
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
        
        if(step == 1){
            $(".step_content_"+step).slideToggle(350);
        } else if(step == 2){  
            //$.post("<?php echo Yii::app()->createUrl('/rental/step1tosession') ?>", $("#step1-form").serialize(), function(response){
                //if(response === 1){
                    $(".step_content_"+step).slideToggle(350);
                //}
            //});
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
$this->renderPartial('step1', $data, false, true);
$this->renderPartial('step2');
?>