<?php if($registry->has('theme_options') == true) { 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$page_direction = $theme_options->get( 'page_direction' ); ?>
<div class="box clearfix box-with-products with-scroll">
  <!-- Carousel nav -->
  <a class="next" href="#our_brands" id="brands_next"><span></span></a>
  <a class="prev" href="#our_brands" id="brands_prev"><span></span></a>
	
  <div class="box-heading"><?php if($theme_options->get( 'our_brands_text', $config->get( 'config_language_id' ) ) != '') { echo html_entity_decode($theme_options->get( 'our_brands_text', $config->get( 'config_language_id' ) )); } else { echo 'Our brands'; } ?></div>
  <div class="clear"></div>
  <div class="box-content products">     
     <div id="our_brands" class="owl-carousel carousel-brands">
       <?php foreach ($banners as $banner) { ?>
       <div class="item text-center">
         <?php if ($banner['link']) { ?>
         <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
         <?php } else { ?>
         <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
         <?php } ?>
       </div>
       <?php } ?>
     </div>
     <script type="text/javascript"><!--
     
     var ourbrands = $('#our_brands').owlCarousel({
     	items: 6,
     	autoPlay: 3000,
     	navigation: false,
     	<?php if($page_direction[$config->get( 'config_language_id' )] == 'RTL'): ?>
     	direction: 'rtl'
     	<?php endif; ?>
     });
     
     $("#brands_next").click(function(){
         ourbrands.trigger('owl.next');
         return false;
       });
       
     $("#brands_prev").click(function(){
         ourbrands.trigger('owl.prev');
         return false;
     });
     --></script>
  </div>
</div>
<?php } ?>