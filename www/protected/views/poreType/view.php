<?php
/* @var $this PoreTypeController */
/* @var $model PoreType */
?>

<?php
$this->breadcrumbs=array(
	'Pore Types'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List PoreType', 'url'=>array('index')),
	array('label'=>'Create PoreType', 'url'=>array('create')),
	array('label'=>'Update PoreType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PoreType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PoreType', 'url'=>array('admin')),
);
?>

<h1>View PoreType #<?php echo $model->id; ?></h1>

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