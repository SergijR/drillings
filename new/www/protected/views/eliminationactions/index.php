<?php
/* @var $this EliminationactionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eliminationactions',
);

$this->menu=array(
	array('label'=>'Create Eliminationactions', 'url'=>array('create')),
	array('label'=>'Manage Eliminationactions', 'url'=>array('admin')),
);
?>

<h1>Eliminationactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
