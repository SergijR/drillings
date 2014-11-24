<?php
/* @var $this PoreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Буровые растворы',
);

$this->menu=array(
	array('label'=>'Create Pore','url'=>array('create')),
	array('label'=>'Manage Pore','url'=>array('admin')),
);
?>
<div class='panel'>

</div>
	<div class="block_2" >
	<h5><? echo t('Manage');?></h5>
	</div>
	<div class='table_fluid'>
	
<?php

$this->widget('ext.yii-easyui.widgets.EuiDataGrid', array(
	'style' => 'width:auto; height: 200px',
	'url' => $this->createUrl('tree2'),
	'pagination' => true,	
	'columns' => array( 
								array( 'title' => 'id', 'field'=>'id', 'width'=> 10, 'sortable'=>true ),
								)
		
));
?>
<?/*
	$this->widget('CTreeView', array(
	'id'=>'pore-tree',
	//'data' => $my_data,
	'url' => '/index.php?r=pore/tree',
	));*/
?>
 

</div>