$(document).ready(function() {
     // Wrap selects
     $("select").wrap("<div class='select'></div>");
     
     // Filter box
     $(".mfilter-box").addClass("box-no-advanced");
     
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();
		
		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});
	
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && responsive_design == 'yes' && $(window).width() < 768) {
		var i = 0;
		var produkty = [];
		
		$( ".box-product .carousel .item" ).each(function() {
			$( this ).find( ".product-grid .row > div" ).each(function() {
				if(i > 1) {
					produkty.push($(this).html());
				}
				
				i++;
			});
			for ( var s = i-3; s >= 0; s--, s-- ) {
				var html = "<div class='item'><div class='product-grid'><div class='row'>";
				if (produkty[s-1] != undefined) {
					html += "<div class='col-xs-6'>" + produkty[s-1] + "</div>";
				} else {
					html += "<div class='col-xs-6'>" + produkty[s+1] + "</div>";
				}
								
				if (produkty[s] != undefined) {
					html += "<div class='col-xs-6'>" + produkty[s] + "</div>";
				} else {
					html += "<div class='col-xs-6'>" + produkty[s+1] + "</div>";
				}
				html += "</div></div></div>";
				
				$( this ).after( html );
			}
			
			produkty = [];
			i = 0;
		});
	}
	
	/* Search */
	$('.button-search, .header-type-3 #top .search_form, .header-type-8 .search_form').bind('click', function() {
		url = $('base').attr('href') + 'index.php?route=product/search';
				 
		var search = $('header input[name=\'search\']').val();
		
		if (search) {
			url += '&search=' + encodeURIComponent(search);
		}
		
		var category_id = $('header select[name=\'category_id\']').val();
		
		if (category_id) {
			url += '&category_id=' + encodeURIComponent(category_id);
		}
		
		location = url;
	});
	
	$('header input[name=\'search\']').bind('keydown', function(e) {
		if (e.keyCode == 13) {
			url = $('base').attr('href') + 'index.php?route=product/search';
			 
			var search = $('header input[name=\'search\']').val();
			
			if (search) {
				url += '&search=' + encodeURIComponent(search);
			}
			
			location = url;
		}
	});
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
	    	$('.scrollup').fadeIn();
	    } else {
			$('.scrollup').fadeOut();
		}
	}); 
	
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
	
	/* Search MegaMenu */
	$('.button-search2').bind('click', function() {
		url = $('base').attr('href') + 'index.php?route=product/search';
				 
		var search = $('.container-megamenu input[name=\'search2\']').val();
		
		if (search) {
			url += '&search=' + encodeURIComponent(search);
		}
		
		location = url;
	});
	
	$('.container-megamenu input[name=\'search2\']').bind('keydown', function(e) {
		if (e.keyCode == 13) {
			url = $('base').attr('href') + 'index.php?route=product/search';
			 
			var search = $('.container-megamenu input[name=\'search2\']').val();
			
			if (search) {
				url += '&search=' + encodeURIComponent(search);
			}
			
			location = url;
		}
	});
	
	// tooltips on hover
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	
	// Makes tooltips work on ajax generated content
	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});	
	
	// Mobile categories	
	$('.box-with-categories .box-heading').on('click', function () {
		$(this).parent().addClass("active");
		return false;
	});
	
	// Mobile vertical megamenu	
	$('.vertical').on('click', function () {
		$(this).addClass("active");
	});
	
	FixedTop();
});

$(window).resize(function() {
     FixedTop();
});

$(window).scroll(function() {
     FixedTop();
});

function FixedTop() {
	var width = $('header #top').width();
	var width3 = $('header #top .background').width();
	var width2 = $('header').width();
	if(width3 != width2) {
		$('.sticky-header').css("background", "none");
	}
	$('.sticky-header').css("width", width).css("left", "50%").css("right", "auto").css("margin-left",  "-" + Math.ceil(width/2) + "px").css("margin-right",  "-" + Math.ceil(width/2) + "px");
	
     if($(window).width() >= 1160 && $(window).scrollTop() > 280) {
          $('.sticky-header').addClass('fixed-header');
     } else { 
          $('.sticky-header').removeClass('fixed-header');
     }
}

function getURLVar(key) {
    var value = [];
    
    var query = String(document.location).split('?');
    
    if (query[1]) {
        var part = query[1].split('&');

        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');
            
            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }
        
        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
} 
	
