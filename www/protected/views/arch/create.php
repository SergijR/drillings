<?php
/* @var $this ArchController */
/* @var $model Arch */
?>

<?php
$this->breadcrumbs=array(
	'Arches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Arch', 'url'=>array('index')),
	array('label'=>'Manage Arch', 'url'=>array('admin')),
);
?>

<h1>Create Arch</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>