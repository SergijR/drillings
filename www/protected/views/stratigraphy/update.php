<?php
/* @var $this StratigraphyController */
/* @var $model Stratigraphy */
?>

<?php
$this->breadcrumbs=array(
	'Stratigraphies'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stratigraphy', 'url'=>array('index')),
	array('label'=>'Create Stratigraphy', 'url'=>array('create')),
	array('label'=>'View Stratigraphy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stratigraphy', 'url'=>array('admin')),
);
?>

    <h1>Update Stratigraphy <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>