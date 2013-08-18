<?php
/* @var $this ApplicationInformationController */
/* @var $model ApplicationInformation */

$this->breadcrumbs=array(
	'Application Informations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ApplicationInformation', 'url'=>array('index')),
	array('label'=>'Manage ApplicationInformation', 'url'=>array('admin')),
);
?>

<h1>Create ApplicationInformation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>