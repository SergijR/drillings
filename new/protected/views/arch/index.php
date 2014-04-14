<?php
/* @var $this ArchController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Arches',
);

$this->menu=array(
	array('label'=>'Create Arch','url'=>array('create')),
	array('label'=>'Manage Arch','url'=>array('admin')),
);
?>

<h1>Arches</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>