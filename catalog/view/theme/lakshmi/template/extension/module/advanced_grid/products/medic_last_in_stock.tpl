<?php 
	echo '<div class="box box-with-products box-no-advanced">';
		echo '<div class="box-heading">';
			echo $module['content']['title'];
		echo '</div>';
		echo '<div class="strip-line"></div>';
		echo '<div class="clear"></div>';
		echo '<div class="box-content products">';
               echo '<div class="clearfix" style="clear: both"><div class="medic-last-in-stock">';
                    foreach($module['content']['products'] as $product) {
                         echo '<div class="product clearfix row">';
                              echo '<div class="image col-sm-6 col-md-7 col-lg-8"><a href="' . $product['href'] . '">';
                                   if($theme_options->get( 'lazy_loading_images' ) != '0') {
                                   	echo '<img src="image/catalog/blank.gif" data-echo="' . $product['thumb'] . '" alt="' . $product['name'] . '" />';
                                   } else {
                                   	echo '<img src="' . $product['thumb'] . '" alt="' .$product['name'] . '" />';
                                   }
                              echo '</a></div>'; 
                              
                              echo '<div class="right col-sm-6 col-md-5 col-lg-4">';
                              
                              if($theme_options->get( 'display_specials_countdown' ) == '1' && $product['special']) { $countdown = rand(0, 5000)*rand(0, 5000); 
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
                              <?php } 
                              
                                   echo '<div class="name"><a href="' . $product['href'] . '">' . $product['name'] . '</a></div>';
                                   echo '<div class="price">';
                                   	if (!$product['special']) {
                                   	     echo $product['price'];
                                   	} else {
                                   	     echo $product['special'];
                                   	}
                                   echo '</div>';
                                   
                                   if($theme_options->get( 'display_add_to_cart' ) != '0') {
                                        $enquiry = false; if($config->get( 'product_blocks_module' ) != '') { $enquiry = $theme_options->productIsEnquiry($product['product_id']); }
                                        if(is_array($enquiry)) { 
                                             echo '<a href="javascript:openPopup(\'' . $enquiry['popup_module'] . '\', \''.$product['product_id'] . '\')" class="button button-enquiry">';
                                                  if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'left') { echo '<img src="image/' . $enquiry['icon']. '" align="left" class="icon-enquiry" alt="Icon">'; }
                                                  echo '<span class="text-enquiry">' . $enquiry['block_name'] . '</span>';
                                                  if($enquiry['icon'] != '' && $enquiry['icon_position'] == 'right') { echo '<img src="image/' . $enquiry['icon']. '" align="right" class="icon-enquiry" alt="Icon">'; }
                                             echo '</a>';
                                        } else {
                                             echo '<a onclick="cart.add(\'' . $product['product_id'] . '\');" class="button">' . $button_cart . '</a>';
                                        }
                                   }
                              echo '</div>';
                         echo '</div>';
                    }
               echo '</div></div>';
		echo '</div>';
	echo '</div>';	 ?>