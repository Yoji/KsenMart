<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;
?>
<div class="span5 fav_controll">
	<div class="pull-right">
		<a prd_id="<?php echo $this->product->id; ?>" href="javascript:void(0);" class="to-fav link_b_border" id="on_fav" data-toggle="popover" data-placement="bottom" title="" data-original-title="<?php echo JText::_('KSM_AUTH'); ?>"><i class="icon-heart"></i> <span><?php echo JText::_('KSM_PRODUCT_TOFAV_TITLE'); ?></span></a>
		<a href="<?php echo $this->links[0]; ?>" class="prev"></a>
		<a href="<?php echo $this->links[1]; ?>" class="next"></a>
	</div>
</div>