<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Manual';
$this->breadcrumbs=array(
	'Manual',
);
$this->menu = array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Поиск', 'url'=>array('/site/page', 'view'=>'search')),
			);

?>

