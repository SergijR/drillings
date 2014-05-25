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


//B637FA57-D912-45B8-81F0-7501DAAF07


/*
$Born = Born::model()->findAll();
var_dump(count($Born));


$arch_id = 'B637FA57-D912-45B8-81F0-7501DAAF07';

$Born=Yii::app()->db->createCommand()
->select(' * ')
->from('Born b')
//->join('Documents d','i.id=d.id')
->where('b."id" IN ( SELECT f."id_Born" FROM "Fluid" "f" WHERE f."id_Arch" = :arch_id )')
//->group('i.id')
//->order('relevance DESC')
->bindParam(':arch_id',$arch_id,PDO::PARAM_STR)
->queryAll();

var_dump(($Born));
*/
/*
$born_id = '185C2987-35F7-C4A5-15F4777D459F     ';

						$archs=Yii::app()->db->createCommand()
						->select(' * ')
						->from('Square s')
						->where('s."id" IN ( SELECT f."id_Square" FROM "Fluid" "f" WHERE f."id_Born" = :born_id )')
						->bindParam(':born_id',$born_id,PDO::PARAM_STR)
						->queryAll();

var_dump($archs);
*/						

$this->widget('CTreeView', array(
	//'data' => $my_data
	'url' => '/index.php?r=fluid/tree',
	'toggle'=>'js:tl_toggle'
));
?>
<script>
	function tl_refresh_fluids(poor_id) {
		//console.log(poor_id);
		$.fn.yiiGridView.update("fluid-grid", {
			data: 'Fluid[id_square]='+poor_id,
			url:"/index.php?r=fluid/index"
			});
	}
	
	function tl_refresh_pores(poor_id) {
		//console.log(poor_id);
	//	$.fn.yiiTreeView.update("pore-tree", {
	//		data: 'Fluid[id_square]='+poor_id,
	//		url:"/index.php?r=pore/index"
	//		});
	
	$('#pore-tree').empty();
	 $('#pore-tree').treeview({
            url: '/index.php?r=pore/tree&rooter='+poor_id,
        });	
		
	}
	
	
	function tl_toggle (elem) {
		//на всякий случай
	}
	
	
</script>	

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
            ));*/
	?>		
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