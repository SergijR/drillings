<?php
/* @var $this FluidController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Fluids',
);

$this->menu=array(
	array('label'=>'Create Fluid','url'=>array('create')),
	array('label'=>'Manage Fluid','url'=>array('admin')),
);
?>

<h1>Fluids</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>