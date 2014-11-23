<?php
/* @var $this SquareController */
/* @var $model Square */
?>

<?php
$this->breadcrumbs=array(
	'Squares'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Square', 'url'=>array('index')),
	array('label'=>'Create Square', 'url'=>array('create')),
	array('label'=>'Update Square', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Square', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Square', 'url'=>array('admin')),
);
?>

<h1>View Square #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'Name',
		'id_Arch',
		'id_Born',
	),
)); ?>