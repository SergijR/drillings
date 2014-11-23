<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile")=>array('profile'),
	UserModule::t("Edit"),
);
$this->menu=array(
	 array('label' => 'Меню пользователя'),
	((UserModule::isAdmin()) ? array('label'=>t('Create User'), 'url'=>array('/user/admin/create')):array()),
	 array('label'=>t('List User'), 'url'=>array('/user')),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Users'), 'url'=>array('/user/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Profile Field'), 'url'=>array('/user/profileField/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Create Profile Field'), 'url'=>array('/user/profileField/create')):array()),

	array('label'=>t('Edit'), 'url'=>array('edit'), 'active' => true),
    array('label'=>t('Change password'), 'url'=>array('changepassword')),
    array('label'=>t('Logout'), 'url'=>array('/user/logout')),
    array('label' => 'Настройки'),
    array('label' => 'Profile', 'url' => '#'),
	array('label' => 'Прав пользователей', 'url' => '#'),
	TbHtml::menuDivider(),
	array('label' => 'Помощь', 'url' => '#'),
); 
?><h1><?php echo UserModule::t('Edit profile'); ?></h1>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

	<?php echo $form->errorSummary(array($model,$profile)); ?>

<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<div class="row">
		<?php echo $form->labelEx($profile,$field->varname);
		
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		echo $form->error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		}
?>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
