<?php
/* @var $this UsController */
/* @var $model US */
?>

<?php
$this->breadcrumbs=array(
	'Uses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List US', 'url'=>array('index')),
	array('label'=>'Create US', 'url'=>array('create')),
	array('label'=>'Update US', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete US', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage US', 'url'=>array('admin')),
);
?>

<h1>View US #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'id1',
		'id2',
	),
)); ?>