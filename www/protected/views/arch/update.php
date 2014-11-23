<?php
/* @var $this ArchController */
/* @var $model Arch */
?>

<?php
$this->breadcrumbs=array(
	'Arches'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Arch', 'url'=>array('index')),
	array('label'=>'Create Arch', 'url'=>array('create')),
	array('label'=>'View Arch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Arch', 'url'=>array('admin')),
);
?>

    <h1>Update Arch <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>