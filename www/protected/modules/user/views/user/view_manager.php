<?php
$this->layout = '//layouts/page/sidebar';	
$this->breadcrumbs=array(
	t('Users')=>array('index'),
	$model->username,
);

$this->menu=array(
    ((UserModule::isAdmin()) ? array('label'=>t('Create User'), 'url'=>array('/user/admin/create')):array()),
	 array('label'=>t('List User'), 'url'=>array('/user')),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Users'), 'url'=>array('/user/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Manage Profile Field'), 'url'=>array('/user/profileField/admin')):array()),
	((UserModule::isAdmin()) ? array('label'=>t('Create Profile Field'), 'url'=>array('/user/profileField/create')):array()),

);
?>
<h1><?php echo t('Personal manager data');//.' "'.$model->fullname.'"'; ?></h1>
<?php 

// For all users
	$attributes = array(
			array(
					'name'=>'fullname',
					'label' => t('Full name'),
			),
			array(
					'name'=>'email',
					'label' => t('email'),
			),
	);
	
	$profileFields=ProfileField::model()->forUser()->sort()->findAll();
	if ($profileFields) {
		foreach($profileFields as $field) {
		
		if ($field->varname=='company' ||
			$field->varname=='firstname' ||
			$field->varname=='lastname' ) continue;
		
			array_push($attributes,array(
					'label' => t($field->title),
					'name' => $field->varname,
					'value' => (($field->widgetView($model->profile))?$field->widgetView($model->profile):(($field->range)?Profile::range($field->range,$model->profile->getAttribute($field->varname)):$model->profile->getAttribute($field->varname))),

				));
		}
	}
	/*array_push($attributes,
		'create_at',
		array(
			'name' => 'lastvisit_at',
			'value' => (($model->lastvisit_at!='0000-00-00 00:00:00')?$model->lastvisit_at:t('Not visited')),
		)
	); */
			
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>$attributes,
	));
	
	
	echo '<a href="/index.php?r=message/compose&id='.$model->id.'" title="">'.t('Write message to manager').'</a>';
?>
