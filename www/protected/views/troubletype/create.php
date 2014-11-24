<?php
/* @var $this TroubletypeController */
/* @var $model TroubleType */
?>

<?php
$this->breadcrumbs=array(
	'Trouble Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TroubleType', 'url'=>array('index')),
	array('label'=>'Manage TroubleType', 'url'=>array('admin')),
);
?>

<h1>Create TroubleType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>