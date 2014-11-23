<?php
/* @var $this SquareController */
/* @var $data Square */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Arch')); ?>:</b>
	<?php echo CHtml::encode($data->id_Arch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Born')); ?>:</b>
	<?php echo CHtml::encode($data->id_Born); ?>
	<br />


</div>