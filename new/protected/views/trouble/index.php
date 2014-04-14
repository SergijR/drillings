<?php
/* @var $this TroubleController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Troubles',
);

$this->menu=array(
	array('label'=>'Create Trouble','url'=>array('create')),
	array('label'=>'Manage Trouble','url'=>array('admin')),
);
?>

<h1>Troubles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>