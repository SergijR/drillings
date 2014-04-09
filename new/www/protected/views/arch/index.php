<?php
/* @var $this ArchController */
/* @var $dataProvider CActiveDataProvider */
/* @var $model Arch */

$this->breadcrumbs=array(
	'Arches',
);

$this->menu=array(
	array('label'=>'Create Arch', 'url'=>array('create')),
	array('label'=>'Manage Arch', 'url'=>array('admin')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#arch-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Arches</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'arch-grid',
	'dataProvider'=>$model->search(),
	'filterPosition' => 'header',
	'filter'=>$model,
	'columns'=>array(
		'id',
		'dkey',
		'name',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
