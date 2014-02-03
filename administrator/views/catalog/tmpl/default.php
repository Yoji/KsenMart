<?php 
defined( '_JEXEC' ) or die; 
JHTML::_('behavior.modal');
?>
<div class="clearfix panel">
    <div class="pull-left">
        <?php echo KMSystem::loadModules('km-top-left'); ?>
    </div>
    <div class="pull-right">
        <?php echo KMSystem::loadModules('km-top-right'); ?>
    </div>
    <div class="row-fluid">
        <?php echo KMSystem::loadModules('km-top-bottom'); ?>
    </div>
</div>
<div id="center">
	<table id="cat" width="100%">
		<tr>
			<td width="250" class="left-column">
				<div id="tree">
					<form id="list-filters">
						<ul>
							<?php echo KMSystem::loadModules('km-list-left')?>
						</ul>
					</form>			
				</div>	
			</td>
			<td valign="top">
				<div id="content">
					<?php echo $this->loadTemplate('items_list_top');?>
					<?php echo $this->loadTemplate('items_list');?>
				</div>	
			</td>	
		</tr>	
	</table>	
</div>
<script>
var ProductsList=new KMList({
	'view':'catalog',
	'object':'ProductsList',
	'limit':<?php echo $this->state->get('list.limit');?>,
	'limitstart':<?php echo $this->state->get('list.start');?>,
	'total':<?php echo $this->total;?>,
	'order_type':'<?php echo $this->state->get('order_type');?>',
	'order_dir':'<?php echo $this->state->get('order_dir');?>',
	'table':'products',
	'copy_button':true
});
</script>