<?php 
	
$this->pageTitle=Yii::app()->name . ' - '.t("Profile");
	
$this->breadcrumbs=array(
	t("Profile"),
);


$this->menu=array(
	((UserModule::isAdmin()) ? array('label'=>t('Create User'), 'url'=>array('/user/admin/create')):array()),
	 array('label'=>t('List User'), 'url'=>array('/user')),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Users'), 'url'=>array('/user/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Profile Field'), 'url'=>array('/user/profileField/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Create Profile Field'), 'url'=>array('/user/profileField/create')):array()),

//    array('label'=>t('Edit'), 'url'=>array('edit')),
//    array('label'=>t('Change password'), 'url'=>array('changepassword')),
//    array('label'=>t('Logout'), 'url'=>array('/user/logout')),
); 
?><h1><?php echo t('Your profile'); ?></h1>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
	<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>

<table class="detail-view table table-striped table-condensed">
	<tr>
		<th><?php echo CHtml::encode($model->getAttributeLabel('username')); ?></th>
	    <td><?php echo CHtml::encode($model->username); ?></td>
	</tr>
	<?php 
		$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
		if ($profileFields) {
			foreach($profileFields as $field) {
				//echo "<pre>"; print_r($profile); die();
			?>
	<tr>
		<th><?php echo CHtml::encode(UserModule::t($field->title)); ?></th>
    	<td><?php echo (($field->widgetView($profile))?$field->widgetView($profile):CHtml::encode((($field->range)?Profile::range($field->range,$profile->getAttribute($field->varname)):$profile->getAttribute($field->varname)))); ?></td>
	</tr>
			<?php
			}//$profile->getAttribute($field->varname)
		}
	?>
	<tr>
		<th><?php echo CHtml::encode($model->getAttributeLabel('email')); ?></th>
    	<td><?php echo CHtml::encode($model->email); ?></td>
	</tr>
	<tr>
		<th><?php echo CHtml::encode($model->getAttributeLabel('create_at')); ?></th>
    	<td><?php echo $model->create_at; ?></td>
	</tr>
	<!--<tr>
		<th><?php //echo CHtml::encode($model->getAttributeLabel('lastvisit_at')); ?></th>
    	<td><?php// echo $model->lastvisit_at; ?></td>
	</tr>-->
	<tr>
		<th><?php echo CHtml::encode($model->getAttributeLabel('status')); ?></th>
    	<td><?php echo CHtml::encode(User::itemAlias("UserStatus",$model->status)); ?></td>
	</tr>
</table>
