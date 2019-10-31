<?php 
if($registry->has('theme_options') == false) { 
	header("location: themeinstall/index.php"); 
	exit; 
} 

$theme_options = $registry->get('theme_options'); ?>

<div class="box box-with-categories <?php if($theme_options->get( 'category_box_style' ) == '3') { echo 'category-box-type-4 category-box-type-2'; } ?> <?php if($theme_options->get( 'category_box_style' ) == '2') { echo 'category-box-type-3 category-box-type-2'; } ?> <?php if($theme_options->get( 'category_box_style' ) == '1') { echo 'category-box-type-2'; } ?> box-no-advanced">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="strip-line"></div>
  <div class="box-content box-category">
    <ul class="accordion" id="accordion-category">
      <?php $i = 0; foreach ($categories as $category) { $i++; $first = $category['category_id']; ?>
      <li class="panel">
        <?php if ($category['category_id'] == $category_id) { ?>
        <a href="<?php echo $category['href']; ?>" class="active"><?php echo $category['name']; ?></a>
        <?php } else { ?>
        <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
        <?php } ?>
        <?php $categories_2 = $theme_options->getCategories($category['category_id']); ?>
        <?php if ($categories_2) { ?>
        <span class="head"><a style="float:right;padding-right:5px" class="accordion-toggle<?php if ($category['category_id'] != $category_id) { echo ' collapsed'; } ?>" data-toggle="collapse" data-parent="#accordion-category" href="#category<?php echo $i; ?>"><span class="plus">+</span><span class="minus">-</span></a></span>
        <?php if(!empty($categories_2)) { ?>
        <div id="category<?php echo $i; ?>" class="panel-collapse collapse <?php if ($category['category_id'] == $category_id) { echo 'in'; } ?>" style="clear:both">
        	<ul>
		       <?php foreach ($categories_2 as $child) { $second = $child['category_id']; ?>
		        <li>
		         <?php if ($child['category_id'] == $child_id) { ?>
		         <a href="<?php echo $child['href']; ?>" class="active"><?php echo $child['name']; ?></a>
		         <?php } else { ?>
		         <a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a>
		         <?php } ?>
		         <?php $categories_3 = $theme_options->getCategories($child['category_id']); ?>
		         <?php if(count($categories_3) > 0) { ?>
		         	<span class="head"><a style="float:right;padding-right:5px" class="accordion-toggle <?php if ($child['category_id'] != $child_id) { ?>collapsed<?php } ?>" data-toggle="collapse" data-parent="#accordion-category2" href="#category<?php echo $i . $child['category_id']; ?>"><span class="plus">+</span><span class="minus">-</span></a></span>
		         	<div id="category<?php echo $i . $child['category_id']; ?>" class="panel-collapse collapse <?php if ($child['category_id'] == $child_id) { echo 'in'; } ?>" style="clear:both">
			         	<ul>
			         	<?php foreach($categories_3 as $subcategory) { $link = $first . '_' . $second . '_' . $subcategory['category_id']; ?>
			         		<li><a href="<?php echo $theme_options->link($link); ?>" <?php if($link == $_GET['path']) { echo 'class="active"'; } ?>>&nbsp; <?php echo $subcategory['name']; ?></a></li>
			         	<?php } ?>
			         	</ul>
			         </div>
		         <?php } ?>
		        </li>
		       <?php } ?>
	        </ul>
        </div>
        <?php } ?>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
