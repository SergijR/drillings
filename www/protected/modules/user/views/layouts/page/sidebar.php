<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="fullwidth">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	
	
	
	<!-- <div class="span-6 last">
		<div id="sidebar"> -->
			<?php //  $this->renderPartial('//layouts/widgets/main_widget'); ?>
			<?php  $this->renderPartial('//layouts/widgets/slide_widget'); ?>
	<!--	</div>
	</div> -->
	
	
	
	
	
	
	
</div>
<?php $this->endContent(); ?>