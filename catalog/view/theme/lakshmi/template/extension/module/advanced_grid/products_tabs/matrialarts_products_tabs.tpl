<?php 
if($registry->has('theme_options') == true) { 

$class = 3; 
$all = 4;
$id = rand(0, 5000)*rand(5000, 50000);

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');

if($module['content']['limit'] == 6) { $class = 2; $all = 6; }
if($module['content']['limit'] == 5) { $class = 25; $all = 5; }
if($module['content']['limit'] == 3) { $class = 4;  $all = 3; }
if($module['content']['limit'] == 2) { $class = 6; $all = 2; }
if($module['content']['limit'] == 1) { $class = 12; $all = 1; } ?>

<div class="matrialarts-products-tabs">
     <div class="row">
          <div class="col-sm-3">
               <div class="description"><?php echo $module['content']['description']; ?></div>
               <ul id="matrialtab<?php echo $id; ?>" class="select-tab">
               	<?php $i = 0; foreach($module['content']['products_tabs'] as $product_tab) {
               		echo '<li'.($i == 0 ? ' class="active"' : '').'><a href="#matrialartstabs-'.$id.'-'.$i.'">'.$product_tab['name'].'</a></li>';
               	$i++; } ?>
               </ul>
          </div>
          
          <div class="col-sm-9">
               <div class="tab-content clearfix">
                    <?php $s = 0; foreach($module['content']['products_tabs'] as $product_tab) { ?>
                    <div class="tab-pane <?php if($s == 0) { echo 'active'; } ?>" id="matrialartstabs-<?php echo $id.'-'.$s; ?>">
                         <div class="box clearfix box-with-products without-heading">
                           <div class="box-content products">
                             <div class="box-product">
                             	<div id="myCarousel<?php echo $id; ?>">
                             		<!-- Carousel items -->
                             		<div class="carousel-inner">
                             			<?php $i = 0; $row_fluid = 0; $item = 0; foreach ($product_tab['products'] as $product) { $row_fluid++; ?>
                         	    			<?php if($i == 0) { $item++; echo '<div class="active item"><div class="product-grid"><div class="row">'; } ?>
                         	    			<?php $r=$row_fluid-floor($row_fluid/$all)*$all; if($row_fluid>$all && $r == 1) { echo '</div><div class="row">'; } ?>
                         	    			<div class="col-sm-<?php echo $class; ?> <?php if($class != 12) { ?>col-xs-6<?php } ?> <?php if($class == 2) { echo 'col-md-25 col-lg-2 col-sm-3 '; } if($class == 2 && $r == 0) { echo 'hidden-md hidden-sm'; } if($class == 2 && $r == 5) { echo 'hidden-sm'; } ?> <?php if($class == 25) { echo 'col-md-25 col-lg-25 col-sm-3 '; } if($class == 25 && $r == 0) { echo 'hidden-sm'; } ?>">
                         	    				<?php include('catalog/view/theme/'.$config->get('theme_' . $config->get('config_theme') . '_directory').'/template/new_elements/product.tpl'); ?>
                         	    			</div>
                             			<?php $i++; } ?>
                             			<?php if($i > 0) { echo '</div></div></div>'; } ?>
                             		</div>
                         		</div>
                             </div>
                           </div>
                         </div>
                    </div>
                    <?php $s++; } ?>
               </div>
          </div>
     </div>     
</div>

<script type="text/javascript">
$('#matrialtab<?php echo $id; ?> a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>
<?php } ?>