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
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->