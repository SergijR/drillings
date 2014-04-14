<?php
/* @var $this TroubleController */
/* @var $model Trouble */
?>

<?php
$this->breadcrumbs=array(
	'Troubles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Trouble', 'url'=>array('index')),
	array('label'=>'Create Trouble', 'url'=>array('create')),
	array('label'=>'Update Trouble', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Trouble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trouble', 'url'=>array('admin')),
);
?>

<h1>View Trouble #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'Activity',
		'Method',
		'Time',
		'EliminationDate',
		'id_Square',
		'Interval',
		'Rock',
		'id_UBR',
		'id_Units1',
		'id_Units2',
		'id_Pore',
		'id_TroubleType',
		'CirculationLoss',
		'FluidDensity',
		'Result',
		'id_EliminationMethod',
		'id_InjectionTechnology',
		'id_Stratigraphy',
		'id_Arch',
		'id_FluidType',
		'id_Born',
		'interval_ot',
		'interval_do',
	),
)); ?>