<?php 
if($registry->has('theme_options') == true) { 
$class = 3; 
$id = rand(0, 5000)*rand(5000, 50000);
$all = 4; 
$row = 4; 

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$page_direction = $theme_options->get( 'page_direction' );

if($theme_options->get( 'product_per_pow' ) == 6) { $class = 2; }
if($theme_options->get( 'product_per_pow' ) == 5) { $class = 25; }
if($theme_options->get( 'product_per_pow' ) == 3) { $class = 4; }

if($theme_options->get( 'product_per_pow' ) > 1) { $row = $theme_options->get( 'product_per_pow' ); $all = $theme_options->get( 'product_per_pow' ); } 
?>
<div class="box clearfix box-with-products <?php if($theme_options->get( 'product_scroll_specials' ) != '0') { echo 'with-scroll';  } ?> box-no-advanced">
  <?php if($theme_options->get( 'product_scroll_specials' ) != '0') { ?>
  <!-- Carousel nav -->
  <a class="next" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_next"><span></span></a>
  <a class="prev" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_prev"><span></span></a>
  <?php } ?>
	
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="strip-line"></div>
  <div class="clear"></div>
  <div class="box-content products">
    <div class="box-product">
    	<div id="myCarousel<?php echo $id; ?>" <?php if($theme_options->get( 'product_scroll_specials' ) != '0') { ?>class="carousel slide"<?php } ?>>
    		<!-- Carousel items -->
    		<div class="carousel-inner">
    			<?php $i = 0; $row_fluid = 0; $item = 0; foreach ($products as $product) { $row_fluid++; ?>
	    			<?php if($i == 0) { $item++; echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
	    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { if($theme_options->get( 'product_scroll_specials' ) != '0') { echo '</div></div></div><div class="item"><div class="product-grid"><div class="row">'; $item++; } else { echo '</div><div class="row">'; } } else { $r=$row_fluid-floor($row_fluid/$row)*$row; if($row_fluid>$row && $r == 1) { echo '</div><div class="row">'; } } ?>
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

<?php if($theme_options->get( 'product_scroll_specials' ) != '0') { ?>
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
<?php } ?>