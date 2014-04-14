<?php
/* @var $this PoreController */
/* @var $model Pore */
?>

<?php
$this->breadcrumbs=array(
	'Pores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pore', 'url'=>array('index')),
	array('label'=>'Manage Pore', 'url'=>array('admin')),
);
?>

<h1>Create Pore</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>