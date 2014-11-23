<?php
/* @var $this TroubletypeController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Trouble Types',
);

$this->menu=array(
	array('label'=>'Create TroubleType','url'=>array('create')),
	array('label'=>'Manage TroubleType','url'=>array('admin')),
);
?>

<h1>Trouble Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>