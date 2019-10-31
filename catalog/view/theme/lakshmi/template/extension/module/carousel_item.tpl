<?php
if($registry->has('theme_options') == false) { 
 header("location: themeinstall/index.php"); 
 exit; 
}
$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$page_direction = $theme_options->get( 'page_direction' );
?>
<?php $class = 3; $id = rand(0, 5000)*rand(0, 5000); $all = 4; $row = 4; ?>
<div class="box box-with-products box-carousel">
  <!-- Carousel nav -->
  <a class="next" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_next"><span></span></a>
  <a class="prev" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_prev"><span></span></a>
  
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
  
  <div class="box-heading"><?php echo $block_heading; ?></div>
  <div class="strip-line"></div>
  <div class="clear"></div>
  <div class="box-content products">
  	<div id="myCarousel<?php echo $id; ?>" class="carousel slide">
  		<div class="carousel-inner">
			<?php $i = 0; foreach($carousel_item as $item) { ?>
			<div class="item<?php if($i == 0) { echo ' active'; } ?>">
				<?php echo $item['content']; ?>
			</div>
			<?php $i++; } ?>
		</div>
	</div>
  </div>
</div>