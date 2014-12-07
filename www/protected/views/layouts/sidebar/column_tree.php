<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span2 last">
<div class='sidebar_tree'>
<?php
$this->beginWidget('zii.widgets.CPortlet',
					array('title'=>'Зоны')
					);
$this->widget('CTreeView', array(
	//'data' => $my_data
	'url' => '/index.php?r=fluid/tree',
	'toggle'=>'js:tl_toggle'
));
?>
<script>
function tl_refresh_pores(poor_id) {
$('#pore-tree').empty();
$('#pore-tree').treeview({url: '/index.php?r=pore/tree&rooter='+poor_id});	
}
function tl_refresh_pores_new(poor_id) {
//$('#product-grid').datagrid({url: '/index.php?r=pore/tree2&rooter='+poor_id});	


$('#dg').datagrid({
    view: detailview,
    detailFormatter:function(index,row){
        return '<div style="padding:2px"><table class="ddv"></table></div>';
    },
    onExpandRow: function(index,row){
        var ddv = $(this).datagrid('getRowDetail',index).find('table.ddv');
        ddv.datagrid({
            url:'datagrid22_getdetail.php?itemid='+row.itemid,
            fitColumns:true,
            singleSelect:true,
            rownumbers:true,
            loadMsg:'',
            height:'auto',
            columns:[[
                {field:'orderid',title:'Order ID',width:100},
                {field:'quantity',title:'Quantity',width:100},
                {field:'unitprice',title:'Unit Price',width:100}
            ]],
            onResize:function(){
                $('#dg').datagrid('fixDetailRowHeight',index);
            },
            onLoadSuccess:function(){
                setTimeout(function(){
                    $('#dg').datagrid('fixDetailRowHeight',index);
                },0);
            }
        });
        $('#dg').datagrid('fixDetailRowHeight',index);
    }
});
}
function tl_toggle (elem) {
		//на всякий случай
	}
</script>	
<?php $this->endWidget(); ?>
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