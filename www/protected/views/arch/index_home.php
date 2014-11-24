<?php
/* @var $this ArchController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Арки',
);

$this->menu=array(
	array('label'=>'Create Arch','url'=>array('create')),
	array('label'=>'Manage Arch','url'=>array('admin')),
);
?>

<h1>Арки</h1>
	<?php $dataProvider = new CActiveDataProvider('Arch');
	
	$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'arch-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>