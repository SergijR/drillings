<?php
/* @var $this UsController */
/* @var $data US */
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