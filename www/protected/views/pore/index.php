<?php
/* @var $this PoreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Буровые растворы',
);
Yii::app()->clientScript->registerScript('search', "
var crud = new Crud({
	route: '".$this->createUrl('tree2')."',
	grid: $('#product-grid'),
	window: $('#product-win')	
});
$('#btn-add').click(function(){
	crud.add();
});
$('#btn-edit').click(function(){
	crud.edit();
});
$('#btn-remove').click(function(){
	crud.remove();
});
$('#btn-refresh').click(function(){
	crud.refresh();
});
$('#btn-save').click(function(){
	crud.save();
});
$('#btn-cancel').click(function(){
	$('#product-win').dialog('close');
});	
			
$('#txt-search').searchbox({
	searcher: function(value, name){
		crud.search(value);		
	}
});			
");

$this->menu=array(
	array('label'=>'Create Pore','url'=>array('create')),
	array('label'=>'Manage Pore','url'=>array('admin')),
);
?>
	<div class="block_2" >
	<h5><? echo t('Manage');?></h5>
	</div>
	<div class='table_fluid'>
	<div id="tb" style="width: 100%; height: 30px; padding-top: 6px">
	<div class="crudbar-left" style="float: left;">
		<?php 
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-add',
			'text' => 'Add',
			'iconCls' => 'icon-add'
		));
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-edit',
			'text' => 'Edit',
			'iconCls' => 'icon-edit'
		));		
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-remove',
			'text' => 'Remove',
			'iconCls' => 'icon-remove'
		));
		$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
			'id' => 'btn-refresh',
			'text' => 'Refresh',
			'iconCls' => 'icon-reload'
		));
		?>    	
	</div>
	<div style="padding-right:6px; float: right;">
		<?php
		$this->widget('ext.yii-easyui.widgets.EuiSearchbox', array(
			'id'=>'txt-search',
			'prompt'=> 'Please Input Value',			
		));
		?>
	</div>
</div>
<?php
var_dump($model);
$this->widget('ext.yii-easyui.widgets.EuiDataGrid', array(
	'id' => 'product-grid',
	'style' => 'width:auto; height: 200px',
	'singleSelect' => true,
	'toolbar' => '#tb',
	'idField' => 'id',
	'url' => $this->createUrl('tree2'),
	'columns' => array(
		array('title' => $model['id'], 'field'=>'id', 'width'=> 10, 'sortable'=>true),
		array('title' => $model['date'], 'field'=>'date', 'width'=> 30, 'sortable'=>true),
		array('title' => $model['interval'], 'field'=>'interval', 'width'=> 20, 'sortable'=>true),
		array('title' => $model['id_fluidtype'], 'field'=>'id_fluidtype', 'width'=> 10),
		array('title' => $model['composition'], 'field'=>'composition', 'width'=> 15),
		array('title' => $model['density1'], 'field'=>'density1', 'width'=> 15, 'sortable' => true)
	)	
));
?>
 
<?php 
$this->beginWidget('ext.yii-easyui.widgets.EuiWindow', array(
	'id'=> 'product-win',
	'style'=> 'width:700px',
	'closed' => true,
	'modal' => true,
	'buttons' => '#dlg-buttons'	
));

$this->renderPartial('_form', array('model'=>$model));

$this->endWidget();  
?>

 <div id="dlg-buttons">
 <?php 
 	$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
		'id' => 'btn-save',		
		'text' => 'Save',
		'iconCls' => 'icon-save',
		'plain' => false
	));

	$this->widget('ext.yii-easyui.widgets.EuiLinkbutton', array(
		'id' => 'btn-cancel',		
		'text' => 'Cancel',
		'iconCls' => 'icon-cancel',
		'plain' => false				
	));
?>	
</div>

</div>