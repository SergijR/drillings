<?php
/* @var $this ArchController */
/* @var $model Arch */
?>

<?php
$this->breadcrumbs=array(
	'Arches'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Arch', 'url'=>array('index')),
	array('label'=>'Create Arch', 'url'=>array('create')),
	array('label'=>'Update Arch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Arch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Arch', 'url'=>array('admin')),
);
?>

<h1>View Arch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'Name',
	),
)); ?>