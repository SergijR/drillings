<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->widget('bootstrap.widgets.TbModal', array(
    'id' => 'myModal',
    'header' => 'Drilling - база данных и СУБД по буровым расстворам и осложнениям на месторождениях республики Башкортостан',
    'content' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>',
    'footer' => array(
        TbHtml::button('Закрыть', array('data-dismiss' => 'modal')),
     ),
));

?>

<div id="yw1" class="tabbable">
<ul class="nav nav-tabs" role="menu">
<li class="active" role="menuitem"><a data-toggle="tab" tabindex="-1" href="#tab_1"><i class="icon-user"></i>Arch</a></li>
<li role="menuitem" class=""><a data-toggle="tab" tabindex="-1" href="#tab_2"><i class="icon-user"></i>Born</a></li></ul>
<div class="tab-content">
<div id="tab_1" class="tab-pane fade active in">
<?php 
	$this->renderPartial('/arch/index_home', array(
        'model' => $arch, 
        ));
?>
</div>
<div id="tab_2" class="tab-pane fade"><?php 
	$this->renderPartial('/born/index_home', array(
        'model' => $born, 
        ));/*добавить метод в диплом*/
?></div></div></div>

<?php 
/*
 $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'fluid-type-grid',
	'dataProvider'=>$gridDataProvider,
	'filter'=>$FluidType,
	'columns'=>array(
		'id',
		'Name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); */?>
</div>

