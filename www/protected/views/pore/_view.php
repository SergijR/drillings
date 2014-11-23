<?php
/* @var $this PoreController */
/* @var $data Pore */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no')); ?>:</b>
	<?php echo CHtml::encode($data->no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('construction')); ?>:</b>
	<?php echo CHtml::encode($data->construction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_square')); ?>:</b>
	<?php echo CHtml::encode($data->id_square); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bottomhole')); ?>:</b>
	<?php echo CHtml::encode($data->bottomhole); ?>
	<br />


</div>