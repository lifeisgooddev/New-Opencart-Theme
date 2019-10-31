<?php 
if($registry->has('theme_options') == true) { 

$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); ?>

<div class="holidays-products">
     <div class="heading"><?php echo html_entity_decode($module['content']['title']); ?></div>
     <?php foreach ($module['content']['products'] as $product) { ?>
     <?php $product_detail = $theme_options->getDataProduct( $product['product_id'] ); ?>
     <div class="product clearfix">
          <div class="left">
               <?php if ($product['thumb']) { ?>
               	<div class="image">
               		<a href="<?php echo $product['href']; ?>">
               			<?php if($theme_options->get( 'lazy_loading_images' ) != '0') { ?>
               			<img src="image/catalog/blank.gif" data-echo="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
               			<?php } else { ?>
               			<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
               			<?php } ?>
               		</a>
               	</div>
               <?php } else { ?>
               	<div class="image">
               		<a href="<?php echo $product['href']; ?>"><img src="image/no_image.jpg" alt="<?php echo $product['name']; ?>" /></a>
               	</div>
               <?php } ?>
          </div>
          
          <div class="right">
          	<div class="name"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
          	<div class="brand"><?php echo $product_detail['manufacturer']; ?></div>
          	<div class="price">
          		<?php if (!$product['special']) { ?>
          		<?php echo $product['price']; ?>
          		<?php } else { ?>
          		<span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
          		<?php } ?>
          	</div>
          </div>
     </div>
     <?php } ?>
</div>

<?php } ?>