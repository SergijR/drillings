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
<div class='panel'></div>
<div class='table_fluid'>
<table width="1000">
<tr><td>id</td>
<td>date</td>
<td>interval</td>
<td>id_fluidtype</td>
<td>composition</td>
<td>density1</td>
<td>viscosity1</td>
<td>filtration1</td>
<td>mudcakethickness1</td>
<td>ssv1</td>
<td>ssv10</td>
<td>surfacetension</td>
<td>id_ubr</td>
<td>id_square</td>
<td>id_pore</td>
<td>density2</td>
<td>viscosity2</td>
<td>filtration2</td>
<td>mudcakethickness2</td>
<td>id_stratigraphy</td>
<td>id_arch</td>
<td>id_poretype</td>
<td>project_number</td>
<td>interval1</td>
<td>id_born</td>
<td>interval2</td>
</tr></table>
<?


	$this->widget('CTreeView', array(
	'id'=>'pore-tree',
	//'data' => $my_data
	'url' => '/index.php?r=pore/tree',
	));

?>
</div>