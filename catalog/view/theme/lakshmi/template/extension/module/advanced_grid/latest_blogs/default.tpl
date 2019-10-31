<?php 
if($position == 'footer_bottom' || $position == 'footer' || $position == 'footer_top' || $position == 'footer_left' || $position == 'footer_right' || $position == 'customfooter_top' || $position == 'customfooter_bottom' || $position == 'customfooter') {
	echo '<h4>'.$module['content']['title'].'</h4>';
	echo '<div class="strip-line"></div>';
	
	echo '<div class="clearfix" style="clear: both"><div class="advanced-grid-latest-blogs">';
          foreach($module['content']['articles'] as $article) {
               echo '<div class="news clearfix">';
                    echo '<div class="image">';
                         if($article['thumb']) {
                              echo '<a href="' . $article['href'] . '" style="background-image: url(' . $article['thumb'] . ');width: ' . $module['content']['width'] . 'px;height: ' . $module['content']['height'] . 'px"></a>';
                         }
                    echo '</div>';
                    echo '<div class="title"><a href="' . $article['href'] . '">' . $article['title'] . '</a></div>';
                    if ($article['date_published']) {
                         echo '<div class="article-date-added"><i class="fa fa-calendar"></i> ' . date('m d Y', strtotime($article['date_published'])) . '</div>';
                    }
               echo '</div>';
          }
     echo '</div></div>';
} else {
	echo '<div class="box">';
		echo '<div class="box-heading">';
			echo $module['content']['title'];
		echo '</div>';
		echo '<div class="strip-line"></div>';
		echo '<div class="box-content">';
               echo '<div class="clearfix" style="clear: both"><div class="advanced-grid-latest-blogs">';
                    foreach($module['content']['articles'] as $article) {
                         echo '<div class="news clearfix">';
                              echo '<div class="image">';
                                   if($article['thumb']) {
                                        echo '<a href="' . $article['href'] . '" style="background-image: url(' . $article['thumb'] . ');width: ' . $module['content']['width'] . 'px;height: ' . $module['content']['height'] . 'px""></a>';
                                   }
                              echo '</div>';
                              echo '<div class="title"><a href="' . $article['href'] . '">' . $article['title'] . '</a></div>';
                              if ($article['date_published']) {
                                   echo '<div class="article-date-added"><i class="fa fa-calendar"></i> ' . date('m d Y', strtotime($article['date_published'])) . '</div>';
                              }
                         echo '</div>';
                    }
               echo '</div></div>';
		echo '</div>';
	echo '</div>';	
} ?>