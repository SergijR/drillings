<?php
/* @var $this FluidController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fluids',
);

$this->menu=array(
	array('label'=>'Create Fluid', 'url'=>array('create')),
	array('label'=>'Manage Fluid', 'url'=>array('admin')),
);
?>

<h1>Fluids</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
