<?php
/* @var $this TroubleController */
/* @var $model Trouble */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Activity',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Method',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Time',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'EliminationDate',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Square',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Interval',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Rock',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_UBR',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Units1',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Units2',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Pore',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_TroubleType',array('span'=>5)); ?>

                    <?php echo $form->checkBoxControlGroup($model,'CirculationLoss'); ?>

                    <?php echo $form->textFieldControlGroup($model,'FluidDensity',array('span'=>5)); ?>

                    <?php echo $form->checkBoxControlGroup($model,'Result'); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_EliminationMethod',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_InjectionTechnology',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Stratigraphy',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Arch',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_FluidType',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Born',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'interval_ot',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'interval_do',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->