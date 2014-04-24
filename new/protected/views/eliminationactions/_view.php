<?php
/* @var $this EliminationactionsController */
/* @var $data EliminationActions */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Number')); ?>:</b>
	<?php echo CHtml::encode($data->Number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Depth')); ?>:</b>
	<?php echo CHtml::encode($data->Depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InjectionPressure')); ?>:</b>
	<?php echo CHtml::encode($data->InjectionPressure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Material')); ?>:</b>
	<?php echo CHtml::encode($data->Material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Note')); ?>:</b>
	<?php echo CHtml::encode($data->Note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_EliminationMethod')); ?>:</b>
	<?php echo CHtml::encode($data->id_EliminationMethod); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_InjectionTechnology')); ?>:</b>
	<?php echo CHtml::encode($data->id_InjectionTechnology); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ActionsQuantity')); ?>:</b>
	<?php echo CHtml::encode($data->ActionsQuantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Trouble')); ?>:</b>
	<?php echo CHtml::encode($data->id_Trouble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Stratigraphy')); ?>:</b>
	<?php echo CHtml::encode($data->id_Stratigraphy); ?>
	<br />

	*/ ?>

</div>