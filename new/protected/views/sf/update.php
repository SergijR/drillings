<?php
/* @var $this SfController */
/* @var $model SF */
?>

<?php
$this->breadcrumbs=array(
	'Sfs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SF', 'url'=>array('index')),
	array('label'=>'Create SF', 'url'=>array('create')),
	array('label'=>'View SF', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SF', 'url'=>array('admin')),
);
?>

    <h1>Update SF <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>