<?php
/* @var $this ArchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arches',
);

$this->menu=array(
	array('label'=>t('Create Arch'), 'url'=>array('create')),
	array('label'=>t('Manage Arch'), 'url'=>array('admin')),
	 TbHtml::menuDivider(),
);
?>

<h1>Arches</h1>

<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
   'dataProvider' => $dataProvider,
   'filter' => $model,
   'template' => "{items}",
   'columns' => array(
        //'id',
		'Name',
		array(
			'class'=>'CButtonColumn',
		),
    ),
)); ?>