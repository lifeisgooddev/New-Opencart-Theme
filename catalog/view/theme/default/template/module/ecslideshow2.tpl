<div class="ecslideshow2 <?php echo (isset($support_rtl) && $support_rtl)?'rtl':'';?>" style="width:<?php echo $module_width;?>;height:<?php echo $module_height;?>">
	<div class="camera_wrap <?php echo $skin;?>" id="ecslideshow2<?php echo $module;?>">
		<?php
		if(isset($slides) && !empty($slides)){
			foreach($slides as $slide){
				$params = isset($slide['params'])?$slide['params']:array();
				$caption_effect = (isset($params['caption_alignment']) && $params['caption_alignment'] !='3')?$params['caption_alignment']:$caption_effect;
				$image_alignment = (isset($params['image_alignment']) && $params['image_alignment'] !='3')?' data-alignment="'.$params['image_alignment'].'"':"";
				$slider_easing = (isset($params['easing']) && $params['easing'] !='3')?' data-easing="'.$params['easing'].'"':"";
				$effect = (isset($params['effect']) && $params['effect'] !='3')?' data-fx="'.$params['effect'].'"':"";
				$portrait = (isset($params['portrait']) && $params['portrait'])?' data-portrait="'.$params['portrait'].'"':"";
				$show_caption = (isset($params['show_caption']) && $params['show_caption'] !='3')?(bool)$params['show_caption']:$show_caption;
				$show_link = (isset($params['show_link']) && $params['show_link'])?' data-link="'.$slide["link"].'"':"";
				$caption_class = (isset($params['caption_class']) && $params['caption_class'])?$params["caption_class"]:"";

				$show_category = (isset($params['show_category']) && $params['show_category']!='3')?(bool)$params['show_category']:$show_category;
				$show_image = (isset($params['show_image']) && $params['show_image']!='3')?(bool)$params['show_image']:$show_image;
				$show_product_name = (isset($params['show_product_name']) && $params['show_product_name']!='3')?(bool)$params['show_product_name']:$show_product_name;
				$show_price = (isset($params['show_price']) && $params['show_price']!='3')?(bool)$params['show_price']:$show_price;
				$show_addtocart = (isset($params['show_addtocart']) && $params['show_addtocart']!='3')?(bool)$params['show_addtocart']:$show_addtocart;
				$show_product_description = (isset($params['show_product_description']) && $params['show_product_description']!='3')?(bool)$params['show_product_description']:$show_product_description;

				?>
 				<div data-thumb="<?php echo $slide["thumb"] ?>" data-src="<?php echo $slide["image"] ?>"<?php echo $image_alignment.$slider_easing.$effect.$portrait.$show_link;?>>
 					<!--
 					<div class="fadeIn camera_effected" style="position:absolute;">The text of your html element</div>-->
 					<?php if($show_caption){ ?>
 					<div style="position:absolute; top:<?php echo isset($params['top'])?$params['top']:0;?>%; left:<?php echo isset($params['left'])?$params['left']:0;?>%; width:<?php echo isset($params['caption_width'])?$params['caption_width']:25;?>%" class="fadeIn camera_caption">
	                    <div class="caption">
	                    	<h2><a href="<?php echo $slide["link"]; ?>"><span><?php echo $slide["caption"]; ?></span></a></h2>
	                    </div>
	                    <div class="description">
	                    	<?php echo $slide["description"]; ?>
	                    </div>
	                </div>
	                <?php } ?>
 					 <?php if(isset($slide['products']) && !empty($slide['products']) ){ ?>
	                 <div class="camera_caption <?php echo $caption_effect;?> <?php echo $caption_class;?> product-info-container">
	                 	<div class="product-container">
	                 		<div class="row-fluid-ns rcrcx">
	                 		<?php
	                 		  $i = 1;
	                 		  $total = count($slide['products']);
	                 		  $span = 12/$total;
	                 		  $prefix_class = "";
	                 		  if($total == 1){
	                 		  	$prefix_class = " fullwidth ";
	                 		  }
	                 		  $class = "span".$span;
	                 		  foreach($slide['products'] as $product){
	                 		  	$i++;
	                 		?>
	                 		<div class="product-content-detailed <?php echo  $prefix_class.$class; ?>">
	                 			<div class="item-column">
	                 				<div class="spacer">
	                 					<?php if($show_image) { ?>
	                 					<div class="product-meta-info">
	                 						<div class="product-thumbnail">
	                 							<a title="<?php echo $product['name']; ?>" href="<?php echo $product['link']; ?>">
	                 								<img alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="product-image" itemprop="image" src="<?php echo $product['thumb'];?>"></a>
	                 						</div>
	                 					</div>
	                 					<?php } ?>
	                 					<div class="product-business">
	                 						<?php if($show_product_name) { ?>
	                 						<h3 itemprop="name" class="product-name">
	                 							<a title="<?php echo $product['name']; ?>" href="<?php echo $product['link']; ?>" itemprop="url"><?php echo $product['name']; ?></a></h3>
	                 						<?php } ?>
	                 						<?php if ($product['category_link'] && $show_category) { ?>
												<div class="category-name"><?php echo $this->language->get("text_category");?> <a class="category-name-link" title="<?php echo $product['category_name'];?>" href="<?php echo $product['category_link'];?>"><span><?php echo $product['category_name'];?></span></a></div>
											<?php } ?>
											<?php if( $show_price ) { ?>
	                 						<div class="product-prices">

	                 							<?php if ($product['price']) { ?>
													<div class="price">
													  <?php echo $this->language->get("text_price");?>
													  <?php if (!$product['special']) { ?>
													  <?php echo $product['price']; ?>
													  <?php } else { ?>
													  <span class="price-old"><?php echo $product['price']; ?></span> <span class="price-new"><?php echo $product['special']; ?></span>
													  <?php } ?>
													</div>
												<?php } ?>
	                 						</div>
	                 						<?php } ?>
	                 						<?php if ($product['rating']) { ?>
												<div class="rating"><img src="catalog/view/theme/default/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
											<?php } ?>
											<?php if($product['short_description'] && $show_product_description){ ?>
											<div class="product-short-desc"><?php echo $product['short_description'];?></div>
											<?php } ?>
											<?php if($show_addtocart) { ?>
	                 						<div class="addtocart-area">
	                 							<div class="cart"><input type="button" value="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');" class="btn btn-success" /></div>
	                 						</div>
	                 						<?php } ?>
	                 					</div>
	                 					<div class="clear"></div>
	                 				</div>
	                 			</div>
	                 		</div>
	                 		<?php } ?>
	                 		<div class="clear"></div>
	                 	</div>
	                 	</div>
	                 </div>
	                <?php } ?>
	            </div>
				<?php
			}
		}
		?>

	</div>
	<br class="clear clr"/>
