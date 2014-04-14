<?php
/* @var $this UbrController */
/* @var $model UBR */
?>

<?php
$this->breadcrumbs=array(
	'Ubrs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UBR', 'url'=>array('index')),
	array('label'=>'Manage UBR', 'url'=>array('admin')),
);
?>

<h1>Create UBR</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>