<?php
/**
 * overwrite.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * The ovewrite installation warning view.
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem.install
 * @since 1.0.0
 */
 ?>
<h3><?php echo t('Install Srbac')?></h3>
<div class="srbac">
  <?php echo SHtml::beginForm(); ?>
  <div>
    <?php echo t('Srbac is already Installed.<br />Overwrite it?<br />'); ?>
  </div>
  <div>
    <?php echo SHtml::hiddenField("action", "Overwrite"); ?>
    <?php echo SHtml::hiddenField("demo", $demo); ?>
    <?php echo SHtml::submitButton(t('Overwrite')); ?>
  </div>
  <?php echo SHtml::endForm(); ?>
</div>