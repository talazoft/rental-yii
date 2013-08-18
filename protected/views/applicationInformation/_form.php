<?php
/* @var $this ApplicationInformationController */
/* @var $model ApplicationInformation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'application-information-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'num_of_applicant'); ?>
		<?php echo $form->textField($model,'num_of_applicant'); ?>
		<?php echo $form->error($model,'num_of_applicant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'selection'); ?>
		<?php echo $form->textField($model,'selection',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'selection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_selection'); ?>
		<?php echo $form->textField($model,'sub_selection',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'sub_selection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zipcode'); ?>
		<?php echo $form->textField($model,'zipcode',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'zipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anticipated_date'); ?>
		<?php echo $form->textField($model,'anticipated_date',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'anticipated_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refered_lead'); ?>
		<?php echo $form->textField($model,'refered_lead'); ?>
		<?php echo $form->error($model,'refered_lead'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'venue'); ?>
		<?php echo $form->textField($model,'venue',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'venue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agent_name'); ?>
		<?php echo $form->textField($model,'agent_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'agent_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agent_phone'); ?>
		<?php echo $form->textField($model,'agent_phone',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'agent_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tenant_name'); ?>
		<?php echo $form->textField($model,'tenant_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'tenant_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_existing_tenant'); ?>
		<?php echo $form->textField($model,'is_existing_tenant'); ?>
		<?php echo $form->error($model,'is_existing_tenant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_val'); ?>
		<?php echo $form->textArea($model,'other_val',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other_val'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prime_applic_cellphone'); ?>
		<?php echo $form->textField($model,'prime_applic_cellphone',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'prime_applic_cellphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prime_applic_homephone'); ?>
		<?php echo $form->textField($model,'prime_applic_homephone',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'prime_applic_homephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prime_applic_email'); ?>
		<?php echo $form->textField($model,'prime_applic_email',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'prime_applic_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prime_appic_signature'); ?>
		<?php echo $form->textArea($model,'prime_appic_signature',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prime_appic_signature'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'save_deposit'); ?>
		<?php echo $form->textField($model,'save_deposit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'save_deposit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_rent'); ?>
		<?php echo $form->textField($model,'monthly_rent',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'monthly_rent'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->