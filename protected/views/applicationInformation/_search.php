<?php
/* @var $this ApplicationInformationController */
/* @var $model ApplicationInformation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_of_applicant'); ?>
		<?php echo $form->textField($model,'num_of_applicant'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'selection'); ?>
		<?php echo $form->textField($model,'selection',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_selection'); ?>
		<?php echo $form->textField($model,'sub_selection',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zipcode'); ?>
		<?php echo $form->textField($model,'zipcode',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anticipated_date'); ?>
		<?php echo $form->textField($model,'anticipated_date',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refered_lead'); ?>
		<?php echo $form->textField($model,'refered_lead'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'venue'); ?>
		<?php echo $form->textField($model,'venue',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agent_name'); ?>
		<?php echo $form->textField($model,'agent_name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agent_phone'); ?>
		<?php echo $form->textField($model,'agent_phone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenant_name'); ?>
		<?php echo $form->textField($model,'tenant_name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_existing_tenant'); ?>
		<?php echo $form->textField($model,'is_existing_tenant'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other_val'); ?>
		<?php echo $form->textArea($model,'other_val',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prime_applic_cellphone'); ?>
		<?php echo $form->textField($model,'prime_applic_cellphone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prime_applic_homephone'); ?>
		<?php echo $form->textField($model,'prime_applic_homephone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prime_applic_email'); ?>
		<?php echo $form->textField($model,'prime_applic_email',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prime_appic_signature'); ?>
		<?php echo $form->textArea($model,'prime_appic_signature',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'save_deposit'); ?>
		<?php echo $form->textField($model,'save_deposit',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_rent'); ?>
		<?php echo $form->textField($model,'monthly_rent',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->