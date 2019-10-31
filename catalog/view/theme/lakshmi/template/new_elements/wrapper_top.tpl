<?php $grid_center = 12; 
if($column_left != '') $grid_center = $grid_center-3; 
if($column_right != '') $grid_center = $grid_center-3; 
$modules_old_opencart = new Modules($registry); ?>

<!-- BREADCRUMB
	================================================== -->
<div class="breadcrumb <?php if($theme_options->get( 'breadcrumb_layout' ) == 1) { echo 'full-width'; } elseif($theme_options->get( 'breadcrumb_layout' ) == 4) { echo 'fixed3 fixed2'; } elseif($theme_options->get( 'breadcrumb_layout' ) == 3) { echo 'fixed2'; } else { echo 'fixed'; } ?>">
	<div class="background-breadcrumb"></div>
	<div class="background" <?php $breadcrumb = $modules_old_opencart->getModules('breadcrumb'); if( count($breadcrumb) ) { foreach ($breadcrumb as $module) { echo $module; } } ?>>
		<div class="shadow"></div>
		<div class="pattern">
			<div class="container">
				<div class="clearfix">
				     <?php if(isset($product_page) && $theme_options->get( 'product_breadcrumb' ) != '2') { ?>
				     <?php $product_prev_next = $theme_options->getNextPrevProduct( $product_id ); ?>
				          <div class="row">
				               <div class="col-md-3 hidden-xs hidden-sm">
				                    <?php if(is_array($product_prev_next['prev'])) { ?>
				                         <?php if($theme_options->get( 'product_breadcrumb' ) == '1') { ?>
     				                    <div class="next-product-2 clearfix">
     				                         <a href="<?php echo $product_prev_next['prev']['href']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $product_prev_next['prev']['name']; ?>" class="button-previous-next"><?php if($theme_options->get( 'previous_product_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'previous_product_text', $config->get( 'config_language_id' ) ); } else { echo 'Previous product'; } ?></a>
     				                    </div>
     				                    <?php } else { ?>
     				                    <div class="next-product clearfix">
     				                         <div class="image"><a href="<?php echo $product_prev_next['prev']['href']; ?>"><img src="<?php echo $product_prev_next['prev']['thumb']; ?>" alt="<?php echo $product_prev_next['prev']['name']; ?>"></a></div>
     				                         <div class="right">
     				                              <div class="name"><a href="<?php echo $product_prev_next['prev']['href']; ?>"><?php echo $product_prev_next['prev']['name']; ?></a></div>
     				                              <div class="price"><?php if($product_prev_next['prev']['special']) { echo $product_prev_next['prev']['special']; } else { echo $product_prev_next['prev']['price']; } ?></div>
     				                         </div>
     				                    </div>
     				                    <?php } ?>
				                    <?php } ?>
				               </div>
				               
				               <div class="col-md-6">
				               		<?php foreach ($breadcrumbs as $breadcrumb) { ?>
				               		<?php $heading_title = $breadcrumb['text']; ?>
				               		<?php } ?>
				               		
				                    <h1 id="title-page"><?php echo $heading_title; ?>
				                    	<?php if(isset($weight)) { if ($weight) { ?>
				                    	&nbsp;(<?php echo $weight; ?>)
				                    	<?php } } ?>
				                    </h1>
				                    
				                    <ul>
				                    	<?php foreach ($breadcrumbs as $breadcrumb) { ?>
				                    	<li><a href="<?php echo $breadcrumb['href']; ?>"><?php if($breadcrumb['text'] != '<i class="fa fa-home"></i>') { echo $breadcrumb['text']; } else { if($theme_options->get( 'home_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'home_text', $config->get( 'config_language_id' ) ); } else { echo 'Home'; } } ?></a></li>
				                    	<?php } ?>
				                    </ul>
				               </div>
				               
     					     <div class="col-md-3 hidden-xs hidden-sm">
     					          <?php if(is_array($product_prev_next['next'])) { ?>
          					          <?php if($theme_options->get( 'product_breadcrumb' ) == '1') { ?>
          					          <div class="next-product-2 right clearfix">
          					               <a href="<?php echo $product_prev_next['next']['href']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $product_prev_next['next']['name']; ?>" class="button-previous-next"><?php if($theme_options->get( 'next_product_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'next_product_text', $config->get( 'config_language_id' ) ); } else { echo 'Next product'; } ?></a>
          					          </div>
          					          <?php } else { ?>
          					          <div class="next-product right clearfix">
          					               <div class="image"><a href="<?php echo $product_prev_next['next']['href']; ?>"><img src="<?php echo $product_prev_next['next']['thumb']; ?>" alt="<?php echo $product_prev_next['next']['name']; ?>"></a></div>
          					               <div class="right">
          					                    <div class="name"><a href="<?php echo $product_prev_next['next']['href']; ?>"><?php echo $product_prev_next['next']['name']; ?></a></div>
          					                    <div class="price"><?php if($product_prev_next['next']['special']) { echo $product_prev_next['next']['special']; } else { echo $product_prev_next['next']['price']; } ?></div>
          					               </div>
          					          </div>
          					          <?php } ?>
     					          <?php } ?>
     					     </div>
     					</div>
					<?php } else { ?>
						 <?php foreach ($breadcrumbs as $breadcrumb) { ?>
						 <?php $heading_title = $breadcrumb['text']; ?>
						 <?php } ?>
						 
					     <h1 id="title-page"><?php echo $heading_title; ?>
					     	<?php if(isset($weight)) { if ($weight) { ?>
					     	&nbsp;(<?php echo $weight; ?>)
					     	<?php } } ?>
					     </h1>
					     
					     <ul>
					     	<?php foreach ($breadcrumbs as $breadcrumb) { ?>
					     	<li><a href="<?php echo $breadcrumb['href']; ?>"><?php if($breadcrumb['text'] != '<i class="fa fa-home"></i>') { echo $breadcrumb['text']; } else { if($theme_options->get( 'home_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'home_text', $config->get( 'config_language_id' ) ); } else { echo 'Home'; } } ?></a></li>
					     	<?php } ?>
					     </ul>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MAIN CONTENT
	================================================== -->
<div class="main-content <?php if($theme_options->get( 'content_layout' ) == 1) { echo 'full-width'; } elseif($theme_options->get( 'content_layout' ) == 4) { echo 'fixed3 fixed2'; } elseif($theme_options->get( 'content_layout' ) == 3) { echo 'fixed2'; } else { echo 'fixed'; } ?> inner-page">
	<div class="background-content"></div>
	<div class="background">
		<div class="shadow"></div>
		<div class="pattern">
			<div class="container">
				<?php 
				$preface_left = $modules_old_opencart->getModules('preface_left');
				$preface_right = $modules_old_opencart->getModules('preface_right');
				?>
				<?php if( count($preface_left) || count($preface_right) ) { ?>
				<div class="row">
					<div class="col-sm-9">
						<?php
						if( count($preface_left) ) {
							foreach ($preface_left as $module) {
								echo $module;
							}
						} ?>
					</div>
					
					<div class="col-sm-3">
						<?php
						if( count($preface_right) ) {
							foreach ($preface_right as $module) {
								echo $module;
							}
						} ?>
					</div>
				</div>
				<?php } ?>
				
				<?php 
				$preface_fullwidth = $modules_old_opencart->getModules('preface_fullwidth');
				if( count($preface_fullwidth) ) {
					echo '<div class="row"><div class="col-sm-12">';
					foreach ($preface_fullwidth as $module) {
						echo $module;
					}
					echo '</div></div>';
				} ?>
				
				<div class="row">
					<?php 
					$columnleft = $modules_old_opencart->getModules('column_left');
					if( count($columnleft) ) { ?>
					<div class="col-md-3" id="column-left">
						<?php
						foreach ($columnleft as $module) {
							echo $module;
						}
						?>
					</div>
					<?php } ?>
					
					<?php $grid_center = 12; if( count($columnleft) ) { $grid_center = 9; } ?>
					<div class="col-md-<?php echo $grid_center; ?>">
						<?php 
						$content_big_column = $modules_old_opencart->getModules('content_big_column');
						if( count($content_big_column) ) { 
							foreach ($content_big_column as $module) {
								echo $module;
							}
						} ?>
						
						<?php 
						$content_top = $modules_old_opencart->getModules('content_top');
						if( count($content_top) ) { 
							foreach ($content_top as $module) {
								echo $module;
							}
						} ?>
						
						<div class="row">
							<?php 
							$grid_content_top = 12; 
							$grid_content_right = 3;
							$column_right = $modules_old_opencart->getModules('column_right'); 
							if( count($column_right) ) {
								if($grid_center == 9) {
									$grid_content_top = 8;
									$grid_content_right = 4;
								} else {
									$grid_content_top = 9;
									$grid_content_right = 3;
								}
							}
							?>
							<div class="col-md-<?php echo $grid_content_top; ?> center-column <?php if(isset($background_status)) { echo 'content-without-background'; } else { echo 'content-with-background'; } ?>" id="content">

								<?php if (isset($error_warning)) { ?>
									<?php if ($error_warning) { ?>
									<div class="warning">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<?php echo $error_warning; ?>
									</div>
									<?php } ?>
								<?php } ?>
								
								<?php if (isset($success)) { ?>
									<?php if ($success) { ?>
									<div class="success">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<?php echo $success; ?>
									</div>
									<?php } ?>
								<?php } ?>