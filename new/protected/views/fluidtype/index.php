<?php
/* @var $this FluidtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fluid Types',
);

$this->menu=array(
	array('label'=>'Create FluidType', 'url'=>array('create')),
	array('label'=>'Manage FluidType', 'url'=>array('admin')),
);
?>

<h1>Fluid Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
