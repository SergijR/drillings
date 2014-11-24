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
		'date',
		'interval',
		'id_fluidtype',
		'composition',
		'density1',
		'viscosity1',
		'filtration1',
		'mudcakethickness1',
		'ssv1',
		'ssv10',
		'surfacetension',
		'id_ubr',
		'id_square',
		'id_pore',
		'density2',
		'viscosity2',
		'filtration2',
		'mudcakethickness2',
		'id_stratigraphy',
		'id_arch',
		'id_poretype',
		'project_number',
		'interval1',
		'id_born',
		'interval2',
	),
)); ?>