<?php
/* @var $this PoreController */
/* @var $model Pore */
?>

<?php
$this->breadcrumbs=array(
	'Pores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pore', 'url'=>array('index')),
	array('label'=>'Create Pore', 'url'=>array('create')),
	array('label'=>'Update Pore', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pore', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pore', 'url'=>array('admin')),
);
?>

<h1>View Pore #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'No',
		'Construction',
		'id_Square',
		'Bottomhole',
	),
)); ?>