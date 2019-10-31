							</div>
							
							<?php if( count($column_right) ) { ?> 
							<div class="col-md-<?php echo $grid_content_right; ?>" id="column-right">
								<?php foreach ($column_right as $module) {
									echo $module;
								} ?>
							</div>
							<?php } ?>
						</div>
						
						<?php if(isset($products) && isset($product_page)) { if ($products && $theme_options->get( 'product_related_status' ) != '0') { ?>
						<?php 
						$class = 3; 
						$id = rand(0, 5000)*rand(0, 5000); 
						$all = 4; 
						$row = 4; 
						
						if($theme_options->get( 'product_per_pow' ) == 6) { $class = 2; }
						if($theme_options->get( 'product_per_pow' ) == 5) { $class = 25; }
						if($theme_options->get( 'product_per_pow' ) == 3) { $class = 4; }
						
						if($theme_options->get( 'product_per_pow' ) > 1) { $row = $theme_options->get( 'product_per_pow' ); $all = $theme_options->get( 'product_per_pow' ); } 
						?>
						<div class="box clearfix box-with-products box-no-advanced <?php if($theme_options->get( 'product_scroll_related' ) != '0') { echo 'with-scroll'; } ?>">
						  <?php if($theme_options->get( 'product_scroll_related' ) != '0') { ?>
						  <!-- Carousel nav -->
						  <a class="next" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_next"><span></span></a>
						  <a class="prev" href="#myCarousel<?php echo $id; ?>" id="myCarousel<?php echo $id; ?>_prev"><span></span></a>
						  <?php } ?>
							
						  <div class="box-heading"><?php echo $text_related; ?></div>
						  <div class="strip-line"></div>
						  <div class="clear"></div>
						  <div class="box-content products related-products">
						    <div class="box-product">
						    	<div id="myCarousel<?php echo $id; ?>" <?php if($theme_options->get( 'product_scroll_related' ) != '0') { ?>class="carousel slide"<?php } ?>>
						    		<!-- Carousel items -->
						    		<div class="carousel-inner">
						    			<?php $i = 0; $row_fluid = 0; $item = 0; foreach ($products as $product) { $row_fluid++; ?>
							    			<?php if($i == 0) { $item++; echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
							    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { if($theme_options->get( 'product_scroll_related' ) != '0') { echo '</div></div></div><div class="item"><div class="product-grid"><div class="row">'; $item++; } else { echo '</div><div class="row">'; } } else { $r=$row_fluid-floor($row_fluid/$row)*$row; if($row_fluid>$row && $r == 1) { echo '</div><div class="row">'; } } ?>
							    			<div class="col-sm-<?php echo $class; ?> col-xs-6">
							    				<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
							    			</div>
						    			<?php $i++; } ?>
						    			<?php if($i > 0) { echo '</div></div></div>'; } ?>
						    		</div>
							  </div>
						    </div>
						  </div>
						</div>
						
						<?php if($theme_options->get( 'product_scroll_related' ) != '0') { ?>
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
						      singleItem:true
						   });
						});
						</script>
						<?php } ?>
						<?php } } ?>
					</div>
				</div>
				
				<div class="row">	
					<div class="col-sm-12">	
						<?php 
						$contentbottom = $modules_old_opencart->getModules('content_bottom');
						if( count($contentbottom) ) { ?>
							<?php
							foreach ($contentbottom as $module) {
								echo $module;
							}
							?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>				  
</div>