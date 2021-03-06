<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<?php Yii::app()->bootstrap->register(); ?>
	<?
$assets = Yii::app()->request->baseUrl.'/assets/';
echo CHtml::scriptFile($assets . '/easyui/jquery.easyui.min.js');
echo CHtml::cssFile($assets . '/easyui/themes/default/easyui.css'); 
echo CHtml::cssFile($assets . '/easyui/themes/icon.css'); 
?>
<script type="text/javascript" src="http://www.jeasyui.com/easyui/datagrid-detailview.js"></script>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />



</head>

<body>
<div class="container-fluid" id="page">
<?php if(!(Yii::app()->user->isGuest)) {?>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => '<a href="/" class="brand"><img src="/images/logo.png"></a>',
	'collapse' => true,
    'items' => array(
	array(
            'class' => 'bootstrap.widgets.TbNav',
			'htmlOptions'=>array('class'=>'pull-left'),
			'items'=>array(
				array('label' => 'Буровые растворы', 'url' => '/index.php?r=pore'),
                array('label' => 'Осложнения', 'url' => '#'),
                array('label' => 'Справочники', 'url' => '/index.php?r=site/manual'),
			),
        ),
	array(
            'class' => 'bootstrap.widgets.TbNav',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Вход"), 'visible'=>Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Регистрация"), 'visible'=>Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Профиль"), 'visible'=>!Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Выход").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
				'<li role="menuitem"><a href="" data-toggle="modal" data-target="#myModal">О Проекте</a></li>'
			),
        ),
	),
)); ?>

<?php } ?>
<div class="row-fluid" style="margin-top: 85px;">
	<?php echo $content; ?>
</div>
	<div class="clear"></div>
<?php if(!(Yii::app()->user->isGuest)) {?>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <?php echo CHtml::encode($this->pageTitle); ?>.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
<?php } ?>	

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
