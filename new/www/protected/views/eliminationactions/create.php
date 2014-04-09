<?php
/* @var $this EliminationactionsController */
/* @var $model Eliminationactions */

$this->breadcrumbs=array(
	'Eliminationactions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Eliminationactions', 'url'=>array('index')),
	array('label'=>'Manage Eliminationactions', 'url'=>array('admin')),
);
?>

<h1>Create Eliminationactions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>