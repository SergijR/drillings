<?php
/* @var $this FluidController */
/* @var $model Fluid */

$this->breadcrumbs=array(
	'Fluids'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Fluid', 'url'=>array('index')),
	array('label'=>'Create Fluid', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fluid-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fluids</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fluid-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id',*/
		'Date',
		'Interval',
		/*'id_FluidType',*/
		'Composition',
		'Density1',
		'Viscosity1',
		'Filtration1',
		'MudcakeThickness1',
		'SSV1',
		'SSV10',
		'SurfaceTension',
		/*'id_UBR',
		'id_Square',
		'id_Pore',*/
		'Density2',
		'Viscosity2',
		'Filtration2',
		'MudcakeThickness2',
		/*'id_Stratigraphy',
		'id_Arch',
		'id_PoreType',*/
		'ProjectNumber',
		'interval1',
		/*'id_Born',*/
		'interval2',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
