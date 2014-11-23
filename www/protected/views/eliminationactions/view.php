<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */
?>

<?php
$this->breadcrumbs=array(
	'Elimination Actions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EliminationActions', 'url'=>array('index')),
	array('label'=>'Create EliminationActions', 'url'=>array('create')),
	array('label'=>'Update EliminationActions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EliminationActions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EliminationActions', 'url'=>array('admin')),
);
?>

<h1>View EliminationActions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'number',
		'depth',
		'injectionpressure',
		'material',
		'note',
		'id_eliminationmethod',
		'id_injectiontechnology',
		'actions_quantity',
		'id_trouble',
		'id_stratigraphy',
	),
)); ?>