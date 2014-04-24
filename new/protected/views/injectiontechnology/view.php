<?php
/* @var $this InjectiontechnologyController */
/* @var $model InjectionTechnology */
?>

<?php
$this->breadcrumbs=array(
	'Injection Technologies'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List InjectionTechnology', 'url'=>array('index')),
	array('label'=>'Create InjectionTechnology', 'url'=>array('create')),
	array('label'=>'Update InjectionTechnology', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InjectionTechnology', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InjectionTechnology', 'url'=>array('admin')),
);
?>

<h1>View InjectionTechnology #<?php echo $model->id; ?></h1>

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