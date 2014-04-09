<?php
/* @var $this FluidController */
/* @var $model Fluid */
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
		<?php echo $form->label($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Interval'); ?>
		<?php echo $form->textField($model,'Interval'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_FluidType'); ?>
		<?php echo $form->textField($model,'id_FluidType'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Composition'); ?>
		<?php echo $form->textField($model,'Composition'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Density1'); ?>
		<?php echo $form->textField($model,'Density1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Viscosity1'); ?>
		<?php echo $form->textField($model,'Viscosity1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Filtration1'); ?>
		<?php echo $form->textField($model,'Filtration1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MudcakeThickness1'); ?>
		<?php echo $form->textField($model,'MudcakeThickness1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SSV1'); ?>
		<?php echo $form->textField($model,'SSV1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SSV10'); ?>
		<?php echo $form->textField($model,'SSV10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SurfaceTension'); ?>
		<?php echo $form->textField($model,'SurfaceTension'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_UBR'); ?>
		<?php echo $form->textField($model,'id_UBR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Square'); ?>
		<?php echo $form->textField($model,'id_Square'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Pore'); ?>
		<?php echo $form->textField($model,'id_Pore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Density2'); ?>
		<?php echo $form->textField($model,'Density2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Viscosity2'); ?>
		<?php echo $form->textField($model,'Viscosity2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Filtration2'); ?>
		<?php echo $form->textField($model,'Filtration2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MudcakeThickness2'); ?>
		<?php echo $form->textField($model,'MudcakeThickness2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Stratigraphy'); ?>
		<?php echo $form->textField($model,'id_Stratigraphy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Arch'); ?>
		<?php echo $form->textField($model,'id_Arch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_PoreType'); ?>
		<?php echo $form->textField($model,'id_PoreType'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProjectNumber'); ?>
		<?php echo $form->textField($model,'ProjectNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interval1'); ?>
		<?php echo $form->textField($model,'interval1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_Born'); ?>
		<?php echo $form->textField($model,'id_Born'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interval2'); ?>
		<?php echo $form->textField($model,'interval2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->