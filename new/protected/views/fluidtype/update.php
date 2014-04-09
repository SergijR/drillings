<?php
/* @var $this FluidtypeController */
/* @var $model FluidType */

$this->breadcrumbs=array(
	'Fluid Types'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FluidType', 'url'=>array('index')),
	array('label'=>'Create FluidType', 'url'=>array('create')),
	array('label'=>'View FluidType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FluidType', 'url'=>array('admin')),
);
?>

<h1>Update FluidType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>