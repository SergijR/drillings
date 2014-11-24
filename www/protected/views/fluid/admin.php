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
	'id'=>'fluid-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date',
		'interval',
		'id_fluidtype',
		'composition',
		'density1',
		/*
		'viscosity1',
		'filtration1',
		'mudcakethickness1',
		'ssv1',
		'ssv10',
		'surfacetension',
		'id_ubr',
		'id_square',
		'id_pore',
		'density2',
		'viscosity2',
		'filtration2',
		'mudcakethickness2',
		'id_stratigraphy',
		'id_arch',
		'id_poretype',
		'project_number',
		'interval1',
		'id_born',
		'interval2',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>