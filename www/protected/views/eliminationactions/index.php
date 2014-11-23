<?php
/* @var $this EliminationactionsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Elimination Actions',
);

$this->menu=array(
	array('label'=>'Create EliminationActions','url'=>array('create')),
	array('label'=>'Manage EliminationActions','url'=>array('admin')),
);
?>

<h1>Elimination Actions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>