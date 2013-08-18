<?php
/* @var $this ApplicationInformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Application Informations',
);

$this->menu=array(
	array('label'=>'Create ApplicationInformation', 'url'=>array('create')),
	array('label'=>'Manage ApplicationInformation', 'url'=>array('admin')),
);
?>

<h1>Application Informations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
