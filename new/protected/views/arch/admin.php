<?php
/* @var $this ArchController */
/* @var $model Arch */

$this->breadcrumbs=array(
	'Arches'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label' => 'List header'),
	array('label'=>'Manage Arch', 'url'=>array('admin'),'active' => true),
	array('label'=>'List Arch', 'url'=>array('index')),
	array('label'=>'Create Arch', 'url'=>array('create')),
	TbHtml::menuDivider(),
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

<h1>Manage Arches</h1>

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
<?php
$this->widget('bootstrap.widgets.TbModal', array(
    'id' => 'myModal',
    'header' => 'Drilling - база данных и СУБД по буровым расстворам и осложнениям на месторождениях республики Башкортостан',
    'content' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>',
    'footer' => array(
        TbHtml::button('Закрыть', array('data-dismiss' => 'modal')),
     ),
));
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
   'dataProvider' => $model->search(),
   'filter' => $model,
   'template' => "{items}",
   'columns' => array(
       // 'id',
		'Name',
		array(
			'class'=>'CButtonColumn',
		),
    ),
)); ?>
