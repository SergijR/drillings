<?php
/* @var $this StratigraphyController */
/* @var $data Stratigraphy */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Index')); ?>:</b>
	<?php echo CHtml::encode($data->Index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Stratigraphy')); ?>:</b>
	<?php echo CHtml::encode($data->id_Stratigraphy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Level')); ?>:</b>
	<?php echo CHtml::encode($data->id_Level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>