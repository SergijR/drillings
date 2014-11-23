<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
));
?>

	<p class="note"><?php echo t('Fields with <span class="required">*</span> are required.'); ?></p>

	<?php echo $form->errorSummary(array($model,$profile)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20,'readonly'=>'readonly')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128,'readonly'=>'readonly')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

<?php 
		$profileFields=Profile::getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<div class="row">
		<?php echo $form->labelEx($profile,$field->varname); ?>
		<?php 
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo CHtml::activeTextArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255),'readonly'=>'readonly'));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>
	</div>
			<?php
			}
		}
?>	

	<div class="row">
		<?php echo $form->labelEx($model,'clt_id'); ?>
	<?php 
		echo get_dropdown_relation($form, $model,'client', 'clt_name'); //$form->dropDownList($model,$pk ,CHtml::listData(SprTypeClient::model()->findAll(), $pk, $field)); ?>			
		<?php
		echo '<div class="add_new">'.CHtml::link( t('Add new'), array( '/clients/create' ),
		array('class' => 'modal-dialog-open-link','data-modal-dialog-title' => t('Create Client' ),)).'</div>';
		?>
	<?php echo $form->error($model,'clt_id'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? t('Create') : t('Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->