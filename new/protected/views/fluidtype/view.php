<?php
/* @var $this FluidtypeController */
/* @var $model FluidType */

$this->breadcrumbs=array(
	'Fluid Types'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List FluidType', 'url'=>array('index')),
	array('label'=>'Create FluidType', 'url'=>array('create')),
	array('label'=>'Update FluidType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FluidType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FluidType', 'url'=>array('admin')),
);
?>

<h1>View FluidType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Name',
	),
)); ?>
