<?php
/* @var $this TroubleController */
/* @var $model Trouble */


$this->breadcrumbs=array(
	'Troubles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Trouble', 'url'=>array('index')),
	array('label'=>'Create Trouble', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trouble-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Troubles</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'trouble-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Activity',
		'Method',
		'Time',
		'EliminationDate',
		'id_Square',
		/*
		'Interval',
		'Rock',
		'id_UBR',
		'id_Units1',
		'id_Units2',
		'id_Pore',
		'id_TroubleType',
		'CirculationLoss',
		'FluidDensity',
		'Result',
		'id_EliminationMethod',
		'id_InjectionTechnology',
		'id_Stratigraphy',
		'id_Arch',
		'id_FluidType',
		'id_Born',
		'interval_ot',
		'interval_do',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>