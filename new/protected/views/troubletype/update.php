<?php
/* @var $this TroubletypeController */
/* @var $model TroubleType */
?>

<?php
$this->breadcrumbs=array(
	'Trouble Types'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TroubleType', 'url'=>array('index')),
	array('label'=>'Create TroubleType', 'url'=>array('create')),
	array('label'=>'View TroubleType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TroubleType', 'url'=>array('admin')),
);
?>

    <h1>Update TroubleType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>