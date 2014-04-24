<?php
/* @var $this EliminationactionsController */
/* @var $model EliminationActions */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Number',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Depth',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'InjectionPressure',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Material',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Note',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_EliminationMethod',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_InjectionTechnology',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ActionsQuantity',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Trouble',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Stratigraphy',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->