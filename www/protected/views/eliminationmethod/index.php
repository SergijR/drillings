<?php
/* @var $this EliminationmethodController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Elimination Methods',
);

$this->menu=array(
	array('label'=>'Create EliminationMethod','url'=>array('create')),
	array('label'=>'Manage EliminationMethod','url'=>array('admin')),
);
?>

<h1>Elimination Methods</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>