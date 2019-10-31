<?php if($theme_options->get( 'fixed_header' ) == 1) { ?>
<!-- HEADER
	================================================== -->
<div class="fixed-header-1 sticky-header">
	<div class="background-header"></div>
	<div class="slider-header">
		<!-- Top of pages -->
		<div id="top" class="<?php if($theme_options->get( 'header_layout' ) == 1) { echo 'full-width'; } elseif($theme_options->get( 'header_layout' ) == 4) { echo 'fixed3 fixed2'; } elseif($theme_options->get( 'header_layout' ) == 3) { echo 'fixed2';  } else { echo 'fixed'; } ?>">
			<div class="background-top"></div>
			<div class="background">
				<div class="shadow"></div>
				<div class="pattern">
					<?php if($theme_options->get( 'megamenu_type' ) == 4 || $theme_options->get( 'megamenu_type' ) == 5 || $theme_options->get( 'megamenu_type' ) == 6 || $theme_options->get( 'megamenu_type' ) == 9 || $theme_options->get( 'megamenu_type' ) == 14 || $theme_options->get( 'megamenu_type' ) == 19 || $theme_options->get( 'megamenu_type' ) == 29) { ?>
					<div class="container container-megamenu2">
					<?php } ?>
					<?php 
					$menu = $modules_old_opencart->getModules('menu');
					if( count($menu) ) { ?>
					     <div class="megamenu-background">
					          <div class="">
					               <div class="overflow-megamenu container">
               						<?php 
               						if(count($menu) > 1) echo '<div class="row mega-menu-modules">';
               						$i = 0;
               						    
               						foreach ($menu as $module) {
               						     if($i == 0 && count($menu) > 1) echo '<div class="col-md-3">';
               						     if($i == 1 && count($menu) > 1) echo '<div class="col-md-9">';
               							     echo $module;
               							if(count($menu) > 1 && ($i == 0 || $i == 1)) echo '</div>';
               							if(count($menu) > 1 && $i == 1) echo '</div>';
               							$i++;
               						} ?>
               					</div>
               				</div>
               			</div>
					<?php
					}
					?>
					<?php if($theme_options->get( 'megamenu_type' ) == 4 || $theme_options->get( 'megamenu_type' ) == 5 || $theme_options->get( 'megamenu_type' ) == 6 || $theme_options->get( 'megamenu_type' ) == 9 || $theme_options->get( 'megamenu_type' ) == 14 || $theme_options->get( 'megamenu_type' ) == 19 || $theme_options->get( 'megamenu_type' ) == 29) { ?>
					</div>
					<?php } ?>
					
					<?php 
					$menu2 = $modules_old_opencart->getModules('menu2');
					if( count($menu2) ) { 
					     echo '<div class="overflow-menu2">';
						foreach ($menu2 as $module) {
							echo $module;
						}
						echo '</div>';
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<!-- HEADER
	================================================== -->
<header class="header-type-2 header-type-7">
	<div class="background-header"></div>
	<div class="slider-header">
		<!-- Top of pages -->
		<div id="top" class="<?php if($theme_options->get( 'header_layout' ) == 1) { echo 'full-width'; } elseif($theme_options->get( 'header_layout' ) == 4) { echo 'fixed3 fixed2'; } elseif($theme_options->get( 'header_layout' ) == 3) { echo 'fixed2';  } else { echo 'fixed'; } ?>">
			<div class="background-top"></div>
			<div class="background">
				<div class="shadow"></div>
				<div class="pattern">
				     <div class="top-bar">
				          <div class="container">
                          
                            <?php echo $currency.$language; ?>
				               <!-- Links -->
				               <ul class="menu">
                               <li><i class="fa fa-phone"></i>Phone: +91 123 456 78</li>
                                <li><i class="fa fa-envelope"></i>Email: laxmi@email.com</li>
				               	<li><i class="fa fa-user"></i><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
				               	<li><i class="fa fa-gift"></i><a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a></li>
				               	<li><i class="fa fa-cart-plus"></i><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a></li>
				               	<li><i class="fa fa-check"></i><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
				               		<?php if ($logged) { ?>
				               		<li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
				               		<?php } ?>
				               </ul>
				               
				                                          
                               <div id="header-right">
							     <?php 
							     $top_block = $modules_old_opencart->getModules('top_block');
							     if( count($top_block) ) { 
							     	foreach ($top_block as $module) {
							     		echo $module;
							     	}
							     } ?>
							     
							     <!-- Search -->
							     <div class="search_form">
							     	<div class="button-search"></div>
							     	<input type="text" class="input-block-level search-query" name="search" placeholder="<?php echo str_replace('...', '', $search); ?>" id="search_query" value="" />
							     	
							     	<?php if($theme_options->get( 'quick_search_autosuggest' ) != '0') { ?>
							     		<div id="autocomplete-results" class="autocomplete-results"></div>
							     		
							     		<script type="text/javascript">
							     		$(document).ready(function() {
							     			$('#search_query').autocomplete({
							     				delay: 0,
							     				appendTo: "#autocomplete-results",
							     				source: function(request, response) {		
							     					$.ajax({
							     						url: 'index.php?route=search/autocomplete&filter_name=' +  encodeURIComponent(request.term),
							     						dataType: 'json',
							     						success: function(json) {
							     							response($.map(json, function(item) {
							     								return {
							     									label: item.name,
							     									value: item.product_id,
							     									href: item.href,
							     									thumb: item.thumb,
							     									desc: item.desc,
							     									price: item.price
							     								}
							     							}));
							     						}
							     					});
							     				},
							     				select: function(event, ui) {
							     					document.location.href = ui.item.href;
							     					
							     					return false;
							     				},
							     				focus: function(event, ui) {
							     			      	return false;
							     			   	},
							     			   	minLength: 2
							     			})
							     			.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
							     			  return $( "<li>" )
							     			    .append( "<a>" + item.label + "</a>" )
							     			    .appendTo( ul );
							     			};
							     		});
							     		</script>
							     	<?php } ?>
							     </div>
							     
							     
							
							</div>
                               
                               
                               
                               
				          </div>
				     </div>
				     
					<div class="container">
						<div class="row">
							<!-- Header Left -->
							<div class="col-sm-2" id="header-left">
							     <?php if ($logo) { ?>
							     <!-- Logo -->
							     <div class="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
							     <?php } ?>
							</div>
							
						
                        <div class="col-sm-10">
                        
                        <?php if($theme_options->get( 'megamenu_type' ) == 4 || $theme_options->get( 'megamenu_type' ) == 5 || $theme_options->get( 'megamenu_type' ) == 6 || $theme_options->get( 'megamenu_type' ) == 9 || $theme_options->get( 'megamenu_type' ) == 14 || $theme_options->get( 'megamenu_type' ) == 19 || $theme_options->get( 'megamenu_type' ) == 29) { ?>
					<div class="container container-megamenu2">
					<?php } ?>
					<?php 
					$menu = $modules_old_opencart->getModules('menu');
					if( count($menu) ) { ?>
					     <div class="megamenu-background">
					          <div class="">
					               <div class="overflow-megamenu container">
               						<?php 
               						if(count($menu) > 1) echo '<div class="row mega-menu-modules">';
               						$i = 0;
               						    
               						foreach ($menu as $module) {
               						     if($i == 0 && count($menu) > 1) echo '<div class="col-md-3">';
               						     if($i == 1 && count($menu) > 1) echo '<div class="col-md-9">';
               							     echo $module;
               							if(count($menu) > 1 && ($i == 0 || $i == 1)) echo '</div>';
               							if(count($menu) > 1 && $i == 1) echo '</div>';
               							$i++;
               						} ?>
               					</div>
               				</div>
               			</div>

					<?php
					}
					?>
					<?php if($theme_options->get( 'megamenu_type' ) == 4 || $theme_options->get( 'megamenu_type' ) == 5 || $theme_options->get( 'megamenu_type' ) == 6 || $theme_options->get( 'megamenu_type' ) == 9 || $theme_options->get( 'megamenu_type' ) == 14 || $theme_options->get( 'megamenu_type' ) == 19 || $theme_options->get( 'megamenu_type' ) == 29) { ?>
					</div>
					<?php } ?>
					
					<?php 
					$menu2 = $modules_old_opencart->getModules('menu2');
					if( count($menu2) ) { 
					     echo '<div class="overflow-menu2">';
						foreach ($menu2 as $module) {
							echo $module;
						}
						echo '</div>';
					} ?>
                    <?php echo $cart; ?>
				</div>
                	
			</div>
		</div>
	</div>
                        
                        </div>
                        
                        
							
						</div>
					</div>
					
					
	
	<?php $slideshow = $modules_old_opencart->getModules('slideshow'); ?>
	<?php  if(count($slideshow)) { ?>
	<!-- Slider -->
	<div id="slider" class="<?php if($theme_options->get( 'slideshow_layout' ) == 1) { echo 'full-width'; } elseif($theme_options->get( 'slideshow_layout' ) == 4) { echo 'fixed3 fixed2'; } elseif($theme_options->get( 'slideshow_layout' ) == 3) { echo 'fixed2'; } else { echo 'fixed'; } ?>">
		<div class="background-slider"></div>
		<div class="background">
			<div class="shadow"></div>
			<div class="pattern">
				<?php foreach($slideshow as $module) { ?>
				<?php echo $module; ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
</header>