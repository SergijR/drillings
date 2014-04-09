<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
$this->menu = array(
				array('label'=>'Таблица растворов', 'url'=>array('/site/index')),
				array('label'=>'Поиск', 'url'=>array('/site/page', 'view'=>'search')),
			);

?>
<div id="left" style="
    float: left;
    width: 300px;
">
<?php $this->widget('application.components.SiteSearch'); ?>
</div>
<div id="conteent" style="
    float: left;
	height: 150px;
    width: 70%;
	border-left: 3px solid #c4c4c4;
">
<div style="padding:5px 10px;">
База Данных пуста.
</div>
</div>
