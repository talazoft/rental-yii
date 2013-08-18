<?php
/* @var $this ApplicationInformationController */
/* @var $data ApplicationInformation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_of_applicant')); ?>:</b>
	<?php echo CHtml::encode($data->num_of_applicant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('selection')); ?>:</b>
	<?php echo CHtml::encode($data->selection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_selection')); ?>:</b>
	<?php echo CHtml::encode($data->sub_selection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('zipcode')); ?>:</b>
	<?php echo CHtml::encode($data->zipcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anticipated_date')); ?>:</b>
	<?php echo CHtml::encode($data->anticipated_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refered_lead')); ?>:</b>
	<?php echo CHtml::encode($data->refered_lead); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('venue')); ?>:</b>
	<?php echo CHtml::encode($data->venue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_name')); ?>:</b>
	<?php echo CHtml::encode($data->agent_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_phone')); ?>:</b>
	<?php echo CHtml::encode($data->agent_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenant_name')); ?>:</b>
	<?php echo CHtml::encode($data->tenant_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_existing_tenant')); ?>:</b>
	<?php echo CHtml::encode($data->is_existing_tenant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other_val')); ?>:</b>
	<?php echo CHtml::encode($data->other_val); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prime_applic_cellphone')); ?>:</b>
	<?php echo CHtml::encode($data->prime_applic_cellphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prime_applic_homephone')); ?>:</b>
	<?php echo CHtml::encode($data->prime_applic_homephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prime_applic_email')); ?>:</b>
	<?php echo CHtml::encode($data->prime_applic_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prime_appic_signature')); ?>:</b>
	<?php echo CHtml::encode($data->prime_appic_signature); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('save_deposit')); ?>:</b>
	<?php echo CHtml::encode($data->save_deposit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_rent')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_rent); ?>
	<br />

	*/ ?>

</div>