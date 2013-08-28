<?php 

$this->renderPartial('step1');

?>
<div id="nextsteps"> <?php
if(isset(Yii::app()->session['step1']['selection'])){
    if(strtolower(Yii::app()->session['step1']['selection']) == "commercial"){
        $this->renderPartial('_index_commercial');
    } else if(strtolower(Yii::app()->session['step1']['selection']) == "apartment"){
        $this->renderPartial('_index_apartment');
    }
}
?>
</div> <?php 
/*
$this->renderPartial('step2');
$this->renderPartial('step3');
$this->renderPartial('step4');
$this->renderPartial('step5');
$this->renderPartial('step6');
$this->renderPartial('step7');
$this->renderPartial('step8');
$this->renderPartial('finalstep');*/

?>