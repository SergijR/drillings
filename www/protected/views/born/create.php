<?php
/* @var $this BornController */
/* @var $model Born */
?>

<?php
$this->breadcrumbs=array(
	'Borns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Born', 'url'=>array('index')),
	array('label'=>'Manage Born', 'url'=>array('admin')),
);
?>

<h1>Create Born</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>