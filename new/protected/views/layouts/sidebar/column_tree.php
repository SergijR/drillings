<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span2 last">
<div class='sidebar_tree'>
	<?php

/*
B637FA57-D912-45B8-81F0-7501DAAF07

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
</div>	
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