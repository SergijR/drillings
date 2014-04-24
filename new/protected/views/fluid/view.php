<?php
/* @var $this FluidController */
/* @var $model Fluid */
?>

<?php
$this->breadcrumbs=array(
	'Fluids'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Fluid', 'url'=>array('index')),
	array('label'=>'Create Fluid', 'url'=>array('create')),
	array('label'=>'Update Fluid', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Fluid', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fluid', 'url'=>array('admin')),
);
?>

<h1>View Fluid #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'Date',
		'Interval',
		'id_FluidType',
		'Composition',
		'Density1',
		'Viscosity1',
		'Filtration1',
		'MudcakeThickness1',
		'SSV1',
		'SSV10',
		'SurfaceTension',
		'id_UBR',
		'id_Square',
		'id_Pore',
		'Density2',
		'Viscosity2',
		'Filtration2',
		'MudcakeThickness2',
		'id_Stratigraphy',
		'id_Arch',
		'id_PoreType',
		'ProjectNumber',
		'interval1',
		'id_Born',
		'interval2',
	),
)); ?>