<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change Password"),
);
$this->menu=array(
	 array('label' => 'Меню пользователя'),
	((UserModule::isAdmin()) ? array('label'=>t('Create User'), 'url'=>array('/user/admin/create')):array()),
	 array('label'=>t('List User'), 'url'=>array('/user')),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Users'), 'url'=>array('/user/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Profile Field'), 'url'=>array('/user/profileField/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Create Profile Field'), 'url'=>array('/user/profileField/create')):array()),

	array('label'=>t('Edit'), 'url'=>array('edit')),
    array('label'=>t('Change password'), 'url'=>array('changepassword'), 'active' => true),
    array('label'=>t('Logout'), 'url'=>array('/user/logout')),
    array('label' => 'Настройки'),
    array('label' => 'Profile', 'url' => '#'),
	array('label' => 'Прав пользователей', 'url' => '#'),
	TbHtml::menuDivider(),
	array('label' => 'Помощь', 'url' => '#'),
); 
?>

<h1><?php echo UserModule::t("Change password"); ?></h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
	<?php echo $form->labelEx($model,'oldPassword'); ?>
	<?php echo $form->passwordField($model,'oldPassword'); ?>
	<?php echo $form->error($model,'oldPassword'); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'verifyPassword'); ?>
	<?php echo $form->passwordField($model,'verifyPassword'); ?>
	<?php echo $form->error($model,'verifyPassword'); ?>
	</div>
	
	
	<div class="row submit">
	<?php echo CHtml::submitButton(UserModule::t("Save")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->