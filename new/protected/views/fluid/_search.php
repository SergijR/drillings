<?php
/* @var $this FluidController */
/* @var $model Fluid */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

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
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->