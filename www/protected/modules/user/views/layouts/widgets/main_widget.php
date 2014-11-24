
<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

<?php // $this->widget('TagCloud', array('maxTags'=>Yii::app()->params['tagCloudCount'],)); ?>

<?php //$this->widget('RecentComments', array('maxComments'=>Yii::app()->params['recentCommentCount'],)); ?>

<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Operations',
	));
	$this->widget('zii.widgets.CMenu', array(
	'items'=>$this->menu,
	'htmlOptions'=>array('class'=>'operations'),
	));
	$this->endWidget();
?>


<?php
	$this->widget('ext.appy_accordion.ButtonAccordianWidget', array(
	//'class'=>'list1 pad_bot1',
	'tabs'=>array(
	'test_tab1'=>'test_value1',
	'test_tab2'=>'test_value2',
	'test_tab3'=>'test_value3',
	//   'page'=>$this->renderPartial('about',null,true)
	)
	));
	
?>
