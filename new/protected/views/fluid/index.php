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
//var_dump($model);


/*foreach ($archs as $arch) {

		$fluids = $arch->fluids;
			foreach ($fluids as $fluid) {
			
				$pore =  $fluid->idPore;
				$my_data_pore = array();
				$my_data_pore[$pore->id] = array (
					'text'     => $pore->Name,
					'expanded' => true,
					//'children' => $my_data_born
				);
			
			
				$my_data_born = array();
				$born = $fluid->idBorn;
				$my_data_born[$born->id] = array (
					'text'     => $born->Name,
					'expanded' => true,
					'children' => ( $my_data_born[$born->id]
				);

			}
		
		$my_data[$arch->id] = array(
				'text'     => $arch->Name,
				'expanded' => true,
				'children' => $my_data_born,
		);

}*/
/*
$my_data = array();
$fluids = Fluid::model()->findAll();

foreach ($fluids as $fluid) {
$arch = $fluid->idArch;
$born = $fluid->idBorn;
$pore = $fluid->idPore;

if (is_array($my_data[$arch->id])) {
} else {
$my_data[$arch->id] =array (
'title'=>$arch->Name,
'children' => array(), 
);
}

if (is_array($my_data[$arch->id]['children'][$born->id])) {

} else {

$my_data[$arch->id]['children'] = array_merge(
$my_data[$arch->id]['children'], 
array($born->id=>array(
'title'=>$born->Name,
'children' => array(),
)) );
}

if (is_array($my_data[$arch->id]['children'][$born->id]['children'][$pore->id])) {

} else {

$my_data[$arch->id]['children'][$born->id]['children'] = array_merge(
$my_data[$arch->id]['children'][$born->id]['children'], 
array($pore->id=>array(
'title'=>$pore->No,
'children' => array(),
)) );
}

}
*/


//var_dump($my_data);
//Arch
//Born
//Pore

//Fluid











$tmp_columns  = $model->attributeLabels();
$tl_columns = array();


foreach ($tmp_columns as $key=>$value) {





}
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
