<?php
/* @var $this FluidController */
/* @var $model Fluid */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fluid-form',
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
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Interval'); ?>
		<?php echo $form->textField($model,'Interval'); ?>
		<?php echo $form->error($model,'Interval'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_FluidType'); ?>
		<?php echo $form->textField($model,'id_FluidType'); ?>
		<?php echo $form->error($model,'id_FluidType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Composition'); ?>
		<?php echo $form->textField($model,'Composition'); ?>
		<?php echo $form->error($model,'Composition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Density1'); ?>
		<?php echo $form->textField($model,'Density1'); ?>
		<?php echo $form->error($model,'Density1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Viscosity1'); ?>
		<?php echo $form->textField($model,'Viscosity1'); ?>
		<?php echo $form->error($model,'Viscosity1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Filtration1'); ?>
		<?php echo $form->textField($model,'Filtration1'); ?>
		<?php echo $form->error($model,'Filtration1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MudcakeThickness1'); ?>
		<?php echo $form->textField($model,'MudcakeThickness1'); ?>
		<?php echo $form->error($model,'MudcakeThickness1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SSV1'); ?>
		<?php echo $form->textField($model,'SSV1'); ?>
		<?php echo $form->error($model,'SSV1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SSV10'); ?>
		<?php echo $form->textField($model,'SSV10'); ?>
		<?php echo $form->error($model,'SSV10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SurfaceTension'); ?>
		<?php echo $form->textField($model,'SurfaceTension'); ?>
		<?php echo $form->error($model,'SurfaceTension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_UBR'); ?>
		<?php echo $form->textField($model,'id_UBR'); ?>
		<?php echo $form->error($model,'id_UBR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Square'); ?>
		<?php echo $form->textField($model,'id_Square'); ?>
		<?php echo $form->error($model,'id_Square'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Pore'); ?>
		<?php echo $form->textField($model,'id_Pore'); ?>
		<?php echo $form->error($model,'id_Pore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Density2'); ?>
		<?php echo $form->textField($model,'Density2'); ?>
		<?php echo $form->error($model,'Density2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Viscosity2'); ?>
		<?php echo $form->textField($model,'Viscosity2'); ?>
		<?php echo $form->error($model,'Viscosity2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Filtration2'); ?>
		<?php echo $form->textField($model,'Filtration2'); ?>
		<?php echo $form->error($model,'Filtration2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MudcakeThickness2'); ?>
		<?php echo $form->textField($model,'MudcakeThickness2'); ?>
		<?php echo $form->error($model,'MudcakeThickness2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Stratigraphy'); ?>
		<?php echo $form->textField($model,'id_Stratigraphy'); ?>
		<?php echo $form->error($model,'id_Stratigraphy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Arch'); ?>
		<?php echo $form->textField($model,'id_Arch'); ?>
		<?php echo $form->error($model,'id_Arch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_PoreType'); ?>
		<?php echo $form->textField($model,'id_PoreType'); ?>
		<?php echo $form->error($model,'id_PoreType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProjectNumber'); ?>
		<?php echo $form->textField($model,'ProjectNumber'); ?>
		<?php echo $form->error($model,'ProjectNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interval1'); ?>
		<?php echo $form->textField($model,'interval1'); ?>
		<?php echo $form->error($model,'interval1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Born'); ?>
		<?php echo $form->textField($model,'id_Born'); ?>
		<?php echo $form->error($model,'id_Born'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interval2'); ?>
		<?php echo $form->textField($model,'interval2'); ?>
		<?php echo $form->error($model,'interval2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->