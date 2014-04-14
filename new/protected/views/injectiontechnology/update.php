<?php
/* @var $this InjectiontechnologyController */
/* @var $model InjectionTechnology */
?>

<?php
$this->breadcrumbs=array(
	'Injection Technologies'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InjectionTechnology', 'url'=>array('index')),
	array('label'=>'Create InjectionTechnology', 'url'=>array('create')),
	array('label'=>'View InjectionTechnology', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InjectionTechnology', 'url'=>array('admin')),
);
?>

    <h1>Update InjectionTechnology <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>