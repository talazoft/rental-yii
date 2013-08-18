<?php
/* @var $this ApplicationInformationController */
/* @var $model ApplicationInformation */

$this->breadcrumbs=array(
	'Application Informations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ApplicationInformation', 'url'=>array('index')),
	array('label'=>'Create ApplicationInformation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#application-information-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Application Informations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'application-information-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'num_of_applicant',
		'selection',
		'sub_selection',
		'address',
		'city',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
