<?php
/* @var $this PoreController */
/* @var $model Pore */
?>

<?php
$this->breadcrumbs=array(
	'Pores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pore', 'url'=>array('index')),
	array('label'=>'Create Pore', 'url'=>array('create')),
	array('label'=>'View Pore', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pore', 'url'=>array('admin')),
);
?>

    <h1>Update Pore <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>