</div>
<style type="text/css">
	<?php if($background_color){ ?>
		.camera_caption > div {
			background: #<?php echo $background_color;?>;
		}
	<?php } ?>
	<?php if($text_color){ ?>
		.camera_caption, .camera_caption p, .camera_caption div{
		    color:#<?php echo $text_color;?>;
		}
		.camera_caption .product-container p, .camera_caption .product-container div{
		    color:#000000;
		}
	<?php } ?>
	<?php if($link_color){ ?>
		.camera_caption a{
		    color:#<?php echo $link_color;?>;
		}
	<?php } ?>
</style>

 <script type="text/javascript">
 <?php if( $enable_async && !defined("_LOADED_EC_SLIDESHOW") ) { ?>
    var ecslideshow2s = new Array();
    var ecindex_slideshow = 0;
    function runecslideshow2(){
        if(ecslideshow2s.length){
            for(i=0; i< ecslideshow2s.length; i++){
                ecslideshow2s[i]();
            }
        }
    }
    <?php } ?>
    <?php if( $enable_async ) { ?>

    ecslideshow2s[ecindex_slideshow] = function loadSlideshow<?php echo $module;?>(){

    <?php } else { ?>
      function  loadSlideshow<?php echo $module;?>(){
    <?php } ?>
			jQuery('#ecslideshow2<?php echo $module;?>').camera({
				thumbnails: <?php echo $thumbnails==1?'true':'false';?>,
				alignment: '<?php echo $alignment;?>',
				autoAdvance: <?php echo $auto_advance==1?'true':'false';?>,
				mobileAutoAdvance: <?php echo $mobile_auto_advance==1?'true':'false';?>,
				barDirection: '<?php echo $bar_direction;?>',
				barPosition: '<?php echo $bar_position;?>',
				cols: <?php echo $cols;?>,
				easing: '<?php echo $easing;?>',
				fx: '<?php echo $fx;?>',
				gridDifference: <?php echo $grid_difference;?>,
				imagePath: '<?php echo $base."catalog/view/javascript/ecslideshow2/"; ?>',
				height: '<?php echo $height;?>',
				hover: <?php echo $hover==1?'true':'false';?>,
				loader: '<?php echo $loader;?>',
				loaderColor: '<?php echo $loader_color;?>',
				loaderBgColor: '<?php echo $loader_bg_color;?>',
				loaderOpacity: <?php echo $loader_opacity;?>,
				minHeight: '<?php echo $min_height;?>',
				navigation: <?php echo $navigation==1?'true':'false';?>,
				navigationHover: <?php echo $navigation_hover==1?'true':'false';?>,
				overlayer: <?php echo $overlayer==1?'true':'false';?>,
				pagination: <?php echo $pagination==1?'true':'false';?>,
				playPause: <?php echo $play_pause==1?'true':'false';?>,
				pieDiameter: <?php echo $pie_diameter;?>,
				piePosition: '<?php echo $pie_position;?>',
				rows: <?php echo $rows;?>,
				slicedCols: <?php echo $sliced_cols;?>,
				slicedRows: <?php echo $sliced_rows?>,
				slideOn: '<?php echo $slide_on;?>',
				thumbnails: <?php echo $thumbnails==1?'true':'false';?>,
				time: <?php echo $time;?>,
				transPeriod: <?php echo $trans_period;?>
			});
};
	<?php if( $enable_async ) { ?>
   	 ecindex_slideshow++;   
    <?php } ?>
</script>
<script type="text/javascript">
<?php if($enable_async){ ?>
	<?php if( !defined("_LOADED_EC_SLIDESHOW") ) { ?>
    <?php define("_LOADED_EC_SLIDESHOW", 1); ?>
	//this function will work cross-browser for loading scripts asynchronously
    $(document).ready(function() {
        $.getScript("<?php echo isset($script)?$script:""; ?>", runecslideshow2)
    });
    
    <?php } ?>
<?php }else{ ?>
	jQuery(function(){
		loadSlideshow<?php echo $module;?>();
	});
<?php } ?>
</script>