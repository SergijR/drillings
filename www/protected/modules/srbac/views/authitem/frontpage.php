<?php
/**
 * frontpage.php
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @link http://code.google.com/p/srbac/
 */

/**
 * Srbac main administration page
 *
 * @author Spyros Soldatos <spyros@valor.gr>
 * @package srbac.views.authitem
 * @since 1.0.2
 */
 ?>
<div class="marginBottom">
  <div class="iconSet">
    <div class="iconBox">
    <?php echo SHtml::link(
            SHtml::image($this->module->getIconsPath().'/manageAuth.png',
                    t('Managing auth items'),
                    array('class'=>'icon',
                      'title'=>t('Managing auth items'),
                      'border'=>0
                      )
                )." " .
                ($this->module->iconText ?
                t('Managing auth items') :
                ""),
            array('authitem/manage'))
    ?>
    </div>
    <div class="iconBox">
    <?php echo SHtml::link(
            SHtml::image($this->module->getIconsPath().'/usersAssign.png',
                    t('Assign to users'),
                    array('class'=>'icon',
                      'title'=>t('Assign to users'),
                      'border'=>0,
                      )
                )." " .
                ($this->module->iconText ?
                t('Assign to users') :
                ""),
            array('authitem/assign'));?>
    </div>
    <div class="iconBox">
    <?php echo SHtml::link(
            SHtml::image($this->module->getIconsPath().'/users.png',
                    t('User\'s assignments'),
                    array('class'=>'icon',
                      'title'=>t('User\'s assignments'),
                      'border'=>0
                      )
                )." " .
                ($this->module->iconText ?
                t('User\'s assignments') :
                ""),
            array('authitem/assignments'));?>
    </div>
  </div> 
    <div class="reset"></div>
</div>