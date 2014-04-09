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
<p><a href='' data-toggle="modal" data-target="#myModal" >Узнать подробнее о проекте</a></p>
</div>

