<?php
/* @var $this FluidController */
/* @var $model Fluid */

$this->breadcrumbs=array(
	'Fluids'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fluid', 'url'=>array('index')),
	array('label'=>'Create Fluid', 'url'=>array('create')),
	array('label'=>'View Fluid', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fluid', 'url'=>array('admin')),
);
?>

<h1>Update Fluid <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>