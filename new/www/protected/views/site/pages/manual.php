<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Manual';
$this->breadcrumbs=array(
	'Manual',
);
/*$this->menu = array(
				array('label'=>'Главная', 'url'=>array('/site/index')),
				array('label'=>'Gjbcr', 'url'=>array('/site/page', 'view'=>'about')),
			);*/

?>
<?php if(Yii::app()->user->isGuest) {
Yii::app()->user->loginRequired();

} else {?>
<?php $this->widget('UserMenu'); ?>

<div id="cont">
        <div id="zone-content" class="contentblock">
 		<?php $Arch = new Arch; ?>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'arch-grid',
			'dataProvider'=>$Arch->search(),
			'filter'=>$Arch,
			'columns'=>array(
				'id',
				'dkey',
				'name',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>
        </div><!-- @end #home-content -->
        
        
        <div id="ybr-content" class="contentblock hidden">

		<?php $Born = new Born; ?>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'born-grid',
			'dataProvider'=>$Born->search(),
			'filter'=>$Born,
			'columns'=>array(
				'id',
				'dkey',
				'name',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>
        </div><!-- @end #about-content -->
        
        <div id="square-content" class="contentblock hidden">
          <h1>Boilerplate Ideas</h1>
        </div><!-- @end #ideas-content -->
        
        <div id="bore-content" class="contentblock hidden">
          <h1>Contact Info</h1>
        </div><!-- @end #contact-content -->
		
		<div id="type-complication-content" class="contentblock hidden">
          <h1>Boilerplate Ideas</h1>
        </div><!-- @end #ideas-content -->
        
        <div id="type-solution-content" class="contentblock hidden">
          <h1>Contact Info</h1>
        </div><!-- @end #contact-content -->
		
		<div id="well-design-content" class="contentblock hidden">
          <h1>Boilerplate Ideas</h1>
        </div><!-- @end #ideas-content -->

    </div><!-- @end #content -->

<?php } ?>