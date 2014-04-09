<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */
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
		<?php echo $form->label($model,'Number'); ?>
		<?php echo $form->textField($model,'Number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Depth'); ?>
		<?php echo $form->textField($model,'Depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'InjectionPressure'); ?>
		<?php echo $form->textField($model,'InjectionPressure'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Material'); ?>
		<?php echo $form->textField($model,'Material'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Note'); ?>
		<?php echo $form->textField($model,'Note'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_EliminationMethod'); ?>
		<?php echo $form->textField($model,'id_EliminationMethod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_InjectionTechnology'); ?>
		<?php echo $form->textField($model,'id_InjectionTechnology'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ActionsQuantity'); ?>
		<?php echo $form->textField($model,'ActionsQuantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Trouble'); ?>
		<?php echo $form->textField($model,'id_Trouble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Stratigraphy'); ?>
		<?php echo $form->textField($model,'id_Stratigraphy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->