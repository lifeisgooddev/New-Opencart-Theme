<?php if($registry->has('theme_options') == true) { 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$cart_info = $theme_options->getCart(); ?>

<!-- Cart block -->
<div id="cart_block" class="dropdown">
	<div class="cart-heading dropdown-toogle" data-hover="dropdown" data-toggle="dropdown" onclick="window.location.href = '<?php echo $cart; ?>'">
		<i class="cart-count"><span id="total_count_ajax"><?php echo $cart_info['total_item']; ?></span></i>
		
		<?php if($theme_options->get( 'colors_status' ) == 1 && ($theme_options->get( 'cart_icon' ) != '' || $theme_options->get( 'cart_icon_hover' ) != '')) { ?>
		     <i class="cart-icon <?php if($theme_options->get( 'cart_icon_hover' ) == '') { echo 'cart-icon-no-hover'; } ?>"><img src="image/<?php if($theme_options->get( 'cart_icon_hover' ) != '') { echo $theme_options->get( 'cart_icon_hover' ); } else { echo $theme_options->get( 'cart_icon' ); } ?>" class="cart-icon-hover" alt=""><img src="image/<?php if($theme_options->get( 'cart_icon' ) != '') { echo $theme_options->get( 'cart_icon' ); } else { echo 'catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/img/icon-cart.png'; } ?>" class="cart-icon-standard" alt=""></i>
		<?php } else { ?>
		     <i class="cart-icon"><img src="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/img/icon-cart-hover.png" class="cart-icon-hover" alt=""><img src="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/img/icon-cart.png" class="cart-icon-standard" alt=""></i>
		<?php } ?>
		
		<p><strong id="total_price_ajax"><span id="total_price"><?php echo $cart_info['total_price']; ?></span></strong></p>
	</div>
	
	<div class="dropdown-menu" id="cart_content"><div id="cart_content_ajax">
		<?php if ($products || $vouchers) { ?>
		<div class="mini-cart-info">
		  <table>
		    <?php foreach ($products as $product) { ?>
		    <tr>
		      <td class="image"><?php if ($product['thumb']) { ?>
		        <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
		        <?php } ?></td>
		      <td class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
		        <div>
		          <?php foreach ($product['option'] as $option) { ?>
		          - <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
		          <?php } ?>
		          <?php if ($product['recurring']): ?>
		          - <small><?php echo $text_recurring ?> <?php echo $product['recurring']; ?></small><br />
		          <?php endif; ?>
		        </div></td>
		      <td class="quantity">x&nbsp;<?php echo $product['quantity']; ?></td>
		      <td class="total"><?php echo $product['total']; ?></td>
		      <td class="remove"><a href="javascript:;" onclick="cart.remove('<?php echo $product['cart_id']; ?>');" title="<?php echo $button_remove; ?>">x</a></td>
		    </tr>
		    <?php } ?>
		    <?php foreach ($vouchers as $voucher) { ?>
		    <tr>
		      <td class="image"></td>
		      <td class="name"><?php echo $voucher['description']; ?></td>
		      <td class="quantity">x&nbsp;1</td>
		      <td class="total"><?php echo $voucher['amount']; ?></td>
		      <td class="remove"><a href="javascript:;" onclick="voucher.remove('<?php echo $voucher['key']; ?>');" title="<?php echo $button_remove; ?>">x</a></td>
		    </tr>
		    <?php } ?>
		  </table>
		</div>
		<div class="mini-cart-total">
		  <table>
		    <?php foreach ($totals as $total) { ?>
		    <tr>
		      <td class="right"><b><?php echo $total['title']; ?>:</b></td>
		      <td class="right"><?php echo $total['text']; ?></td>
		    </tr>
		    <?php } ?>
		  </table>
		</div>
		
		<div class="checkout"><a href="<?php echo $cart; ?>" class="button btn-default"><?php echo $text_cart; ?></a> &nbsp;<a href="<?php echo $checkout; ?>" class="button"><?php echo $text_checkout; ?></a></div>
		<?php } else { ?>
		<div class="empty"><?php echo $text_empty; ?></div>
		<?php } ?>
	</div></div>
</div>
<?php } ?>