<?php
/* @var $this BornController */
/* @var $model Born */
?>

<?php
$this->breadcrumbs=array(
	'Borns'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Born', 'url'=>array('index')),
	array('label'=>'Create Born', 'url'=>array('create')),
	array('label'=>'Update Born', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Born', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Born', 'url'=>array('admin')),
);
?>

<h1>View Born #<?php echo $model->id; ?></h1>

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