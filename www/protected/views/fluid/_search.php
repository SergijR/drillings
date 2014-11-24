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

                    <?php echo $form->textFieldControlGroup($model,'date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'interval',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_fluidtype',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'composition',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'density1',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'viscosity1',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'filtration1',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'mudcakethickness1',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ssv1',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ssv10',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'surfacetension',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_ubr',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_square',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_pore',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'density2',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'viscosity2',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'filtration2',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'mudcakethickness2',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_stratigraphy',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_arch',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_poretype',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'project_number',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'interval1',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_born',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'interval2',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->