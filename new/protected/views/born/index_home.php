<?php
/* @var $this BornController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Borns',
);

$this->menu=array(
	array('label'=>'Create Born','url'=>array('create')),
	array('label'=>'Manage Born','url'=>array('admin')),
);
?>

<h1>Borns</h1>

<?php $dataProvider = new CActiveDataProvider('Born');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'born-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'Name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>