<?php
/* @var $this PoreTypeController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Pore Types',
);

$this->menu=array(
	array('label'=>'Create PoreType','url'=>array('create')),
	array('label'=>'Manage PoreType','url'=>array('admin')),
);
?>

<h1>Pore Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>