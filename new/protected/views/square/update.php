<?php
/* @var $this SquareController */
/* @var $model Square */
?>

<?php
$this->breadcrumbs=array(
	'Squares'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Square', 'url'=>array('index')),
	array('label'=>'Create Square', 'url'=>array('create')),
	array('label'=>'View Square', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Square', 'url'=>array('admin')),
);
?>

    <h1>Update Square <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>