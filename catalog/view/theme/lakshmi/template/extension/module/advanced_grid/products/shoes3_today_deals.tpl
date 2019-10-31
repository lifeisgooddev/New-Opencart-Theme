<?php 
if($registry->has('theme_options') == true) { 

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');

	echo '<div class="box today-deals-shoes3">';
		echo '<div class="box-heading">';
			echo $module['content']['title'];
		echo '</div>';
		echo '<div class="strip-line"></div>';
		echo '<div class="box-content">';
               echo '<div class="clearfix" style="clear: both"><div class="today-deals-shoes3-products">';
               
                    foreach($module['content']['products'] as $product) { ?>
                    
                    <?php if($theme_options->get( 'display_specials_countdown' ) == '1' && $product['special']) { $countdown = rand(0, 5000)*rand(0, 5000); 
                              $product_detail = $theme_options->getDataProduct( $product['product_id'] );
                              $date_end = $product_detail['date_end'];
                              if($date_end != '0000-00-00' && $date_end) { ?>
                         		<script>
                         		$(function () {
                         			var austDay = new Date();
                         			austDay = new Date(<?php echo date("Y", strtotime($date_end)); ?>, <?php echo date("m", strtotime($date_end)); ?> - 1, <?php echo date("d", strtotime($date_end)); ?>);
                         			$('#countdown<?php echo $countdown; ?>').countdown({until: austDay});
                         		});
                         		</script>
                         		<div id="countdown<?php echo $countdown; ?>" class="clearfix"></div>
                    	     <?php } ?>
                    <?php } ?>
                    
                    <!-- Product -->
                    <div class="product clearfix product-hover">
                    	<div class="left">
                    		<?php if ($product['thumb']) { ?>
                    			<?php if($product['special'] && $theme_options->get( 'display_text_sale' ) != '0') { ?>
                    				<?php $text_sale = 'Sale';
                    				if($theme_options->get( 'sale_text', $config->get( 'config_language_id' ) ) != '') {
                    					$text_sale = $theme_options->get( 'sale_text', $config->get( 'config_language_id' ) );
                    				} ?>
                    				<?php if($theme_options->get( 'type_sale' ) == '1') { ?>
                    					<?php $product_detail = $theme_options->getDataProduct( $product['product_id'] );
                    					$roznica_ceny = $product_detail['price']-$product_detail['special'];
                    					$procent = ($roznica_ceny*100)/$product_detail['price']; ?>
                    					<div class="sale">-<?php echo round($procent); ?>%</div>
                    				<?php } else { ?>
                    					<div class="sale"><?php echo $text_sale; ?></div>
                    				<?php } ?>
                    			 <?php } elseif($theme_options->get( 'display_text_new' ) != '0' && $theme_options->isLatestProduct( $product['product_id'] )) { ?>
                    				 <div class="new"><?php if($theme_options->get( 'new_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'new_text', $config->get( 'config_language_id' ) ); } else { echo 'New'; } ?></div>
                    			 <?php } ?>
                    			
                    			<div class="image <?php if($theme_options->get( 'product_image_effect' ) == '1') { echo 'image-swap-effect'; } ?>">
                    				<a href="<?php echo $product['href']; ?>">
                    					<?php if($theme_options->get( 'product_image_effect' ) == '1') {
                    						$nthumb = str_replace(' ', "%20", ($product['thumb']));
                    						$nthumb = str_replace(HTTP_SERVER, "", $nthumb);
                    						$image_size = getimagesize($nthumb);
                    						$image_swap = $theme_options->productImageSwap($product['product_id'], $image_size[0], $image_size[1]);
                    						if($image_swap != '') echo '<img src="' . $image_swap . '" alt="' . $product['name'] . '" class="swap-image" />';
                    					} ?> 
                    					<?php if($theme_options->get( 'lazy_loading_images' ) != '0') { ?>
                    					<img src="image/catalog/blank.gif" data-echo="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
                    					<?php } else { ?>
                    					<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" class="<?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'zoom-image-effect'; } ?>" />
                    					<?php } ?>
                    				</a>
                    			</div>
                    		<?php } else { ?>
                    			<div class="image">
                    				<a href="<?php echo $product['href']; ?>"><img src="image/no_image.jpg" alt="<?php echo $product['name']; ?>" <?php if($theme_options->get( 'product_image_effect' ) == '2') { echo 'class="zoom-image-effect"'; } ?> /></a>
                    			</div>
                    		<?php } ?>
                    	</div>
                    	<div class="right">
                    		<div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
                    		<div class="price">
                    			<?php if (!$product['special']) { ?>
                    			<?php echo $product['price']; ?>
                    			<?php } else { ?>
                    			<span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
                    			<?php } ?>
                    		</div>
                    	</div>
                    </div>

<?php
                    }
               echo '</div></div>';
		echo '</div>';
	echo '</div>';	 ?>
	
<?php } ?>