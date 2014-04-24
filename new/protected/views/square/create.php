<?php
/* @var $this SquareController */
/* @var $model Square */
?>

<?php
$this->breadcrumbs=array(
	'Squares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Square', 'url'=>array('index')),
	array('label'=>'Manage Square', 'url'=>array('admin')),
);
?>

<h1>Create Square</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>