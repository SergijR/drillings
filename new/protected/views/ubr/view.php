<?php
/* @var $this UbrController */
/* @var $model UBR */
?>

<?php
$this->breadcrumbs=array(
	'Ubrs'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List UBR', 'url'=>array('index')),
	array('label'=>'Create UBR', 'url'=>array('create')),
	array('label'=>'Update UBR', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UBR', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UBR', 'url'=>array('admin')),
);
?>

<h1>View UBR #<?php echo $model->id; ?></h1>

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