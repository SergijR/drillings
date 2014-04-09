<?php
/* @var $this EliminationactionsController */
/* @var $model Eliminationactions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depth'); ?>
		<?php echo $form->textField($model,'depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'injectionpressure'); ?>
		<?php echo $form->textField($model,'injectionpressure',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_eliminationmethod'); ?>
		<?php echo $form->textField($model,'id_eliminationmethod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_injectiontechnology'); ?>
		<?php echo $form->textField($model,'id_injectiontechnology'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actionsquantity'); ?>
		<?php echo $form->textField($model,'actionsquantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_trouble'); ?>
		<?php echo $form->textField($model,'id_trouble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_stratigraphy'); ?>
		<?php echo $form->textField($model,'id_stratigraphy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->