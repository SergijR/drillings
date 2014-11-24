<?php
/* @var $this EliminationmethodController */
/* @var $model EliminationMethod */
?>

<?php
$this->breadcrumbs=array(
	'Elimination Methods'=>array('index'),
	$model->name,
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

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'name',
	),
)); ?>