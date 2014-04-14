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
<div class="well"><h3>Добро пожаловать <?php echo Yii::app()->user->name; ?></h3>

<?php 
$FluidType = FluidType::model()->findAll();
?>
<?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs', // 'tabs' or 'pills'
    'tabs'=>array(
        array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.', 'active'=>true),
        array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
    ),
)); 
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