// Cart add remove functions	
var cart = {
	'add': function(product_id, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/add',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			success: function(json) {			
				if (json['redirect']) {
					location = json['redirect'];
				}
				
				if (json['success']) {
				     $.notify({
				     	message: json['success'],
				     	target: '_blank'
				     },{
				     	// settings
				     	element: 'body',
				     	position: null,
				     	type: "info",
				     	allow_dismiss: true,
				     	newest_on_top: false,
				     	placement: {
				     		from: "top",
				     		align: "right"
				     	},
				     	offset: 20,
				     	spacing: 10,
				     	z_index: 2031,
				     	delay: 5000,
				     	timer: 1000,
				     	url_target: '_blank',
				     	mouse_over: null,
				     	animate: {
				     		enter: 'animated fadeInDown',
				     		exit: 'animated fadeOutUp'
				     	},
				     	onShow: null,
				     	onShown: null,
				     	onClose: null,
				     	onClosed: null,
				     	icon_type: 'class',
				     	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
				     		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
				     		'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
				     		'<div class="progress" data-notify="progressbar">' +
				     			'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
				     		'</div>' +
				     		'<a href="{3}" target="{4}" data-notify="url"></a>' +
				     	'</div>' 
				     });
				     					
					$('#cart_block #cart_content').load('index.php?route=common/cart/info #cart_content_ajax');
					$('#cart_block #total_price_ajax').load('index.php?route=common/cart/info #total_price');
					$('#cart_block .cart-count').load('index.php?route=common/cart/info #total_count_ajax');
				}
			}
		});
	},
	'update': function(key, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/edit',
			type: 'post',
			data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			success: function(json) {
				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart_block #cart_content').load('index.php?route=common/cart/info #cart_content_ajax');
					$('#cart_block #total_price_ajax').load('index.php?route=common/cart/info #total_price');
					$('#cart_block .cart-count').load('index.php?route=common/cart/info #total_count_ajax');
				}			
			}
		});			
	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',			
			success: function(json) {
				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart_block #cart_content').load('index.php?route=common/cart/info #cart_content_ajax');
					$('#cart_block #total_price_ajax').load('index.php?route=common/cart/info #total_price');
					$('#cart_block .cart-count').load('index.php?route=common/cart/info #total_count_ajax');
				}
			}
		});			
	}
}

var voucher = {
	'add': function() {
		
	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},      
			complete: function() {
				$('#cart > button').button('reset');
			},			
			success: function(json) {				
				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart_block #cart_content').load('index.php?route=common/cart/info #cart_content_ajax');
					$('#cart_block #total_price_ajax').load('index.php?route=common/cart/info #total_price');
					$('#cart_block .cart-count').load('index.php?route=common/cart/info #total_count_ajax');
				}			
			}
		});	
	}
}

var wishlist = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=account/wishlist/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {							
				if (json['success']) {
					$.notify({
						message: json['success'],
						target: '_blank'
					},{
						// settings
						element: 'body',
						position: null,
						type: "info",
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "right"
						},
						offset: 20,
						spacing: 10,
						z_index: 2031,
						delay: 5000,
						timer: 1000,
						url_target: '_blank',
						mouse_over: null,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						onShow: null,
						onShown: null,
						onClose: null,
						onClosed: null,
						icon_type: 'class',
						template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
							'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
							'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
							'<div class="progress" data-notify="progressbar">' +
								'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
							'</div>' +
							'<a href="{3}" target="{4}" data-notify="url"></a>' +
						'</div>' 
					});
				}   
				
				if (json['info']) {
					$.notify({
						message: json['info'],
						target: '_blank'
					},{
						// settings
						element: 'body',
						position: null,
						type: "info",
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "right"
						},
						offset: 20,
						spacing: 10,
						z_index: 2031,
						delay: 5000,
						timer: 1000,
						url_target: '_blank',
						mouse_over: null,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						onShow: null,
						onShown: null,
						onClose: null,
						onClosed: null,
						icon_type: 'class',
						template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-info" role="alert">' +
							'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
							'<span data-notify="message"><i class="fa fa-info"></i>&nbsp; {2}</span>' +
							'<div class="progress" data-notify="progressbar">' +
								'<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
							'</div>' +
							'<a href="{3}" target="{4}" data-notify="url"></a>' +
						'</div>' 
					});
				}   
				
				$('#wishlist-total').html(json['total']);
			}
		});
	},
	'remove': function() {
	
	}
}

