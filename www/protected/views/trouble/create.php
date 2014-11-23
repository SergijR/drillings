<?php
/* @var $this TroubleController */
/* @var $model Trouble */
?>

<?php
$this->breadcrumbs=array(
	'Troubles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trouble', 'url'=>array('index')),
	array('label'=>'Manage Trouble', 'url'=>array('admin')),
);
?>

<h1>Create Trouble</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>