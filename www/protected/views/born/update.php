<?php
/* @var $this BornController */
/* @var $model Born */
?>

<?php
$this->breadcrumbs=array(
	'Borns'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Born', 'url'=>array('index')),
	array('label'=>'Create Born', 'url'=>array('create')),
	array('label'=>'View Born', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Born', 'url'=>array('admin')),
);
?>

    <h1>Update Born <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>