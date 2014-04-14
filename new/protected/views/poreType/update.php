<?php
/* @var $this PoreTypeController */
/* @var $model PoreType */
?>

<?php
$this->breadcrumbs=array(
	'Pore Types'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PoreType', 'url'=>array('index')),
	array('label'=>'Create PoreType', 'url'=>array('create')),
	array('label'=>'View PoreType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PoreType', 'url'=>array('admin')),
);
?>

    <h1>Update PoreType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>