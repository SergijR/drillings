<?php
/* @var $this UsController */
/* @var $model US */
?>

<?php
$this->breadcrumbs=array(
	'Uses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List US', 'url'=>array('index')),
	array('label'=>'Create US', 'url'=>array('create')),
	array('label'=>'View US', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage US', 'url'=>array('admin')),
);
?>

    <h1>Update US <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>