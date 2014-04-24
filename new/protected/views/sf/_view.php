<?php
/* @var $this SfController */
/* @var $data SF */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id1')); ?>:</b>
	<?php echo CHtml::encode($data->id1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id2')); ?>:</b>
	<?php echo CHtml::encode($data->id2); ?>
	<br />


</div>