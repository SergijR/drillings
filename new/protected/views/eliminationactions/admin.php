<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */


$this->breadcrumbs=array(
	'Elimination Actions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EliminationActions', 'url'=>array('index')),
	array('label'=>'Create EliminationActions', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#elimination-actions-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Elimination Actions</h1>

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
	'id'=>'elimination-actions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Number',
		'Depth',
		'InjectionPressure',
		'Material',
		'Note',
		/*
		'id_EliminationMethod',
		'id_InjectionTechnology',
		'ActionsQuantity',
		'id_Trouble',
		'id_Stratigraphy',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>