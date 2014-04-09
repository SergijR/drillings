<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */

$this->breadcrumbs=array(
	'Elimination Actions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EliminationActions', 'url'=>array('index')),
	array('label'=>'Manage EliminationActions', 'url'=>array('admin')),
);
?>

<h1>Create EliminationActions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>