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

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>