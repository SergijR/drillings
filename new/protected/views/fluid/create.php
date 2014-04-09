<?php
/* @var $this FluidController */
/* @var $model Fluid */

$this->breadcrumbs=array(
	'Fluids'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fluid', 'url'=>array('index')),
	array('label'=>'Manage Fluid', 'url'=>array('admin')),
);
?>

<h1>Create Fluid</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>