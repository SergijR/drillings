<?php
/* @var $this TroubleController */
/* @var $model Trouble */
?>

<?php
$this->breadcrumbs=array(
	'Troubles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Trouble', 'url'=>array('index')),
	array('label'=>'Create Trouble', 'url'=>array('create')),
	array('label'=>'View Trouble', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Trouble', 'url'=>array('admin')),
);
?>

    <h1>Update Trouble <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>