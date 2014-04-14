<?php
/* @var $this FluidtypeController */
/* @var $model FluidType */
?>

<?php
$this->breadcrumbs=array(
	'Fluid Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FluidType', 'url'=>array('index')),
	array('label'=>'Manage FluidType', 'url'=>array('admin')),
);
?>

<h1>Create FluidType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>