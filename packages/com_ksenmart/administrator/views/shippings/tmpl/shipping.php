<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
?>
<form class="form" method="post">
	<div class="heading">
		<h3>
			<?php echo $this->title;?>
		</h3>
		<div class="save-close">
			<input type="submit" value="<?php echo JText::_('KS_SAVE'); ?>" class="save">
			<input type="button" class="close" onclick="parent.closePopupWindow();">
		</div>
	</div>
	<div class="edit">
		<table width="100%">
			<tr>
				<td class="leftcol">
					<div class="set">
						<div class="row">
							<?php echo $this->form->getLabel('title'); ?>
							<?php echo $this->form->getInput('title'); ?>
						</div>
						<div class="row">
							<?php echo $this->form->getLabel('type'); ?>
							<?php echo $this->form->getInput('type'); ?>
						</div>							
						<div class="row">
							<?php echo $this->form->getLabel('published'); ?>
							<?php echo $this->form->getInput('published'); ?>
						</div>
					</div>
					<div class="params-set">
						<?php echo $this->paramsform;?>
					</div>	
					<div class="set">
						<h3 class="headname"><?php echo JText::_('ksm_shippings_shipping_userfields_lbl')?></h3>
						<?php echo $this->form->getInput('user_fields'); ?>
					</div>
					<div class="set">
						<h3 class="headname"><?php echo JText::_('ksm_shippings_shipping_addressfields_lbl')?></h3>
						<?php echo $this->form->getInput('address_fields'); ?>
					</div>	
					<div class="row">
						<h3><?php echo $this->form->getLabel('introcontent'); ?></h3>
					</div>
					<div class="row">
						<?php echo $this->form->getInput('introcontent'); ?>
					</div>						
				</td>
				<td class="rightcol">	
					<?php echo $this->form->getInput('images'); ?>
					<?php echo $this->form->getInput('regions'); ?>
				</td>
			</tr>	
		</table>
	</div>	
	<input type="hidden" name="task" value="save_form_item">
	<?php echo $this->form->getInput('id'); ?>
</form>	