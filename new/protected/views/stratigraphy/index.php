<?php
/* @var $this StratigraphyController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Stratigraphies',
);

$this->menu=array(
	array('label'=>'Create Stratigraphy','url'=>array('create')),
	array('label'=>'Manage Stratigraphy','url'=>array('admin')),
);
?>

<h1>Stratigraphies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>