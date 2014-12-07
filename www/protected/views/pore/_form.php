<?php
/* @var $this PoreController */
/* @var $model Pore */
/* @var $form TbActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('ext.yii-easyui.widgets.EuiForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>		

    <?php //echo $form->errorSummary($model); ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->

