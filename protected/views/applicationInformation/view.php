<?php
/* @var $this ApplicationInformationController */
/* @var $model ApplicationInformation */

$this->breadcrumbs=array(
	'Application Informations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ApplicationInformation', 'url'=>array('index')),
	array('label'=>'Create ApplicationInformation', 'url'=>array('create')),
	array('label'=>'Update ApplicationInformation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ApplicationInformation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ApplicationInformation', 'url'=>array('admin')),
);
?>

<h1>View ApplicationInformation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'num_of_applicant',
		'selection',
		'sub_selection',
		'address',
		'city',
		'state',
		'zipcode',
		'anticipated_date',
		'refered_lead',
		'venue',
		'agent_name',
		'agent_phone',
		'tenant_name',
		'is_existing_tenant',
		'other_val',
		'created_date',
		'prime_applic_cellphone',
		'prime_applic_homephone',
		'prime_applic_email',
		'prime_appic_signature',
		'save_deposit',
		'unit',
		'monthly_rent',
	),
)); ?>
