<?php
/* @var $this PoreTypeController */
/* @var $model PoreType */
?>

<?php
$this->breadcrumbs=array(
	'Pore Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PoreType', 'url'=>array('index')),
	array('label'=>'Manage PoreType', 'url'=>array('admin')),
);
?>

<h1>Create PoreType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>