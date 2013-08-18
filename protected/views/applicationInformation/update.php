<?php
/* @var $this ApplicationInformationController */
/* @var $model ApplicationInformation */

$this->breadcrumbs=array(
	'Application Informations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ApplicationInformation', 'url'=>array('index')),
	array('label'=>'Create ApplicationInformation', 'url'=>array('create')),
	array('label'=>'View ApplicationInformation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ApplicationInformation', 'url'=>array('admin')),
);
?>

<h1>Update ApplicationInformation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>