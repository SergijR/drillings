<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span2 last">
<div class="sidebar">
<div class="well" style="max-width: 340px; padding: 8px 0;">


    <?php

	$this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_LIST,
	'items'=>$this->menu,
));
?>
</div>
</div>
	
</div>
<div class="span10">

	<div class='panel'>
	
	</div>
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>