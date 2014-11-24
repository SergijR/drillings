<?php
/* @var $this UsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Uses',
);

$this->menu=array(
	array('label'=>'Create US','url'=>array('create')),
	array('label'=>'Manage US','url'=>array('admin')),
);
?>

<h1>Uses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>