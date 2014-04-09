<?php
/* @var $this EliminationactionsController */
/* @var $model Eliminationactions */

$this->breadcrumbs=array(
	'Eliminationactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Eliminationactions', 'url'=>array('index')),
	array('label'=>'Create Eliminationactions', 'url'=>array('create')),
	array('label'=>'Update Eliminationactions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Eliminationactions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eliminationactions', 'url'=>array('admin')),
);
?>

<h1>View Eliminationactions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
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
		'actionsquantity',
		'id_trouble',
		'id_stratigraphy',
	),
)); ?>
