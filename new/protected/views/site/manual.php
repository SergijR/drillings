<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Справочники';
$this->breadcrumbs=array(
	'Справочники',
);
?>

<div id="yw1" class="tabbable">
<ul class="nav nav-tabs" role="menu">
<li class="active" role="menuitem"><a data-toggle="tab" tabindex="-1" href="#tab_1"><i class="icon-user"></i>Зоны</a></li>
<li role="menuitem" class=""><a data-toggle="tab" tabindex="-1" href="#tab_2"><i class="icon-user"></i>УБР</a></li>
<li role="menuitem" class=""><a data-toggle="tab" tabindex="-1" href="#tab_3"><i class="icon-user"></i>Площадь</a></li>
<li role="menuitem" class=""><a data-toggle="tab" tabindex="-1" href="#tab_4"><i class="icon-user"></i>Скважина</a></li>
<li role="menuitem" class=""><a data-toggle="tab" tabindex="-1" href="#tab_5"><i class="icon-user"></i>Тип осложнения</a></li>
<li role="menuitem" class=""><a data-toggle="tab" tabindex="-1" href="#tab_6"><i class="icon-user"></i>Тип раствора</a></li>
<li role="menuitem" class=""><a data-toggle="tab" tabindex="-1" href="#tab_7"><i class="icon-user"></i>Конструкция скважин</a></li>
</ul>

<div class="tab-content">
<div id="tab_1" class="tab-pane fade active in">
<?php
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'arch-grid',
	'dataProvider'=>$dataProviderArch,
	'filter'=>$archs,
	'columns'=>array(
		'Name',
	),
));
?>
</div>
<div id="tab_2" class="tab-pane fade"><?php 
	$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ubr-grid',
	'dataProvider'=>$dataProviderUBR,
	'filter'=>$ubrs,
	'columns'=>array(
		'Name',
	),
));
?></div>
<div id="tab_3" class="tab-pane fade"><?php 
		$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ubr-grid',
	'dataProvider'=>$dataProviderUBR,
	'filter'=>$ubrs,
	'columns'=>array(
		'Name',
	),
));
?></div>
<div id="tab_4" class="tab-pane fade"><?php 
		$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ubr-grid',
	'dataProvider'=>$dataProviderUBR,
	'filter'=>$ubrs,
	'columns'=>array(
		'Name',
	),
));
?></div>
<div id="tab_5" class="tab-pane fade"><?php 
		$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ubr-grid',
	'dataProvider'=>$dataProviderUBR,
	'filter'=>$ubrs,
	'columns'=>array(
		'Name',
	),
));
?></div>
<div id="tab_6" class="tab-pane fade"><?php 
		$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ubr-grid',
	'dataProvider'=>$dataProviderUBR,
	'filter'=>$ubrs,
	'columns'=>array(
		'Name',
	),
));
?></div>
<div id="tab_7" class="tab-pane fade"><?php 
		$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'ubr-grid',
	'dataProvider'=>$dataProviderUBR,
	'filter'=>$ubrs,
	'columns'=>array(
		'Name',
	),
));
?></div>

</div></div>
</div>




