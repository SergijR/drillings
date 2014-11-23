<?php
/* @var $this StratigraphyController */
/* @var $model Stratigraphy */
?>

<?php
$this->breadcrumbs=array(
	'Stratigraphies'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Stratigraphy', 'url'=>array('index')),
	array('label'=>'Create Stratigraphy', 'url'=>array('create')),
	array('label'=>'Update Stratigraphy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stratigraphy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stratigraphy', 'url'=>array('admin')),
);
?>

<h1>View Stratigraphy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'Name',
		'Index',
		'id_Stratigraphy',
		'id_Level',
		'Description',
	),
)); ?>