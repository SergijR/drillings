<?php
/* @var $this EliminationmethodController */
/* @var $model EliminationMethod */
?>

<?php
$this->breadcrumbs=array(
	'Elimination Methods'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EliminationMethod', 'url'=>array('index')),
	array('label'=>'Create EliminationMethod', 'url'=>array('create')),
	array('label'=>'View EliminationMethod', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EliminationMethod', 'url'=>array('admin')),
);
?>

    <h1>Update EliminationMethod <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>