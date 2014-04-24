<?php
/* @var $this TroubleController */
/* @var $data Trouble */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activity')); ?>:</b>
	<?php echo CHtml::encode($data->Activity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Method')); ?>:</b>
	<?php echo CHtml::encode($data->Method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Time')); ?>:</b>
	<?php echo CHtml::encode($data->Time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EliminationDate')); ?>:</b>
	<?php echo CHtml::encode($data->EliminationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Square')); ?>:</b>
	<?php echo CHtml::encode($data->id_Square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Interval')); ?>:</b>
	<?php echo CHtml::encode($data->Interval); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Rock')); ?>:</b>
	<?php echo CHtml::encode($data->Rock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_UBR')); ?>:</b>
	<?php echo CHtml::encode($data->id_UBR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Units1')); ?>:</b>
	<?php echo CHtml::encode($data->id_Units1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Units2')); ?>:</b>
	<?php echo CHtml::encode($data->id_Units2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Pore')); ?>:</b>
	<?php echo CHtml::encode($data->id_Pore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_TroubleType')); ?>:</b>
	<?php echo CHtml::encode($data->id_TroubleType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CirculationLoss')); ?>:</b>
	<?php echo CHtml::encode($data->CirculationLoss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FluidDensity')); ?>:</b>
	<?php echo CHtml::encode($data->FluidDensity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Result')); ?>:</b>
	<?php echo CHtml::encode($data->Result); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_EliminationMethod')); ?>:</b>
	<?php echo CHtml::encode($data->id_EliminationMethod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_InjectionTechnology')); ?>:</b>
	<?php echo CHtml::encode($data->id_InjectionTechnology); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Stratigraphy')); ?>:</b>
	<?php echo CHtml::encode($data->id_Stratigraphy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Arch')); ?>:</b>
	<?php echo CHtml::encode($data->id_Arch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_FluidType')); ?>:</b>
	<?php echo CHtml::encode($data->id_FluidType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Born')); ?>:</b>
	<?php echo CHtml::encode($data->id_Born); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval_ot')); ?>:</b>
	<?php echo CHtml::encode($data->interval_ot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interval_do')); ?>:</b>
	<?php echo CHtml::encode($data->interval_do); ?>
	<br />

	*/ ?>

</div>