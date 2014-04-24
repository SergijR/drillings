<?php
/* @var $this PoreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Pores',
);

$this->menu=array(
	array('label'=>'Create Pore','url'=>array('create')),
	array('label'=>'Manage Pore','url'=>array('admin')),
);
?>

<h1>Pores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>