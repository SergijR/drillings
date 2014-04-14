<?php
/* @var $this UsController */
/* @var $model US */
?>

<?php
$this->breadcrumbs=array(
	'Uses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List US', 'url'=>array('index')),
	array('label'=>'Manage US', 'url'=>array('admin')),
);
?>

<h1>Create US</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>