<?php
/* @var $this SfController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Sfs',
);

$this->menu=array(
	array('label'=>'Create SF','url'=>array('create')),
	array('label'=>'Manage SF','url'=>array('admin')),
);
?>

<h1>Sfs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>