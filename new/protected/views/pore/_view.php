<?php
/* @var $this PoreController */
/* @var $data Pore */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('No')); ?>:</b>
	<?php echo CHtml::encode($data->No); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Construction')); ?>:</b>
	<?php echo CHtml::encode($data->Construction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Square')); ?>:</b>
	<?php echo CHtml::encode($data->id_Square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bottomhole')); ?>:</b>
	<?php echo CHtml::encode($data->Bottomhole); ?>
	<br />


</div>