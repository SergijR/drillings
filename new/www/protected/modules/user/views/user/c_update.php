<?php
$this->breadcrumbs=array(
	(t('Users'))=>array('admin'),
	$model->username=>array('view','id'=>$model->id),
	(t('Update')),
);
$this->menu=array(
  ((UserModule::isAdmin()) ? array('label'=>t('Create User'), 'url'=>array('/user/admin/create')):array()),
	 array('label'=>t('List User'), 'url'=>array('/user')),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Users'), 'url'=>array('/user/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Profile Field'), 'url'=>array('/user/profileField/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Create Profile Field'), 'url'=>array('/user/profileField/create')):array()),

);
?>

<h1><?php echo  t('Link User as Client')." ".$model->id; ?></h1>

<?php
	echo $this->renderPartial('c_form', array('model'=>$model,'profile'=>$profile));
?>