<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */
?>

<?php
$this->breadcrumbs=array(
	'Elimination Actions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EliminationActions', 'url'=>array('index')),
	array('label'=>'Create EliminationActions', 'url'=>array('create')),
	array('label'=>'View EliminationActions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EliminationActions', 'url'=>array('admin')),
);
?>

    <h1>Update EliminationActions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>