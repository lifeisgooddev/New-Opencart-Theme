<div class="standard-body<?php if($disable_on_desktop == 1) { echo ' hidden-lg hidden-md'; } ?> <?php if($disable_on_mobile == 1) { echo ' hidden-sm hidden-xs'; } ?>" id="header-notice-<?php echo $id; ?>">
     <div class="header-notice full-width clearfix">
          <a href="#" class="close-notice"></a>
          <div class="container">
               <p><?php echo $text; ?></p>
          </div>
     </div>
</div>

<script type="text/javascript">
      var css_tpl = '<style type="text/css">';
      <?php if($background_color != '') { ?>
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice {';
      css_tpl += '     background: <?php echo $background_color; ?>;';
      css_tpl += '}';
      <?php } ?>
      
      <?php if($text_color != '') { ?>
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice,';
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice a {';
      css_tpl += '     color: <?php echo $text_color; ?>;';
      css_tpl += '}';
      <?php } ?>
      
      <?php if($text_link_hover_color != '') { ?>
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice a:hover {';
      css_tpl += '     color: <?php echo $text_link_hover_color; ?>;';
      css_tpl += '}';
      <?php } ?>
      
      <?php if($close_button_background_color != '') { ?>
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice a.close-notice {';
      css_tpl += '     background: <?php echo $close_button_background_color; ?>;';
      css_tpl += '}';
      <?php } ?>
      
      <?php if($close_button_hover_background_color != '') { ?>
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice a.close-notice:hover {';
      css_tpl += '     background: <?php echo $close_button_hover_background_color; ?>;';
      css_tpl += '}';
      <?php } ?>
      
      <?php if($close_button_text_color != '') { ?>
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice a.close-notice {';
      css_tpl += '     color: <?php echo $close_button_text_color; ?>;';
      css_tpl += '}';
      <?php } ?>
      
      <?php if($close_button_hover_text_color != '') { ?>
      css_tpl += '#header-notice-<?php echo $id; ?> .header-notice a.close-notice:hover {';
      css_tpl += '     color: <?php echo $close_button_hover_text_color; ?>;';
      css_tpl += '}';
      <?php } ?>
      css_tpl += '</style>'
    $("head").append(css_tpl);
</script>

<script type="text/javascript">
     <?php if($show_only_once == 1) { ?>
     if (localStorage.getItem('displayNotice') != 'yes') {
     <?php } ?>
     
     $("#header-notice-<?php echo $id; ?> .header-notice").show();
     
     $('#header-notice-<?php echo $id; ?> .close-notice').on('click', function () {
          <?php if($show_only_once == 1) { ?>
          localStorage.setItem('displayNotice', 'yes');
          <?php } ?>
          $("#header-notice-<?php echo $id; ?> .header-notice").hide();
          return false;
     });
     
     <?php if($show_only_once == 1) { ?>
     } 
     <?php } ?>
</script>