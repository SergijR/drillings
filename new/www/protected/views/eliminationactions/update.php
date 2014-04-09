<?php
/* @var $this EliminationactionsController */
/* @var $model Eliminationactions */

$this->breadcrumbs=array(
	'Eliminationactions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Eliminationactions', 'url'=>array('index')),
	array('label'=>'Create Eliminationactions', 'url'=>array('create')),
	array('label'=>'View Eliminationactions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Eliminationactions', 'url'=>array('admin')),
);
?>

<h1>Update Eliminationactions <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>