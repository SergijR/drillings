<?php
/* @var $this FluidController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Fluids',
);

$this->menu=array(
	array('label'=>'Create Fluid','url'=>array('create')),
	array('label'=>'Manage Fluid','url'=>array('admin')),
);
?>

<h1>Fluids</h1>

	<div class="block_2" >
	<h5><? echo t('Manage');?></h5>
			<?php echo CHtml::htmlButton(t('Edit Order'), array ('href'=>'index.php?r=fluid/update','name'=>'Clear','style'=>'','class'=>'tl_edit_link update-dialog-open-link' )); ?>
			<?php echo CHtml::htmlButton(t('Delete Order'), array ('href'=>'index.php?r=fluid/delete','onclick'=>'delete_row();','name'=>'Clear','style'=>'','class'=>'tl_delete_link update-dialog-open-link' )); ?>

	</div>
	
	
	<div>
<?
$fluid = Fluid::model()->with('idArch','idFluidType')->findAll();
//var_dump($fluid);

?>
	
	</div>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'fluid-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Date',
		'Interval',
	//	'id_FluidType',
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
		'id_Pore',
		'Density2',
		'Viscosity2',
		'Filtration2',
		'MudcakeThickness2',
		'id_Stratigraphy',
		'id_Arch',
		'id_PoreType',
		'ProjectNumber',
		'interval1',
		'id_Born',
		'interval2',*/
	),
)); ?>
