<?php
/* @var $this StratigraphyController */
/* @var $model Stratigraphy */
?>

<?php
$this->breadcrumbs=array(
	'Stratigraphies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stratigraphy', 'url'=>array('index')),
	array('label'=>'Manage Stratigraphy', 'url'=>array('admin')),
);
?>

<h1>Create Stratigraphy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>