var compare = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=product/compare/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {							
				if (json['success']) {
					$.notify({
						message: json['success'],
						target: '_blank'
					},{
						// settings
						element: 'body',
						position: null,
						type: "info",
						allow_dismiss: true,
						newest_on_top: false,
						placement: {
							from: "top",
							align: "right"
						},
						offset: 20,
						spacing: 10,
						z_index: 2031,
						delay: 5000,
						timer: 1000,
						url_target: '_blank',
						mouse_over: null,
						animate: {
							enter: 'animated fadeInDown',
							exit: 'animated fadeOutUp'
						},
						onShow: null,
						onShown: null,
						onClose: null,
						onClosed: null,
						icon_type: 'class',
						template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
							'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
							'<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
							'<div class="progress" data-notify="progressbar">' +
								'<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
							'</div>' +
							'<a href="{3}" target="{4}" data-notify="url"></a>' +
						'</div>' 
					});
					
					$('#compare-total').html(json['total']);
				}   
			}
		});
	},
	'remove': function() {
	
	}
}

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
	e.preventDefault();
	
	$('#modal-agree').remove(); 
	
	var element = this;
	
    $.ajax({
        url: $(element).attr('href'),
        type: 'get',
        dataType: 'html',
        success: function(data) {
			html  = '<div id="modal-agree" class="modal fade">';
			html += '  <div class="modal-dialog">';
			html += '    <div class="modal-content">';
			html += '      <div class="modal-header">'; 
			html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
			html += '      </div>';
			html += '      <div class="modal-body">' + data + '</div>';
			html += '    </div';
			html += '  </div>';
			html += '</div>';
			
			$('body').append(html);
			
			$('#modal-agree').modal('show');
        }
    });
});

/* Autocomplete */
(function($) {
	function Autocomplete(element, options) {
		this.element = element;
		this.options = options;
		this.timer = null;
		this.items = new Array();

		$(element).attr('autocomplete', 'off');
		$(element).on('focus', $.proxy(this.focus, this));
		$(element).on('blur', $.proxy(this.blur, this));
		$(element).on('keydown', $.proxy(this.keydown, this));

		$(element).after('<ul class="dropdown-menu"></ul>');
		$(element).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));
	}

	Autocomplete.prototype = {
		focus: function() {
			this.request();
		},
		blur: function() {
			setTimeout(function(object) {
				object.hide();
			}, 200, this);
		},
		click: function(event) {
			event.preventDefault();

			value = $(event.target).parent().attr('data-value');

			if (value && this.items[value]) {
				this.options.select(this.items[value]);
			}
		},
		keydown: function(event) {
			switch(event.keyCode) {
				case 27: // escape
					this.hide();
					break;
				default:
					this.request();
					break;
			}
		},
		show: function() {
			var pos = $(this.element).position();

			$(this.element).siblings('ul.dropdown-menu').css({
				top: pos.top + $(this.element).outerHeight(),
				left: pos.left
			});

			$(this.element).siblings('ul.dropdown-menu').show();
			$(this).siblings('ul.dropdown-menu').css("opacity", "1");
			$(this).siblings('ul.dropdown-menu').css("visibility", "visible");
		},
		hide: function() {
			$(this.element).siblings('ul.dropdown-menu').hide();
		},
		request: function() {
			clearTimeout(this.timer);

			this.timer = setTimeout(function(object) {
				object.options.source($(object.element).val(), $.proxy(object.response, object));
			}, 200, this);
		},
		response: function(json) {
			html = '';

			if (json.length) {
				for (i = 0; i < json.length; i++) {
					this.items[json[i]['value']] = json[i];
				}

				for (i = 0; i < json.length; i++) {
					if (!json[i]['category']) {
						html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
					}
				}

				// Get all the ones with a categories
				var category = new Array();

				for (i = 0; i < json.length; i++) {
					if (json[i]['category']) {
						if (!category[json[i]['category']]) {
							category[json[i]['category']] = new Array();
							category[json[i]['category']]['name'] = json[i]['category'];
							category[json[i]['category']]['item'] = new Array();
						}

						category[json[i]['category']]['item'].push(json[i]);
					}
				}

				for (i in category) {
					html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

					for (j = 0; j < category[i]['item'].length; j++) {
						html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
					}
				}
			}

			if (html) {
				this.show();
			} else {
				this.hide();
			}

			$(this.element).siblings('ul.dropdown-menu').html(html);
		}
	};

	$.fn.autocomplete = function(option) {
		return this.each(function() {
			var data = $(this).data('autocomplete');

			if (!data) {
				data = new Autocomplete(this, option);

				$(this).data('autocomplete', data);
			}
		});
	}
})(window.jQuery);

function openPopup(module_id, product_id) {
     product_id = product_id || undefined;
     $.magnificPopup.open({
          items: {
               src: 'index.php?route=extension/module/popup/show&module_id=' + module_id + (product_id ? '&product_id=' + product_id : '')
          },
          mainClass: 'popup-module mfp-with-zoom',
          type: 'ajax',
          removalDelay: 200
     });
}