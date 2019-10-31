<?php 
if($registry->has('theme_options') == true) { 
$class = 2; 
$id = rand(0, 5000)*rand(5000, 50000);
$all = 6; 
$row = 6; 

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$page_direction = $theme_options->get( 'page_direction' ); ?>
<div class="box clearfix box-with-products with-scroll box-no-advanced">
  <!-- Carousel nav -->
  <a class="next" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_next"><span></span></a>
  <a class="prev" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_prev"><span></span></a>
	
  <div class="box-heading"><?php echo $module['content']['title']; ?></div>
  <div class="strip-line"></div>
  <div class="clear"></div>
  <div class="box-content products">
    <div class="box-product">
    	<div id="myCarousel<?php echo $id; ?>" class="carousel slide">
    		<!-- Carousel items -->
    		<div class="carousel-inner">
    			<?php $i = 0; $row_fluid = 0; $item = 0; foreach ($module['content']['products'] as $product) { $row_fluid++; ?>
	    			<?php if($i == 0) { $item++; echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
	    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { echo '</div></div></div><div class="item"><div class="product-grid"><div class="row">'; $item++; } else { $r=$row_fluid-floor($row_fluid/$row)*$row; if($row_fluid>$row && $r == 1) { echo '</div><div class="row">'; } } ?>
	    			<div class="col-sm-<?php echo $class; ?> col-xs-6 <?php if($class == 2) { echo 'col-md-25 col-lg-2 col-sm-3 '; } if($class == 2 && $r == 0) { echo 'hidden-md hidden-sm'; } if($class == 2 && $r == 5) { echo 'hidden-sm'; } ?> <?php if($class == 25) { echo 'col-md-25 col-lg-25 col-sm-3 '; } if($class == 25 && $r == 0) { echo 'hidden-sm'; } ?>">
	    				<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
	    			</div>
    			<?php $i++; } ?>
    			<?php if($i > 0) { echo '</div></div></div>'; } ?>
    		</div>
		</div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  var owl<?php echo $id; ?> = $(".box #myCarousel<?php echo $id; ?> .carousel-inner");
	
  $("#myCarousel<?php echo $id; ?>_next").click(function(){
      owl<?php echo $id; ?>.trigger('owl.next');
      return false;
    })
  $("#myCarousel<?php echo $id; ?>_prev").click(function(){
      owl<?php echo $id; ?>.trigger('owl.prev');
      return false;
  });
    
  owl<?php echo $id; ?>.owlCarousel({
  	  slideSpeed : 500,
      singleItem:true,
      <?php if($page_direction[$config->get( 'config_language_id' )] == 'RTL'): ?>
      direction: 'rtl'
      <?php endif; ?>
   });
});
</script>
<?php } ?>