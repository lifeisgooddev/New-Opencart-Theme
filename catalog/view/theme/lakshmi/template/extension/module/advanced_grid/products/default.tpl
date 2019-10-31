<?php 
if($position == 'footer_bottom' || $position == 'footer' || $position == 'footer_top' || $position == 'footer_left' || $position == 'footer_right' || $position == 'customfooter_top' || $position == 'customfooter_bottom' || $position == 'customfooter') {
	echo '<h4>'.$module['content']['title'].'</h4>';
	echo '<div class="strip-line"></div>';
	
	echo '<div class="clearfix" style="clear: both"><div class="advanced-grid-products">';
          foreach($module['content']['products'] as $product) {
               echo '<div class="product clearfix">';
                    echo '<div class="image"><a href="' . $product['href'] . '">';
                         if($theme_options->get( 'lazy_loading_images' ) != '0') {
                         	echo '<img src="image/catalog/blank.gif" data-echo="' . $product['thumb'] . '" alt="' . $product['name'] . '" />';
                         } else {
                         	echo '<img src="' . $product['thumb'] . '" alt="' .$product['name'] . '" />';
                         }
                    echo '</a></div>';
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
               echo '</div>';
          }
     echo '</div></div>';
} else {
	echo '<div class="box">';
		echo '<div class="box-heading">';
			echo $module['content']['title'];
		echo '</div>';
		echo '<div class="strip-line"></div>';
		echo '<div class="box-content products">';
               echo '<div class="clearfix" style="clear: both"><div class="advanced-grid-products">';
                    foreach($module['content']['products'] as $product) {
                         echo '<div class="product clearfix">';
                              echo '<div class="image"><a href="' . $product['href'] . '">';
                                   if($theme_options->get( 'lazy_loading_images' ) != '0') {
                                   	echo '<img src="image/catalog/blank.gif" data-echo="' . $product['thumb'] . '" alt="' . $product['name'] . '" />';
                                   } else {
                                   	echo '<img src="' . $product['thumb'] . '" alt="' .$product['name'] . '" />';
                                   }
                              echo '</a></div>';
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
                         echo '</div>';
                    }
               echo '</div></div>';
		echo '</div>';
	echo '</div>';	
} ?>