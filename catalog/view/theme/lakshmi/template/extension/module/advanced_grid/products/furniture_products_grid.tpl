<?php 
if($registry->has('theme_options') == true) { 

$class = 3; 
$all = 4;
$id = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');

if(count($module['content']['products']) == 6) { $class = 2; $all = 6; }
if(count($module['content']['products']) == 5) { $class = 25; $all = 5; }
if(count($module['content']['products']) == 3) { $class = 4;  $all = 3; }
if(count($module['content']['products']) == 2) { $class = 6; $all = 2; }
if(count($module['content']['products']) == 1) { $class = 12; $all = 1; } ?>

<div class="box clearfix box-with-products furniture-box">
  <div class="box-heading"><?php echo $module['content']['title']; ?></div>
  <div class="strip-line"></div>
  <div class="clear"></div>
  <div class="box-content products">
    <div class="box-product">
    	<div id="myCarousel<?php echo $id; ?>">
    		<!-- Carousel items -->
    		<div class="carousel-inner">
    			<?php $i = 0; $row_fluid = 0; $item = 0; foreach ($module['content']['products'] as $product) { $row_fluid++; ?>
	    			<?php if($i == 0) { $item++; echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
	    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { echo '</div><div class="row">'; } ?>
	    			<div class="col-sm-<?php echo $class; ?> <?php if($class != 12) { ?>col-xs-6<?php } ?> <?php if($class == 2) { echo 'col-md-25 col-lg-2 col-sm-3 '; } if($class == 2 && $r == 0) { echo 'hidden-md hidden-sm'; } if($class == 2 && $r == 5) { echo 'hidden-sm'; } ?> <?php if($class == 25) { echo 'col-md-25 col-lg-25 col-sm-3 '; } if($class == 25 && $r == 0) { echo 'hidden-sm'; } ?>">
	    				<!-- Product -->
	    				<div class="product clearfix">
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
	    						<?php if($theme_options->get( 'display_add_to_cart' ) != '0') { ?>
	    						<div class="add-to-cart">
	    						     <a onclick="cart.add('<?php echo $product['product_id']; ?>');"><?php echo $button_cart; ?></a>
	    						</div>
	    						<?php } ?>
	    					</div>
	    				</div>
	    			</div>
    			<?php $i++; } ?>
    			<?php if($i > 0) { echo '</div></div></div>'; } ?>
    		</div>
		</div>
    </div>
  </div>
</div>
<?php } ?>