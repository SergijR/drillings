<?php
/* @var $this SfController */
/* @var $model SF */
?>

<?php
$this->breadcrumbs=array(
	'Sfs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SF', 'url'=>array('index')),
	array('label'=>'Manage SF', 'url'=>array('admin')),
);
?>

<h1>Create SF</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>