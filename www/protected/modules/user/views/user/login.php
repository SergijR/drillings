<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>
<div style="margin: 0 auto;width: 250px;">
<div class="form">
<a href="/" class="brand"><img src="/images/logo.png"></a>
<?php echo CHtml::beginForm(); ?>
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="_row">
		<?php echo CHtml::activeLabelEx($model,t('username')); ?>
		<?php echo CHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="_row">
		<?php echo CHtml::activeLabelEx($model,t('password')); ?>
		<?php echo CHtml::activePasswordField($model,'password') ?>
	</div>
	
	<div class="_row">
		<p class="hint" style="
    float: left;
">
		<?php echo CHtml::link(t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
		</p>
		<p class="rememberMe" style="
    float: left;
">
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo CHtml::activeLabelEx($model,t('rememberMe')); ?>
	</p>
	</div>
	<div class="_row submit">
		<?php echo CHtml::submitButton(t("Login")); ?>
	</div>
	
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
</div>

<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>