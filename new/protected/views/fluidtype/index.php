<?php
/* @var $this FluidtypeController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Fluid Types',
);

$this->menu=array(
	array('label'=>'Create FluidType','url'=>array('create')),
	array('label'=>'Manage FluidType','url'=>array('admin')),
);
?>

<h1>Fluid Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>