<?php
/* @var $this SfController */
/* @var $model SF */
?>

<?php
$this->breadcrumbs=array(
	'Sfs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SF', 'url'=>array('index')),
	array('label'=>'Create SF', 'url'=>array('create')),
	array('label'=>'Update SF', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SF', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SF', 'url'=>array('admin')),
);
?>

<h1>View SF #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'id1',
		'id2',
	),
)); ?>