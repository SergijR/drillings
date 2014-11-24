<?php
/* @var $this TroubletypeController */
/* @var $model TroubleType */
?>

<?php
$this->breadcrumbs=array(
	'Trouble Types'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List TroubleType', 'url'=>array('index')),
	array('label'=>'Create TroubleType', 'url'=>array('create')),
	array('label'=>'Update TroubleType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TroubleType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TroubleType', 'url'=>array('admin')),
);
?>

<h1>View TroubleType #<?php echo $model->id; ?></h1>

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