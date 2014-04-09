<?php
/* @var $this BornController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Borns',
);

$this->menu=array(
	array('label'=>'Create Born', 'url'=>array('create')),
	array('label'=>'Manage Born', 'url'=>array('admin')),
);
?>

<h1>Borns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
