<?php
/* @var $this PoreController */
/* @var $model Pore */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'No',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Construction',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_Square',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'Bottomhole',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->