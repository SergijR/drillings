<?php
/* @var $this UbrController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Ubrs',
);

$this->menu=array(
	array('label'=>'Create UBR','url'=>array('create')),
	array('label'=>'Manage UBR','url'=>array('admin')),
);
?>

<h1>Ubrs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>