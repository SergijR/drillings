<?php
/* @var $this SquareController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Squares',
);

$this->menu=array(
	array('label'=>'Create Square','url'=>array('create')),
	array('label'=>'Manage Square','url'=>array('admin')),
);
?>

<h1>Squares</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>