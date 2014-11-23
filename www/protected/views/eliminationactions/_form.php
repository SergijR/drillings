<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'elimination-actions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'number',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'depth',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'injectionpressure',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'material',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'note',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_eliminationmethod',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_injectiontechnology',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'actions_quantity',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_trouble',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_stratigraphy',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->