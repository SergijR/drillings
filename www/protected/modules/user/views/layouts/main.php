<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">
			<a href="" title="<?php echo CHtml::encode(Yii::app()->name); ?>">
				<img src="/images/logo_50.png" alt="<?php echo CHtml::encode(Yii::app()->name); ?>" title="<?php echo CHtml::encode(Yii::app()->name); ?>">
			</a>
		</div>
		
		<div id="mainmenu" class="">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>t('Home'), 'url'=>array('/site/index')),
			//	array('label'=>'About', 'url'=>array('site/page', 'view'=>'about')),
				array('label'=>t('Contact'), 'url'=>array('/site/contact')),
			//	array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
			//	array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		</div><!-- mainmenu -->
		
		
		<div id="lang">
		<? Yii::app()->ltswitch->renderLanguageDropDown(); ?>
		</div>
		
		<div id="user_menu">
		<?
		$this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
			array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
			array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
			array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
		array(
		    'url' => Yii::app()->getModule('message')->inboxUrl,
		    'label' => 'Messages' .
			(Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) ?
			    ' (' . Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) . ')' : ''),
		    'visible' => !Yii::app()->user->isGuest),
		
		)
		));
		?>
		</div>
		
		
	</div><!-- header -->

	

	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>