<?php
defined( '_JEXEC' ) or die;
?>
<div class="position">
	<div class="col1">
		<div class="img"><img alt="" src="<?php echo $this->item->small_img;?>"></div>
		<div class="name"><?php echo $this->item->title;?></div>
	</div>
	<a href="#" class="del"></a>
	<input type="hidden"  name="jform[product_id]" id="jformproduct_id" value="<?php echo $this->item->id;?>">
</div>