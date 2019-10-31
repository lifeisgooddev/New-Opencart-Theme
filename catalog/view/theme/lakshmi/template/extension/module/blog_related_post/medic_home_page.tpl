<?php
if($registry->has('theme_options') == false) { 
 header("location: themeinstall/index.php"); 
 exit; 
}
$theme_options = $registry->get('theme_options');
?>
<div class="box blog-module box-with-products box-no-advanced">
    <div class="box-heading"><?php echo $heading_title; ?></div>
    <div class="clear"></div>
    <div class="box-content">
        <?php if(!empty($articles)):?> 
        <div class="medic-news row">
            <?php foreach($articles as $article):?>
            <div class="col-sm-6 col-xs-12">
                <div class="media clearfix">
                        <?php if($article['thumb']):?>
                        <div  class="thumb-holder">
                            <a href="<?php echo $article['href']; ?>"><img alt="" src="<?php echo $article['thumb'] ?>"></a>
                        </div>
                        <?php endif; ?>
                        
                        <div class="media-body">
                             <div class="bottom">
                                 <div class="date-published"><?php echo date('d.m.Y', strtotime($article['date_published'])) ?></div>
                                 <h5><a href="<?php echo $article['href']; ?>"><?php echo $article['title'] ?></a></h5>
                                 <div class="post-description">
                                     <?php echo $article['description']?>
                                 </div>
                                 
                                 <a href="<?php echo $article['href']; ?>" class="button"><?php echo $button_read_more ?></a>
                             </div>
                        </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>