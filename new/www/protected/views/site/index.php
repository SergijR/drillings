<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class='about'>
<p>Drilling - база данных и СУБД по буровым расстворам и осложнениям на месторождениях республики Башкортостан</p>
<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
</p>
</div>
<?if (Yii::app()->user->isGuest) {?>
<div class='login'>
<div class="form">
    <?php
	$model = new LoginForm;
	$form = $this->beginWidget('CActiveForm', array(
        'id'=>'auth-form',
        'enableAjaxValidation'=>false,
		'action' => array('/site/login'),
    )); ?>
        
        <?php echo $form->errorSummary($model); ?>
        
        <div class="row">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username') ?>
            <?php echo $form->error($model, 'username') ?>
        </div>
        <div class="row">    
            <?php echo $form->labelEx($model, 'password'); ?>        
            <?php echo $form->textField($model, 'password') ?>
            <?php echo $form->error($model, 'password') ?>
        </div>
        <div class="row buttons">    
            <?php echo CHtml::submitButton('Вход'); ?><br>
        </div>
    <?php $this->endWidget(); ?>
</div>
</div>
<?} else {?>
<div class='login'>
Виджет профилия
</div>
<?}?>