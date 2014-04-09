<?php
/* @var $this EliminationactionsController */
/* @var $model Eliminationactions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eliminationactions-form',
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
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'depth'); ?>
		<?php echo $form->textField($model,'depth'); ?>
		<?php echo $form->error($model,'depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'injectionpressure'); ?>
		<?php echo $form->textField($model,'injectionpressure',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'injectionpressure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_eliminationmethod'); ?>
		<?php echo $form->textField($model,'id_eliminationmethod'); ?>
		<?php echo $form->error($model,'id_eliminationmethod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_injectiontechnology'); ?>
		<?php echo $form->textField($model,'id_injectiontechnology'); ?>
		<?php echo $form->error($model,'id_injectiontechnology'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actionsquantity'); ?>
		<?php echo $form->textField($model,'actionsquantity'); ?>
		<?php echo $form->error($model,'actionsquantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_trouble'); ?>
		<?php echo $form->textField($model,'id_trouble'); ?>
		<?php echo $form->error($model,'id_trouble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_stratigraphy'); ?>
		<?php echo $form->textField($model,'id_stratigraphy'); ?>
		<?php echo $form->error($model,'id_stratigraphy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->