<?php
/* @var $this FluidController */
/* @var $model Fluid */

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

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Date',
		'Interval',
		'Composition',
		'Density1',
		'Viscosity1',
		'Filtration1',
		'MudcakeThickness1',
		'SSV1',
		'SSV10',
		'SurfaceTension',
		'Density2',
		'Viscosity2',
		'Filtration2',
		'MudcakeThickness2',
		'ProjectNumber',
		'interval1',
		'interval2',
	),
)); ?>
