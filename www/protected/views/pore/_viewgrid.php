<?php
/* @var $this FluidController */
/* @var $data Fluid */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval')); ?>:</b>
	<?php echo CHtml::encode($data->interval); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fluidtype')); ?>:</b>
	<?php echo CHtml::encode($data->id_fluidtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('composition')); ?>:</b>
	<?php echo CHtml::encode($data->composition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('density1')); ?>:</b>
	<?php echo CHtml::encode($data->density1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viscosity1')); ?>:</b>
	<?php echo CHtml::encode($data->viscosity1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filtration1')); ?>:</b>
	<?php echo CHtml::encode($data->filtration1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mudcakethickness1')); ?>:</b>
	<?php echo CHtml::encode($data->mudcakethickness1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ssv1')); ?>:</b>
	<?php echo CHtml::encode($data->ssv1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ssv10')); ?>:</b>
	<?php echo CHtml::encode($data->ssv10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surfacetension')); ?>:</b>
	<?php echo CHtml::encode($data->surfacetension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ubr')); ?>:</b>
	<?php echo CHtml::encode($data->id_ubr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_square')); ?>:</b>
	<?php echo CHtml::encode($data->id_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pore')); ?>:</b>
	<?php echo CHtml::encode($data->id_pore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('density2')); ?>:</b>
	<?php echo CHtml::encode($data->density2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viscosity2')); ?>:</b>
	<?php echo CHtml::encode($data->viscosity2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filtration2')); ?>:</b>
	<?php echo CHtml::encode($data->filtration2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mudcakethickness2')); ?>:</b>
	<?php echo CHtml::encode($data->mudcakethickness2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_stratigraphy')); ?>:</b>
	<?php echo CHtml::encode($data->id_stratigraphy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_arch')); ?>:</b>
	<?php echo CHtml::encode($data->id_arch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_poretype')); ?>:</b>
	<?php echo CHtml::encode($data->id_poretype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_number')); ?>:</b>
	<?php echo CHtml::encode($data->project_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval1')); ?>:</b>
	<?php echo CHtml::encode($data->interval1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_born')); ?>:</b>
	<?php echo CHtml::encode($data->id_born); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval2')); ?>:</b>
	<?php echo CHtml::encode($data->interval2); ?>
	<br />



</div>