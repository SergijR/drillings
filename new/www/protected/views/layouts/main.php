<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<?php Yii::app()->bootstrap->register(); ?>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pages.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td class="global"> <!-- ELEMENT -->
<div class="tIndex">
<div class="in-one">
<?php echo CHtml::encode($this->pageTitle); ?>
</div>
<div class="in-two">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'О Проекте', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Вход', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
</div>
</div>

</td>
</tr>
</table>
<div class="container" id="page">


	<div id="topmenu">
	</div><!-- topmenu -->
<!--	<div id="header">
		<div id="logo"><?php// echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
		<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Буровые растворы', 'url'=>array('site/page', 'view'=>'drilling_fluids')),
				array('label'=>'Осложнения', 'url'=>array('site/page', 'view'=>'complication')),
				array('label'=>'Справочники', 'url'=>array('site/page', 'view'=>'manual')),
				array('label'=>'Стратиграфия', 'url'=>array('site/page', 'view'=>'stratigraphy'))
		),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<div id="topmenu">
	<?php
	
	$this->widget('zii.widgets.CMenu',array(
			'items'=> $this->menu,
		)); 
	?>
	</div>
	
	<?php endif?>
        <?php echo $content; ?>


	<div class="clear"></div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <?php echo CHtml::encode($this->pageTitle); ?>.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
	

</div><!-- page -->
<script type="text/javascript">
jQuery(function(){
  jQuery('#sidemenu a').on('click', function(e){
    e.preventDefault();

    if(jQuery(this).hasClass('open')) {
      // do nothing because the link is already open
    } else {
      var oldcontent = jQuery('#sidemenu a.open').attr('href');
      var newcontent = jQuery(this).attr('href');
      
      jQuery(oldcontent).fadeOut('fast', function(){
        jQuery(newcontent).fadeIn().removeClass('hidden');
        jQuery(oldcontent).addClass('hidden');
      });
      
     
      jQuery('#sidemenu a').removeClass('open');
      jQuery(this).addClass('open');
    }
  });
});
</script>
</body>
</html>
