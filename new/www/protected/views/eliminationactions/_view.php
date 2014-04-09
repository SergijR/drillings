<?php
/* @var $this EliminationactionsController */
/* @var $data Eliminationactions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depth')); ?>:</b>
	<?php echo CHtml::encode($data->depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('injectionpressure')); ?>:</b>
	<?php echo CHtml::encode($data->injectionpressure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material')); ?>:</b>
	<?php echo CHtml::encode($data->material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_eliminationmethod')); ?>:</b>
	<?php echo CHtml::encode($data->id_eliminationmethod); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_injectiontechnology')); ?>:</b>
	<?php echo CHtml::encode($data->id_injectiontechnology); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actionsquantity')); ?>:</b>
	<?php echo CHtml::encode($data->actionsquantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_trouble')); ?>:</b>
	<?php echo CHtml::encode($data->id_trouble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_stratigraphy')); ?>:</b>
	<?php echo CHtml::encode($data->id_stratigraphy); ?>
	<br />

	*/ ?>

</div>