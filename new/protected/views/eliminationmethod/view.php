<?php
/* @var $this EliminationmethodController */
/* @var $model EliminationMethod */

$this->breadcrumbs=array(
	'Elimination Methods'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List EliminationMethod', 'url'=>array('index')),
	array('label'=>'Create EliminationMethod', 'url'=>array('create')),
	array('label'=>'Update EliminationMethod', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EliminationMethod', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EliminationMethod', 'url'=>array('admin')),
);
?>

<h1>View EliminationMethod #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Name',
	),
)); ?>
