

<?
	//всплывающий сайдбар	
	if(!Yii::app()->user->isGuest) { 
	
	$this->beginWidget('application.extensions.rightsidebar.RightSidebar', array('title' => t('Advanced menu'), 'collapsed' => true));
	
	
	
	
	$roles = '
	<ul class="slider_menu">
		<li><a href="/index.php?r=srbac/authitem/frontpage" title="'.t('Main Page').'">'.t('Main Page').'</a></li>
		<li><a href="/index.php?r=srbac/authitem/manage" title="'.t('Managing auth items').'">'.t('Managing auth items').'</a></li>
		<li><a href="/index.php?r=srbac/authitem/assign" title="'.t('Assign to users').'">'.t('Assign to users').'</a></li>
		<li><a href="/index.php?r=srbac/authitem/assignments" title="'.t('User`s assignments').'">'.t('User`s assignments').'</a></li>
	</ul>
	
	';
	
	if(!Yii::app()->user->isGuest) {
	ob_start();

	//	$this->widget('UserMenu');
	//	$user_menu = ob_get_contents();
	
	ob_end_clean() ;
	}
	
	
	if(!Yii::app()->user->isGuest) {
		
	$user_menu = 	'
	<ul class="slider_menu">
		<li><a href="'.Yii::app()->getModule('user')->profileUrl.'" title="'.t("Profile").'">'.t("Profile").'</a></li>
		
		<li><a href="'.Yii::app()->getModule('message')->inboxUrl.'" title="'.t('Messages').'">'.t('Messages').
		(Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) ?
			    ' (' . Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) . ')' : '').'</a></li>
		<li><a href="'.Yii::app()->getModule('user')->logoutUrl.'" title="'.t("Logout").'">'.t("Logout").'</a></li>
	</ul>
	
	';
	}
	
	if(!Yii::app()->user->isGuest) {
		ob_start();

		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
			));
		$user_manage_menu = ob_get_contents();
	
		ob_end_clean() ;
	}
	
	
	
	
	
	
	
	$this->widget('ext.appy_accordion.ButtonAccordianWidget', array(
	//'class'=>'list1 pad_bot1',
	'tabs'=>array(
	t('User Menu')=>$user_menu,
	t('Users Manage')	=>$user_manage_menu,
	t('Roles')=>$roles,
	
	//   'page'=>$this->renderPartial('about',null,true)
	)
	));
	
	
	
	
	$this->endWidget();
	
	}
?>
