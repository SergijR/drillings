<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'elimination-actions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Number'); ?>
		<?php echo $form->textField($model,'Number'); ?>
		<?php echo $form->error($model,'Number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Depth'); ?>
		<?php echo $form->textField($model,'Depth'); ?>
		<?php echo $form->error($model,'Depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'InjectionPressure'); ?>
		<?php echo $form->textField($model,'InjectionPressure'); ?>
		<?php echo $form->error($model,'InjectionPressure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Material'); ?>
		<?php echo $form->textField($model,'Material'); ?>
		<?php echo $form->error($model,'Material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Note'); ?>
		<?php echo $form->textField($model,'Note'); ?>
		<?php echo $form->error($model,'Note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_EliminationMethod'); ?>
		<?php echo $form->textField($model,'id_EliminationMethod'); ?>
		<?php echo $form->error($model,'id_EliminationMethod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_InjectionTechnology'); ?>
		<?php echo $form->textField($model,'id_InjectionTechnology'); ?>
		<?php echo $form->error($model,'id_InjectionTechnology'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ActionsQuantity'); ?>
		<?php echo $form->textField($model,'ActionsQuantity'); ?>
		<?php echo $form->error($model,'ActionsQuantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Trouble'); ?>
		<?php echo $form->textField($model,'id_Trouble'); ?>
		<?php echo $form->error($model,'id_Trouble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Stratigraphy'); ?>
		<?php echo $form->textField($model,'id_Stratigraphy'); ?>
		<?php echo $form->error($model,'id_Stratigraphy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->