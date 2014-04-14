<?php
/* @var $this InjectiontechnologyController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Injection Technologies',
);

$this->menu=array(
	array('label'=>'Create InjectionTechnology','url'=>array('create')),
	array('label'=>'Manage InjectionTechnology','url'=>array('admin')),
);
?>

<h1>Injection Technologies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>