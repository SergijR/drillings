<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span2 last">
	<?php
	/*	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>t('Operations'),
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-list', 'id' => 'yw2'),
		));
		$this->endWidget();
*/
		$this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_LIST,
    'items' => $this->menu
	
	/*array(
        array('label' => 'List header'),
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Library', 'url' => '#'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Another list header'),
        array('label' => 'Profile', 'url' => '#'),
        array('label' => 'Settings', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Help', 'url' => '#'),
    )*/
));
		
		$this->widget('application.extensions.MTreeView.MTreeView',array(
        'collapsed'=>true,
        'animated'=>'fast',
        //---MTreeView options from here
        'table'=>'Level',//what table the menu would come from
        'hierModel'=>'Name',//hierarchy model of the table
        'conditions'=>array('visible=:visible',array(':visible'=>1)),//other conditions if any                                    
        'fields'=>array(//declaration of fields
            'text'=>'title',//no `text` column, use `title` instead
            'alt'=>false,//skip using `alt` column
            'id_parent'=>'parent_id',//no `id_parent` column,use `parent_id` instead
            'task'=>false,
            'icon'=>false,
            'url'=>array('/menuAdjacency/view',array('id'=>'id'))
        ),
    ));
	?>

<?php/* $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i><span class="username">Admin</span> <i class="icon-angle-down"></i>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => '<i class="icon-user"></i> My Profile',
                                'url' => '#'
                            ),
                            array(
                                'label' => '<i class="icon-calendar"></i> My Calendar',
                                'url' => '#',
                            ),
                            array(
                                'label' => '<i class="icon-tasks"></i> My Tasks</a>',
                                'url' => '#',
                            ),
                            array(
                                'label' => '',
                                array(
                                    'class' => 'divider',
                                )
                            ),
                            array(
                                'label' => '<i class="icon-key"></i> Log Out',
                                'url' => array('site/logout'),
                            ),
                        )
                    ),
                ),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'nav pull-left',
                        ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu',
                )
            ));*/?>

</div>
<div class="span10">
<?php if(isset($this->breadcrumbs)):
 
    if ( Yii::app()->controller->route !== 'site/index' )
        $this->breadcrumbs = array_merge(array (t('Home')=>Yii::app()->homeUrl), $this->breadcrumbs);
 
    $this->widget('zii.widgets.CBreadcrumbs', array(
        'links'=>$this->breadcrumbs,
        'homeLink'=>false,
        'tagName'=>'ul',
        'separator'=>'',
        'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
        'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
        'htmlOptions'=>array ('class'=>'breadcrumb')
    )); ?><!-- breadcrumbs -->
    <?php endif; ?>
	<div class='panel'>
	
	</div>
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>