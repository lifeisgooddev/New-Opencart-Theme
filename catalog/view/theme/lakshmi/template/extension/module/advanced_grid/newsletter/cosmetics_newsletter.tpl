<div class="newsletter cosmetics-newsletter clearfix row" id="newsletter<?php echo $id; ?>">
     <div class="col-sm-4">
          <div class="heading">
               <img src="image/catalog/cosmetics/icon-newsletter.png" alt="Newsletter">
               <p><?php echo $module['content']['title']; ?></p>
          </div>
     </div>
     
     <div class="content col-sm-4">
          <p><?php echo $module['content']['text']; ?></p>
     </div>
     
     <div class="inputs col-sm-4">
          <input type="text" class="email" placeholder="<?php echo $module['content']['input_placeholder']; ?>" />
          <a class="button btn-default subscribe"><?php echo $module['content']['subscribe_text']; ?></a>
     </div>
</div>

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