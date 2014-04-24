<?php
/* @var $this FluidController */
/* @var $model Fluid */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'fluid-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Date',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Interval',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_FluidType',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Composition',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Density1',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Viscosity1',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Filtration1',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'MudcakeThickness1',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'SSV1',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'SSV10',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'SurfaceTension',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_UBR',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_Square',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_Pore',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Density2',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Viscosity2',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'Filtration2',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'MudcakeThickness2',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_Stratigraphy',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_Arch',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_PoreType',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'ProjectNumber',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'interval1',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'id_Born',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'interval2',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->