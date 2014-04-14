<?php
/* @var $this UbrController */
/* @var $model UBR */
?>

<?php
$this->breadcrumbs=array(
	'Ubrs'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UBR', 'url'=>array('index')),
	array('label'=>'Create UBR', 'url'=>array('create')),
	array('label'=>'View UBR', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UBR', 'url'=>array('admin')),
);
?>

    <h1>Update UBR <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>