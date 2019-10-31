<?php 
	echo '<h4>'.$module['content']['title'].'</h4>';
	echo '<div class="strip-line"></div>';
	
	echo '<div class="clearfix fashion2-newsletter" style="clear: both" id="newsletter' . $id .'">';
          if($module['content']['text'] != '') echo '<p>' . $module['content']['text'] . '</p>';
          echo '<input type="text" class="email" placeholder="' . $module['content']['input_placeholder'] . '" />';
          echo '<a class="button subscribe">' . $module['content']['subscribe_text'] . '</a>';
          if($module['content']['unsubscribe_text'] != '') {
          	echo '<a class="button unsubscribe">' . $module['content']['unsubscribe_text'] . '</a>';
          }
     echo '</div>'; ?>

<script type="text/javascript">
$(document).ready(function() {
	function Unsubscribe() {
		$.post('<?php echo $module['content']['unsubscribe_url']; ?>', 
			{ 
				email: $('#newsletter<?php echo $id; ?> .email').val() 
			}, function (e) {
				$('#newsletter<?php echo $id; ?> .email').val('');
				alert(e.message);
			}
		, 'json');
	}
	
	function Subscribe() {
		$.post('<?php echo $module['content']['subscribe_url']; ?>', 
			{ 
				email: $('#newsletter<?php echo $id; ?> .email').val() 
			}, function (e) {
				if(e.error === 1) {
					var r = confirm(e.message);
					if (r == true) {
					    $.post('<?php echo $module['content']['unsubscribe_url']; ?>', { 
					    	email: $('#newsletter<?php echo $id; ?> .email').val() 
					    }, function (e) {
					    	$('#newsletter<?php echo $id; ?> .email').val('');
					    	alert(e.message);
					    }, 'json');
					}
				} else {
					$('#newsletter<?php echo $id; ?> .email').val('');
					alert(e.message);
				}
			}
		, 'json');
	}
	
	$('#newsletter<?php echo $id; ?> .subscribe').click(Subscribe);
	$('#newsletter<?php echo $id; ?> .unsubscribe').click(Unsubscribe);
	$('#newsletter<?php echo $id; ?> .email').keypress(function (e) {
	    if (e.which == 13) {
	        Subscribe();
	    }
	});
});
</script>