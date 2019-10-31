<?php 
if($registry->has('theme_options') == true) { 

     $theme_options = $registry->get('theme_options');
     $config = $registry->get('config');
     $page_direction = $theme_options->get( 'page_direction' );

	echo '<div class="box today-deals box-no-advanced">';
	     echo '<a class="next" href="#myCarousel_today_deals" id="myCarousel_today_deals_next"><span></span></a>';
	     echo '<a class="prev" href="#myCarousel_today_deals" id="myCarousel_today_deals_prev"><span></span></a>';
		echo '<div class="box-heading">';
			echo $module['content']['title'];
		echo '</div>';
		echo '<div class="strip-line"></div>';
		echo '<div class="box-content products" id="myCarousel_today_deals">';
               echo '<div class="clearfix" style="clear: both"><div class="today-deals-products owl-carousel">';
                    foreach($module['content']['products'] as $product) {
                         echo '<div class="product clearfix item">';
                              echo '<div class="image"><a href="' . $product['href'] . '">';
                                   if($theme_options->get( 'lazy_loading_images' ) != '0') {
                                   	echo '<img src="image/catalog/blank.gif" data-echo="' . $product['thumb'] . '" alt="' . $product['name'] . '" />';
                                   } else {
                                   	echo '<img src="' . $product['thumb'] . '" alt="' .$product['name'] . '" />';
                                   }
                              echo '</a></div>'; ?>
     
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
                         
<?php
                              echo '<div class="right">';
                                   echo '<div class="name"><a href="' . $product['href'] . '">' . $product['name'] . '</a></div>';
                                   echo '<div class="price">';
                                   	if (!$product['special']) {
                                   	     echo $product['price'];
                                   	} else {
                                   	     echo '<span class="price-old">' . $product['price'] . '</span> <span class="price-new">' . $product['special'] . '</span>';
                                   	}
                                   echo '</div>';
                              echo '</div>';
                              echo '<a onclick="cart.add(\'' . $product['product_id'] . '\');" class="button btn-default">' . $button_cart . '</a>';
                         echo '</div>';
                    }
               echo '</div></div>';
		echo '</div>';
	echo '</div>';	 ?>
	
<script type="text/javascript">
$(document).ready(function() {
  var owltodaydeals = $(".box #myCarousel_today_deals .today-deals-products");
	
  $("#myCarousel_today_deals_next").click(function(){
      owltodaydeals.trigger('owl.next');
      return false;
    })
  $("#myCarousel_today_deals_prev").click(function(){
      owltodaydeals.trigger('owl.prev');
      return false;
  });
    
  owltodaydeals.owlCarousel({
  	  slideSpeed : 500,
       singleItem:true,
       <?php if($page_direction[$config->get( 'config_language_id' )] == 'RTL'): ?>
       direction: 'rtl'
       <?php endif; ?>
   });
});
</script>
<?php } ?>