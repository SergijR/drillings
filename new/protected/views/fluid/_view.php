<?php
/* @var $this FluidController */
/* @var $data Fluid */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date')); ?>:</b>
	<?php echo CHtml::encode($data->Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Interval')); ?>:</b>
	<?php echo CHtml::encode($data->Interval); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_FluidType')); ?>:</b>
	<?php echo CHtml::encode($data->id_FluidType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Composition')); ?>:</b>
	<?php echo CHtml::encode($data->Composition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Density1')); ?>:</b>
	<?php echo CHtml::encode($data->Density1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Viscosity1')); ?>:</b>
	<?php echo CHtml::encode($data->Viscosity1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Filtration1')); ?>:</b>
	<?php echo CHtml::encode($data->Filtration1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MudcakeThickness1')); ?>:</b>
	<?php echo CHtml::encode($data->MudcakeThickness1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SSV1')); ?>:</b>
	<?php echo CHtml::encode($data->SSV1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SSV10')); ?>:</b>
	<?php echo CHtml::encode($data->SSV10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SurfaceTension')); ?>:</b>
	<?php echo CHtml::encode($data->SurfaceTension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_UBR')); ?>:</b>
	<?php echo CHtml::encode($data->id_UBR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Square')); ?>:</b>
	<?php echo CHtml::encode($data->id_Square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Pore')); ?>:</b>
	<?php echo CHtml::encode($data->id_Pore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Density2')); ?>:</b>
	<?php echo CHtml::encode($data->Density2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Viscosity2')); ?>:</b>
	<?php echo CHtml::encode($data->Viscosity2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Filtration2')); ?>:</b>
	<?php echo CHtml::encode($data->Filtration2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MudcakeThickness2')); ?>:</b>
	<?php echo CHtml::encode($data->MudcakeThickness2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Stratigraphy')); ?>:</b>
	<?php echo CHtml::encode($data->id_Stratigraphy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Arch')); ?>:</b>
	<?php echo CHtml::encode($data->id_Arch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_PoreType')); ?>:</b>
	<?php echo CHtml::encode($data->id_PoreType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectNumber')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval1')); ?>:</b>
	<?php echo CHtml::encode($data->interval1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Born')); ?>:</b>
	<?php echo CHtml::encode($data->id_Born); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval2')); ?>:</b>
	<?php echo CHtml::encode($data->interval2); ?>
	<br />

	*/ ?>

</div>