<?php
/* @var $this EliminationmethodController */
/* @var $model EliminationMethod */
?>

<?php
$this->breadcrumbs=array(
	'Elimination Methods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EliminationMethod', 'url'=>array('index')),
	array('label'=>'Manage EliminationMethod', 'url'=>array('admin')),
);
?>

<h1>Create EliminationMethod</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>