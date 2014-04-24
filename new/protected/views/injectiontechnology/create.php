<?php
/* @var $this InjectiontechnologyController */
/* @var $model InjectionTechnology */
?>

<?php
$this->breadcrumbs=array(
	'Injection Technologies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InjectionTechnology', 'url'=>array('index')),
	array('label'=>'Manage InjectionTechnology', 'url'=>array('admin')),
);
?>

<h1>Create InjectionTechnology</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>