<?php if($theme_options->get( 'font_status' ) == '1' || $theme_options->get( 'colors_status' ) == '1') { ?>
<style type="text/css">
	<?php if($theme_options->get( 'colors_status' ) == '1') { ?>
		<?php if($theme_options->get( 'body_font_text' ) != '') { ?>
		body,
		.product-filter .list-options select,
		.blog-article .post .box .box-heading {
			color: <?php echo $theme_options->get( 'body_font_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links' ) != '') { ?>
		a {
			color: <?php echo $theme_options->get( 'body_font_links' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links_hover' ) != '') { ?>
		a:hover,
		div.pagination-results ul li.active {
			color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		
		     <?php if($theme_options->get( 'body_font_links_hover' ) == '#fff') { ?>
		     div.pagination-results ul li.active {
		          color: #c30a0a;
		     }
		     <?php } ?>
		     
		     .product-info .radio-type-button span:hover,
		     .product-info .radio-type-button span.active,
		     .product-info .radio-type-button2 span:hover,
		     .product-info .radio-type-button2 span.active,
		     #main .mfilter-image ul li.mfilter-image-checked {
		          border-color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		     }
		     
		     .product-info .radio-type-button2 span.active {
		          background: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		     }
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_text' ) != '') { ?>
		.compare-info .price-new, 
		.product-grid .product .price, 
		.product-list .actions > div .price,
		.product-info .price .price-new,
		ul.megamenu li .product .price,
		.mini-cart-total td:last-child,
		.cart-total table tr td:last-child,
		.mini-cart-info td.total,
		.advanced-grid-products .product .right .price,
		.product-list .name-actions > .price,
		.today-deals-products .product .price,
		.medic-last-in-stock .price,
		.architecture-products .product .right .price,
		.matrialarts-products .matrial-product .right .price,
		.today-deals-toys2-products .price,
		.today-deals-petshop2-products .price,
		.today-deals-shoes3-products .price,
		.today-deals-computer8-products .price,
		.today-deals-computer6-products .price,
		.holidays-products .product .right .price,
		.today-deals-computer6-products .countdown-section {
			color: <?php echo $theme_options->get( 'body_price_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_old_text' ) != '') { ?>
		.product-list .name-actions > .price .price-old,
		.product-grid .product .price .price-old,
		.today-deals-products .product .price .price-old,
		.architecture-products .product .right .price .price-old,
		.today-deals-toys2-products .price .price-old,
		.today-deals-petshop2-products .price .price-old,
		.today-deals-shoes3-products .price .price-old,
		.today-deals-computer8-products .price .price-old,
		.today-deals-computer6-products .price .price-old {
			color: <?php echo $theme_options->get( 'body_price_old_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_old_text_on_product_page' ) != '') { ?>
		.product-info .price .price-old {
			color: <?php echo $theme_options->get( 'body_price_old_text_on_product_page' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_background_color' ) != '') { ?>
		body,
		.standard-body .full-width #mfilter-content-container > span:before {
			background: <?php echo $theme_options->get( 'body_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_hover_border_color' ) != '') { ?>
		.product-grid .product:hover:before,
		.product-list > div:hover {
			border-color: <?php echo $theme_options->get( 'product_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'products_buttons_background_color' ) != '') { ?>
		.product-grid .product .only-hover ul li a,
		.architecture-products .product .right .only-hover ul li a,
		.product-list .name-actions ul li a,
		.today-deals-toys2-products .only-hover ul li a,
		.today-deals-petshop2-products .only-hover ul li a,
		.flower-product .right ul li a {
			background-color: <?php echo $theme_options->get( 'products_buttons_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'products_buttons_border_color' ) != '') { ?>
		.product-grid .product .only-hover ul li a,
		.architecture-products .product .right .only-hover ul li a,
		.product-list .name-actions ul li a,
		.today-deals-toys2-products .only-hover ul li a,
		.today-deals-petshop2-products .only-hover ul li a,
		.flower-product .right ul li a {
			border-color: <?php echo $theme_options->get( 'products_buttons_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'products_buttons_icon_color' ) != '') { ?>
		.product-grid .product .only-hover ul li a,
		.architecture-products .product .right .only-hover ul li a,
		.product-list .name-actions ul li a,
		.today-deals-toys2-products .only-hover ul li a,
		.today-deals-petshop2-products .only-hover ul li a,
		.flower-product .right ul li a {
			color: <?php echo $theme_options->get( 'products_buttons_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'products_buttons_hover_background_color' ) != '') { ?>
		.product-grid .product .only-hover ul li a:hover,
		.architecture-products .product .right .only-hover ul li a:hover,
		.product-list .name-actions ul li a:hover,
		.today-deals-toys2-products .only-hover ul li a:hover,
		.today-deals-petshop2-products .only-hover ul li a:hover,
		.flower-product .right ul li a:hover {
			background-color: <?php echo $theme_options->get( 'products_buttons_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'products_buttons_hover_border_color' ) != '') { ?>
		.product-grid .product .only-hover ul li a:hover,
		.architecture-products .product .right .only-hover ul li a:hover,
		.product-list .name-actions ul li a:hover,
		.today-deals-toys2-products .only-hover ul li a:hover,
		.today-deals-petshop2-products .only-hover ul li a:hover,
		.flower-product .right ul li a:hover {
			border-color: <?php echo $theme_options->get( 'products_buttons_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'products_buttons_hover_icon_color' ) != '') { ?>
		.product-grid .product .only-hover ul li a:hover,
		.architecture-products .product .right .only-hover ul li a:hover,
		.product-list .name-actions ul li a:hover,
		.today-deals-toys2-products .only-hover ul li a:hover,
		.today-deals-petshop2-products .only-hover ul li a:hover,
		.flower-product .right ul li a:hover {
			color: <?php echo $theme_options->get( 'products_buttons_hover_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'dropdown_background_color' ) != '') { ?>
		.dropdown-menu,
		.ui-autocomplete {
			background: <?php echo $theme_options->get( 'dropdown_background_color' ); ?> !important;
		}
		
		.dropdown-menu:after,
		.ui-autocomplete:after {
		     border-bottom-color: <?php echo $theme_options->get( 'dropdown_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'dropdown_text_color' ) != '') { ?>
		.dropdown-menu {
			color: <?php echo $theme_options->get( 'dropdown_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'dropdown_links_color' ) != '') { ?>
		.dropdown-menu li a,
		.dropdown-menu .mini-cart-info a,
		.ui-autocomplete li a {
			color: <?php echo $theme_options->get( 'dropdown_links_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'dropdown_links_hover_color' ) != '') { ?>
		.dropdown-menu li a:hover,
		.dropdown-menu .mini-cart-info a:hover,
		.ui-autocomplete li a:hover,
		.ui-autocomplete li a.ui-state-focus {
			color: <?php echo $theme_options->get( 'dropdown_links_hover_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'inputs_background_color' ) != '') { ?>
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input {
			background: <?php echo $theme_options->get( 'inputs_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'inputs_background_focus_color' ) != '') { ?>
		textarea:focus,
		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="time"]:focus,
		input[type="week"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="color"]:focus,
		.uneditable-input:focus {
			background: <?php echo $theme_options->get( 'inputs_background_focus_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'inputs_border_color' ) != '') { ?>
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input {
			border: 1px solid <?php echo $theme_options->get( 'inputs_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'inputs_border_focus_color' ) != '') { ?>
		textarea:focus,
		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="time"]:focus,
		input[type="week"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="color"]:focus,
		.uneditable-input:focus {
			border: 1px solid <?php echo $theme_options->get( 'inputs_border_focus_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'inputs_text_color' ) != '') { ?>
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input {
			color: <?php echo $theme_options->get( 'inputs_text_color' ); ?>;
		}
		
		.mfilter-price-inputs input {
		     color: <?php echo $theme_options->get( 'inputs_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'selects_background_color' ) != '') { ?>
		select {
			background: <?php echo $theme_options->get( 'selects_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'selects_border_color' ) != '') { ?>
		select {
			border-color: <?php echo $theme_options->get( 'selects_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'selects_text_color' ) != '') { ?>
		select {
			color: <?php echo $theme_options->get( 'selects_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'selects_arrow_color' ) != '') { ?>
		.select:after,
		.product-filter .list-options .sort:after,
		.product-filter .list-options .limit:after {
			color: <?php echo $theme_options->get( 'selects_arrow_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_background_color' ) != '') { ?>
		.box .box-content.products,
		.product-grid .product-hover .only-hover {
			background: <?php echo $theme_options->get( 'box_background_color' ); ?>;
		}
		
		.product-grid .product:before {
		     border-color: <?php echo $theme_options->get( 'box_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_content_background_color' ) != '') { ?>
		.product-filter,
		.product-list,
		.center-column .product-grid,
		.standard-body .full-width .center-column.content-with-background:before,
		.manufacturer-heading,
		.manufacturer-content,
		.center-column .tab-content,
		.body-other .standard-body .full-width .product-info:before,
		.product-info .cart,
		.box .box-content.products,
		.product-grid .product-hover .only-hover,
		html .mfp-iframe-scaler iframe,
		.quickview body,
		table.attribute tr, table.list tr, .wishlist-product table tr, .wishlist-info table tr, .compare-info tr, .checkout-product table tr, .table tr, .table,
		.spinner,
		img[src="image/catalog/blank.gif"],
		#mfilter-content-container > span:before,
		.cart-info table tr,
		.center-column .panel-heading,
		.center-column .panel-body,
		.popup,
		.product-block,
		.review-list .text,
		.modal-content,
		.product-info .product-image,
		.product-page-type-2 .standard-body .full-width .overflow-thumbnails-carousel,
		.product-page-type-2 .standard-body .full-width .product-info .product-center:before,
		.main-fixed3 .main-content .background,
		.product-grid-type-2 .product-grid .product:hover:before,
		.product-grid-type-3 .product-grid .product:hover:before,
		.product-grid-type-5 .product-grid .product:hover:before,
		.tab-content,
		.news.v2  .media-body .bottom {
			background-color: <?php echo $theme_options->get( 'main_content_background_color' ); ?> !important;
		}
		
		.review-list .text:after,
		#main .post .comments-list .text:after {
		     border-bottom-color: <?php echo $theme_options->get( 'main_content_background_color' ); ?>;
		}
		
		.product-grid .product:before {
		     border-color: <?php echo $theme_options->get( 'main_content_background_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'main_content_background_color' ) == 'none') { ?>
		     .product-filter,
		     .product-list,
		     .center-column .product-grid,
		     .standard-body .full-width .center-column.content-with-background:before,
		     .manufacturer-heading,
		     .manufacturer-content,
		     .center-column .tab-content,
		     .body-other .standard-body .full-width .product-info:before,
		     .product-info .cart,
		     .box .box-content.products,
		     .product-grid .product-hover .only-hover,
		     table.attribute tr, table.list tr, .wishlist-product table tr, .wishlist-info table tr, .compare-info tr, .checkout-product table tr, .table tr, .table,
		     .cart-info table tr,
		     .center-column .panel-heading,
		     .center-column .panel-body,
		     .product-block,
		     .review-list .text,
		     .product-info .product-image,
		     .product-page-type-2 .standard-body .full-width .overflow-thumbnails-carousel,
		     .product-page-type-2 .standard-body .full-width .product-info .product-center:before,
		     .main-fixed3 .main-content .background,
		     .product-grid-type-2 .product-grid .product:hover:before,
		     .product-grid-type-3 .product-grid .product:hover:before,
		     .product-grid-type-5 .product-grid .product:hover:before,
		     .tab-content {
		     	background: none !important;
		     }
		     
		     img[src="image/catalog/blank.gif"],
		     #mfilter-content-container > span:before,
		     .popup,
		     .spinner,
		     html .mfp-iframe-scaler iframe,
		     .quickview body,
		     .modal-content,
		     .news.v2  .media-body .bottom {
		          background-color: <?php echo $theme_options->get( 'body_background_color' ); ?> !important;
		     }
		     
		     .review-list .text:after,
		     #main .post .comments-list .text:after {
		          border-bottom-color: transparent;
		     }
		     
		     .product-grid .product:before {
		          border-color: transparent;
		     }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'main_content_border_color' ) != '') { ?>
		table.attribute,
		table.list,
		.wishlist-product table,
		.wishlist-info table,
		.compare-info,
		.cart-info table,
		.checkout-product table,
		.table,
		table.attribute td,
		table.list td,
		.wishlist-product table td,
		.wishlist-info table td,
		.compare-info td,
		.cart-info table td,
		.checkout-product table td,
		.table td ,
		.manufacturer-list,
		.manufacturer-heading,
		.center-column .panel-body,
		.review-list .text,
		.product-info .cart,
		.product-info .cart .links,
		.product-info .cart .links a:last-child,
		.product-info .cart .minimum,
		.product-info .review,
		.border-width-1 .standard-body .full-width .col-md-12 .col-md-12.center-column .cart-info thead td:first-child:before,
		.cart-info table thead td,
		#main .center-column .panel-heading,
		.main-fixed .center-column .panel:last-child, .standard-body .full-width .center-column .panel:last-child, .standard-body .fixed .center-column .panel:last-child,
		.center-column .panel-body,
		.body-white.checkout-checkout .standard-body .full-width .center-column .panel:last-child,
		.manufacturer-content,
		.product-block,
		.modal-header,
		.product-info .thumbnails li img, .product-info .thumbnails-carousel img,
		.product-info .product-image,
		.box-type-15 .col-sm-12 .box.box-with-products .box-content,
		.box-type-15 .col-md-12 .box.box-with-products .box-content,
		.box-type-15 .col-sm-12 .filter-product .tab-content,
		.box-type-15 .col-md-12 .filter-product .tab-content,
		.body-white.module-faq .standard-body #main .full-width .center-column .faq-section:last-child .panel:last-child,
		.product-info .radio-type-button2 span,
		.product-info .radio-type-button span,
		#main .mfilter-image ul li,
		.news.v2  .media-body .bottom,
		.news.v2 .media-body .date-published,
		#main .post .comments-list .text,
		#main .posts .post .post-content,
		#main .post .date-published,
		#main .post .meta,
		#main .post .post-content,
		.category-wall ul li a,
		.more-link,
		.body-white-type-2.checkout-cart .main-fixed .center-column > form > *:first-child,
		#main .quickcheckout-content,
		#main .quickcheckout-cart thead td,
		#main .quickcheckout-cart tbody td,
		#main table.quickcheckout-cart {
			border-color: <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		}
		
		.product-info .description,
		.category-list {
		     background: none;
		     border-bottom: 1px solid <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		}
		
		.product-info .options,
		.product-list,
		.list-box li {
		     background: none;
		     border-top: 1px solid <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		}
		
		     .list-box li:first-child {
		          border: none;
		     }
		
		.box-with-products .clear:before,
		.box-with-products .clear:after,
		.product-grid .product:before,
		.product-list > div:before,
		.product-list .name-actions:before,
		.product-list .desc:before,
		.center-column .product-grid:before,
		.center-column .product-grid:after,
		.product-grid > .row:before,
		.category-info:before,
		.refine_search_overflow:after,
		.tab-content:before,
		.tab-content:after,
		.product-filter .list-options .limit:before,
		.product-filter .list-options .sort:before,
		.product-filter .options .product-compare:before,
		.is-countdown .countdown-section:after,
		#main .quickcheckout-heading,
		#main .quickcheckout-cart thead td {
		     background: <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		}
		
		#main .quickcheckout-heading,
		#main .quickcheckout-cart thead td {
			color: #fff;
		}
		
		.review-list .text:before,
		#main .post .comments-list .text:before {
			border-bottom-color: <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		}
		
		@media (max-width: 500px) {
		     .responsive #main .product-grid .row > div.col-xs-6 .product:after {
		          background: <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		     }
		}
		
		@media (max-width: 767px) {
		     .responsive .product-grid .row > div.col-xs-6 .product:after {
		          background: <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		     }
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_content_headings_color' ) != '') { ?>
		.center-column h1,
		.center-column h2,
		.center-column h3,
		.center-column h4,
		.center-column h5,
		.center-column h6,
		.center-column legend,
		.popup h4 {
		     color: <?php echo $theme_options->get( 'main_content_headings_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'pagination_text_color' ) != '') { ?>
		#mfilter-content-container > div.pagination-results .text-right,
		.content-without-background #mfilter-content-container > p {
			color: <?php echo $theme_options->get( 'pagination_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_filter_icon_color' ) != '') { ?>
		.product-filter .options .button-group button {
			color: <?php echo $theme_options->get( 'product_filter_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'product_filter_icon_active_color' ) != '') { ?>
		.product-filter .options .button-group button:hover,
		.product-filter .options .button-group .active {
			color: <?php echo $theme_options->get( 'product_filter_icon_active_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_text_color' ) != '') { ?>
		.box .box-content {
			color: <?php echo $theme_options->get( 'box_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_links_color' ) != '') { ?>
		.box .box-content a {
			color: <?php echo $theme_options->get( 'box_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_heading_background_color' ) != '') { ?>
		.box,
		.bg-filter-tabs,
		.htabs:before {
			background: <?php echo $theme_options->get( 'box_heading_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_heading_text_color' ) != '') { ?>
		.box .box-heading,
		.product-block .title-block,
		.refine_search {
			color: <?php echo $theme_options->get( 'box_heading_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_heading_border_bottom_color' ) != '') { ?>
		.box .box-heading,
		.product-block .title-block,
		.refine_search,
		.market-products-categories > ul > li > a {
			border-bottom-color: <?php echo $theme_options->get( 'box_heading_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_background_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
			background: <?php echo $theme_options->get( 'box_left_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_border_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
			border-color: <?php echo $theme_options->get( 'box_left_border_color' ); ?>;
		}
		
		.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
		     border-color: <?php echo $theme_options->get( 'box_left_border_color' ); ?>;
		}
		
     		<?php if($theme_options->get( 'box_left_border_color' ) == 'none') { ?>
     		.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
     			border: none;     		
     		}
     		
     		.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
     			margin-bottom: 2px;		
     		}
     		<?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_border_1_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content {
			border: 1px solid <?php echo $theme_options->get( 'box_left_border_1_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'box_type' ) != '12') { ?>
     		.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
     		     border: none;
     		}
     		<?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_text_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-content, .col-sm-4 .box-no-advanced.box .box-content, .col-md-3 .box-no-advanced.box .box-content, .col-md-4 .box-no-advanced.box .box-content,
		#main .mfilter-price-inputs input {
			color: <?php echo $theme_options->get( 'box_left_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_links_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-content a, .col-sm-4 .box-no-advanced.box .box-content a, .col-md-3 .box-no-advanced.box .box-content a, .col-md-4 .box-no-advanced.box .box-content a {
			color: <?php echo $theme_options->get( 'box_left_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_links_hover_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-content a:hover, .col-sm-4 .box-no-advanced.box .box-content a:hover, .col-md-3 .box-no-advanced.box .box-content a:hover, .col-md-4 .box-no-advanced.box .box-content a:hover {
			color: <?php echo $theme_options->get( 'box_left_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_heading_background_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box, .col-sm-4 .box-no-advanced.box, .col-md-3 .box-no-advanced.box, .col-md-4 .box-no-advanced.box {
			background: <?php echo $theme_options->get( 'box_left_heading_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_heading_text_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading {
			color: <?php echo $theme_options->get( 'box_left_heading_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_left_heading_border_bottom_color' ) != '') { ?>
		.col-sm-3 .box-no-advanced.box .box-heading, .col-sm-4 .box-no-advanced.box .box-heading, .col-md-3 .box-no-advanced.box .box-heading, .col-md-4 .box-no-advanced.box .box-heading,
		.col-sm-3 .blog-module.box .box-heading, .col-sm-4 .blog-module.box .box-heading, .col-md-3 .blog-module.box .box-heading, .col-md-4 .blog-module.box .box-heading {
			border-bottom-color: <?php echo $theme_options->get( 'box_left_heading_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_background_color' ) != '') { ?>
		header {
			background: <?php echo $theme_options->get( 'header_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_border_bottom_1_color' ) != '') { ?>
		.header-type-3 #top {
			border-bottom: 1px solid <?php echo $theme_options->get( 'header_type_3_border_bottom_1_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_border_bottom_2_color' ) != '') { ?>
		.header-type-3 #top {
			border-bottom: 2px solid <?php echo $theme_options->get( 'header_type_3_border_bottom_2_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_search_border_color' ) != '') { ?>
		.header-type-3 #top .search_form,
		.header-type-8 #top .search_form,
		.body-header-type-27 #top .search_form {
			border-color: <?php echo $theme_options->get( 'header_type_3_search_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_search_background_color' ) != '') { ?>
		.header-type-3 #top .search_form,
		.header-type-8 #top .search_form,
		.body-header-type-27 #top .search_form {
			background-color: <?php echo $theme_options->get( 'header_type_3_search_background_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'header_type_3_search_background_color' ) == 'none') { ?>
		          .header-type-3 #top .search_form,
		          .header-type-8 #top .search_form {
		          	background: none;
		          }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_search_icon_color' ) != '') { ?>
		.header-type-3 #top .search_form,
		.header-type-8 #top .search_form,
		.body-header-type-27 #top .search_form .button-search {
			color: <?php echo $theme_options->get( 'header_type_3_search_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_search_border_hover_color' ) != '') { ?>
		.header-type-3 #top .search_form:hover,
		.header-type-8 #top .search_form:hover,
		.body-header-type-27 #top .search_form:hover {
			border-color: <?php echo $theme_options->get( 'header_type_3_search_border_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_search_background_hover_color' ) != '') { ?>
		.header-type-3 #top .search_form:hover,
		.header-type-8 #top .search_form:hover,
		.body-header-type-27 #top .search_form:hover {
			background-color: <?php echo $theme_options->get( 'header_type_3_search_background_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_3_search_icon_hover_color' ) != '') { ?>
		.header-type-3 #top .search_form:hover,
		.header-type-8 #top .search_form:hover,
		.body-header-type-27 #top .search_form:hover .button-search {
			color: <?php echo $theme_options->get( 'header_type_3_search_icon_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_12_search_background_color' ) != '') { ?>
		.header-type-12 #top .search_form {
			background: <?php echo $theme_options->get( 'header_type_12_search_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_12_search_background_gradient_top_color' ) != '' && $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ) != '') { ?>
		.header-type-12 #top .search_form {
			background: <?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'header_type_12_search_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'header_type_12_search_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_12_search_icon_color' ) != '') { ?>
		.header-type-12 #top .search_form .button-search {
			color: <?php echo $theme_options->get( 'header_type_12_search_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_12_search_select_text_color' ) != '') { ?>
		.header-type-12 #top .search_form .search-cat select,
		.header-type-12 #top .search_form .search-cat .select:after {
			color: <?php echo $theme_options->get( 'header_type_12_search_select_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_12_search_input_text_color' ) != '') { ?>
		.header-type-12 #top .search_form input {
			color: <?php echo $theme_options->get( 'header_type_12_search_input_text_color' ); ?>;
		}
		
		.header-type-12 #top .search_form input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
		    color:    <?php echo $theme_options->get( 'header_type_12_search_input_text_color' ); ?>;
		}
		
		.header-type-12 #top .search_form input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		   color:    <?php echo $theme_options->get( 'header_type_12_search_input_text_color' ); ?>;
		   opacity:  1;
		}
		
		.header-type-12 #top .search_form input::-moz-placeholder { /* Mozilla Firefox 19+ */
		   color:    <?php echo $theme_options->get( 'header_type_12_search_input_text_color' ); ?>;
		   opacity:  1;
		}
		
		.header-type-12 #top .search_form input:-ms-input-placeholder { /* Internet Explorer 10-11 */
		   color:    <?php echo $theme_options->get( 'header_type_12_search_input_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_12_search_input_background_color' ) != '') { ?>
		.header-type-12 #top .search_form input {
			background: <?php echo $theme_options->get( 'header_type_12_search_input_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_12_search_input_focus_background_color' ) != '') { ?>
		.header-type-12 #top .search_form input:focus {
			background: <?php echo $theme_options->get( 'header_type_12_search_input_focus_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_background_color' ) != '') { ?>
		.header-type-13 .search_form {
			background: <?php echo $theme_options->get( 'header_type_13_search_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_border_color' ) != '') { ?>
		.header-type-13 .search-cat {
			border-color: <?php echo $theme_options->get( 'header_type_13_search_border_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_select_text_color' ) != '') { ?>
		.header-type-13 .search-cat select,
		.header-type-13 .search-cat .select:after {
			color: <?php echo $theme_options->get( 'header_type_13_search_select_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_input_text_color' ) != '') { ?>
		.header-type-13 .overflow-input input {
			color: <?php echo $theme_options->get( 'header_type_13_search_input_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_icon_background_color' ) != '') { ?>
		.header-type-13 .button-search {
			background: <?php echo $theme_options->get( 'header_type_13_search_icon_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_icon_hover_background_color' ) != '') { ?>
		.header-type-13 .button-search:hover {
			background: <?php echo $theme_options->get( 'header_type_13_search_icon_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_icon_text_color' ) != '') { ?>
		.header-type-13 .button-search {
			color: <?php echo $theme_options->get( 'header_type_13_search_icon_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'header_type_13_search_icon_hover_text_color' ) != '') { ?>
		.header-type-13 .button-search:hover {
			color: <?php echo $theme_options->get( 'header_type_13_search_icon_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'logo_background_color' ) != '') { ?>
		.header-type-15 #top .logo:before {
			background: <?php echo $theme_options->get( 'logo_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'logo_background_gradient_top_color' ) != '' && $theme_options->get( 'logo_background_gradient_bottom_color' ) != '') { ?>
		.header-type-15 #top .logo:before {
			background: <?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'logo_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'logo_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'logo_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_background_color' ) != '') { ?>
		.top-bar {
			background: <?php echo $theme_options->get( 'top_bar_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_background_gradient_top_color' ) != '' && $theme_options->get( 'top_bar_background_gradient_bottom_color' ) != '') { ?>
		.top-bar {
		     <?php if($theme_options->get( 'top_bar_background_color' ) == '') { ?>
		     padding: 5px 0px 12px 0px;
		     <?php } ?>
			background: <?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_bar_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_bar_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_border_bottom_color' ) != '') { ?>
		.top-bar {
			border-bottom: 1px solid <?php echo $theme_options->get( 'top_bar_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_welcome_text' ) != '') { ?>
		#top .welcome-text,
		.top-bar .welcome-text {
			color: <?php echo $theme_options->get( 'top_bar_welcome_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_bar_welcome_text_links_color' ) != '') { ?>
		#top .welcome-text a,
		.top-bar .welcome-text a {
			color: <?php echo $theme_options->get( 'top_bar_welcome_text_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_background_color' ) != '') { ?>
		#top > .background {
			background: <?php echo $theme_options->get( 'top_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_background_gradient_top' ) != '' && $theme_options->get( 'top_background_gradient_bottom' ) != '') { ?>
		#top .background {
			background: <?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'top_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_border_bottom_color' ) != '') { ?>
		.megamenu-background {
			border-bottom-color: <?php echo $theme_options->get( 'top_border_bottom_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'top_border_bottom_color' ) == 'none') { ?>
		     .megamenu-background {
		          border-bottom: none;
		     }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'top_border_bottom_1px_color' ) != '') { ?>
		.megamenu-background {
			border-bottom: 1px solid <?php echo $theme_options->get( 'top_border_bottom_1px_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_border_bottom_4px_color' ) != '') { ?>
		.megamenu-background {
			border-bottom: 4px solid <?php echo $theme_options->get( 'top_border_bottom_4px_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_links_color' ) != '') { ?>
		.top-bar .menu li a,
		.header-type-9 #top #header-center .menu li a,
		.header-type-17 #top #header-left .menu li a,
		.header-type-26 #top .menu li a {
			color: <?php echo $theme_options->get( 'top_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_links_hover_color' ) != '') { ?>
		.top-bar .menu li a:hover,
		.header-type-9 #top #header-center .menu li a:hover,
		.header-type-17 #top #header-left .menu li a:hover,
		.header-type-26 #top .menu li a:hover {
			color: <?php echo $theme_options->get( 'top_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_background_color' ) != '') { ?>
		#top .search_form input {
			background: <?php echo $theme_options->get( 'top_search_input_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_focus_background_color' ) != '') { ?>
		#top .search_form input:focus {
			background: <?php echo $theme_options->get( 'top_search_input_focus_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_border_color' ) != '') { ?>
		#top .search_form input {
			border: 1px solid <?php echo $theme_options->get( 'top_search_input_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_focus_border_color' ) != '') { ?>
		#top .search_form input:focus {
			border: 1px solid <?php echo $theme_options->get( 'top_search_input_focus_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_text_color' ) != '') { ?>
		#top .search_form input {
			color: <?php echo $theme_options->get( 'top_search_input_text_color' ); ?>;
		}
		
		#top .search_form input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
		    color:    <?php echo $theme_options->get( 'top_search_input_text_color' ); ?>;
		}
		
		#top .search_form input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		   color:    <?php echo $theme_options->get( 'top_search_input_text_color' ); ?>;
		   opacity:  1;
		}
		
		#top .search_form input::-moz-placeholder { /* Mozilla Firefox 19+ */
		   color:    <?php echo $theme_options->get( 'top_search_input_text_color' ); ?>;
		   opacity:  1;
		}
		
		#top .search_form input:-ms-input-placeholder { /* Internet Explorer 10-11 */
		   color:    <?php echo $theme_options->get( 'top_search_input_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_icon_color' ) != '') { ?>
		.search_form .button-search, 
		.search_form .button-search2 {
			color: <?php echo $theme_options->get( 'top_search_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_change_bullet_color' ) != '') { ?>
		#top .dropdown > a:after {
			color: <?php echo $theme_options->get( 'top_change_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_change_text_color' ) != '') { ?>
		#top .dropdown > a {
			color: <?php echo $theme_options->get( 'top_change_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_change_text_hover_color' ) != '') { ?>
		#top .dropdown:hover > a {
			color: <?php echo $theme_options->get( 'top_change_text_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_change_bullet_hover_color' ) != '') { ?>
		#top .dropdown:hover > a:after {
			color: <?php echo $theme_options->get( 'top_change_bullet_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_border_color' ) != '') { ?>
		#top .my-account,
		.rtl .header-type-10 #top .my-account {
			border-color: <?php echo $theme_options->get( 'top_my_account_border_color' ); ?>;
			<?php if($theme_options->get( 'top_my_account_border_color' ) == 'none') { ?>
			     border: none;
			     padding-top: 10px;
			<?php }?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_background_color' ) != '') { ?>
		#top .my-account {
			background: <?php echo $theme_options->get( 'top_my_account_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_background_gradient_top_color' ) != '' && $theme_options->get( 'top_my_account_background_gradient_bottom_color' ) != '') { ?>
		#top .my-account {
			background: <?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_my_account_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_icon_color' ) != '') { ?>
		#top .my-account,
		.header-type-23 .dropdown i {
			color: <?php echo $theme_options->get( 'top_my_account_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_border_hover_color' ) != '') { ?>
		#top .my-account:hover,
		.rtl .header-type-10 #top .my-account:hover {
			border-color: <?php echo $theme_options->get( 'top_my_account_border_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_background_hover_color' ) != '') { ?>
		#top .my-account:hover {
			background: <?php echo $theme_options->get( 'top_my_account_background_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_background_hover_gradient_top_color' ) != '' && $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ) != '') { ?>
		#top .my-account:hover {
			background: <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_my_account_background_hover_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_my_account_icon_hover_color' ) != '') { ?>
		#top .my-account:hover,
		.header-type-23 .dropdown:hover i {
			color: <?php echo $theme_options->get( 'top_my_account_icon_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_icon_border_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon,
		.cart-block-type-2 #top #cart_block .cart-heading,
		.cart-block-type-9 #top #cart_block .cart-heading,
		.cart-block-type-8 #top #cart_block .cart-heading,
		.cart-block-type-7 #top #cart_block .cart-heading,
		.cart-block-type-4 #top #cart_block .cart-heading,
		.cart-block-type-6 #top #cart_block .cart-heading,
		.cart-block-type-8 #top #cart_block .cart-heading p,
		.cart-block-type-4 #top #cart_block .cart-heading .cart-icon,
		.rtl .cart-block-type-8 #top #cart_block .cart-heading p,
		.rtl .header-type-10 #top #cart_block .cart-heading .cart-icon,
		.rtl .cart-block-type-4 #top #cart_block .cart-heading .cart-icon {
			border-color: <?php echo $theme_options->get( 'top_cart_icon_border_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'top_cart_icon_border_color' ) == 'none') { ?>
		     #top #cart_block .cart-heading .cart-icon,
		     .rtl .header-type-10 #top #cart_block .cart-heading .cart-icon,
		     .cart-block-type-2 #top #cart_block .cart-heading,
		     .cart-block-type-9 #top #cart_block .cart-heading,
		     .cart-block-type-8 #top #cart_block .cart-heading,
		     .cart-block-type-7 #top #cart_block .cart-heading,
		     .cart-block-type-4 #top #cart_block .cart-heading,
		     .cart-block-type-6 #top #cart_block .cart-heading,
		     .cart-block-type-8 #top #cart_block .cart-heading p,
		     .rtl .cart-block-type-8 #top #cart_block .cart-heading p,
		     .cart-block-type-4 #top #cart_block .cart-heading .cart-icon,
		     .rtl .cart-block-type-4 #top #cart_block .cart-heading .cart-icon {
		     	border-color: transparent;
		     }
		     <?php } ?>
		     
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_icon_background_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon,
		.cart-block-type-2 #top #cart_block .cart-heading,
		.cart-block-type-9 #top #cart_block .cart-heading,
		.cart-block-type-8 #top #cart_block .cart-heading,
		.cart-block-type-7 #top #cart_block .cart-heading,
		.cart-block-type-4 #top #cart_block .cart-heading {
			background: <?php echo $theme_options->get( 'top_cart_icon_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_icon_background_gradient_top_color' ) != '' && $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-icon,
		.cart-block-type-2 #top #cart_block .cart-heading,
		.cart-block-type-9 #top #cart_block .cart-heading,
		.cart-block-type-8 #top #cart_block .cart-heading,
		.cart-block-type-7 #top #cart_block .cart-heading,
		.cart-block-type-4 #top #cart_block .cart-heading {
			background: <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_icon_hover_border_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading .cart-icon,
		.cart-block-type-2 #top #cart_block:hover .cart-heading,
		.cart-block-type-9 #top #cart_block:hover .cart-heading,
		.cart-block-type-8 #top #cart_block:hover .cart-heading,
		.cart-block-type-7 #top #cart_block:hover .cart-heading,
		.cart-block-type-4 #top #cart_block:hover .cart-heading,
		.cart-block-type-6 #top #cart_block:hover .cart-heading,
		.cart-block-type-8 #top #cart_block:hover .cart-heading p,
		.cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon,
		.rtl .cart-block-type-8 #top #cart_block:hover .cart-heading p,
		.rtl .header-type-10 #top #cart_block:hover .cart-heading .cart-icon,
		.rtl .cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon {
			border-color: <?php echo $theme_options->get( 'top_cart_icon_hover_border_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'top_cart_icon_hover_border_color' ) == 'none') { ?>
		     #top #cart_block:hover .cart-heading .cart-icon,
		     .cart-block-type-2 #top #cart_block:hover .cart-heading,
		     .cart-block-type-9 #top #cart_block:hover .cart-heading,
		     .cart-block-type-8 #top #cart_block:hover .cart-heading,
		     .cart-block-type-7 #top #cart_block:hover .cart-heading,
		     .cart-block-type-4 #top #cart_block:hover .cart-heading,
		     .cart-block-type-6 #top #cart_block:hover .cart-heading,
		     .cart-block-type-8 #top #cart_block:hover .cart-heading p,
		     .cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon,
		     .rtl .cart-block-type-8 #top #cart_block:hover .cart-heading p,
		     .rtl .header-type-10 #top #cart_block:hover .cart-heading .cart-icon,
		     .rtl .cart-block-type-4 #top #cart_block:hover .cart-heading .cart-icon {
		     	border-color: transparent;
		     }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_icon_hover_background_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading .cart-icon,
		.cart-block-type-2 #top #cart_block:hover .cart-heading,
		.cart-block-type-9 #top #cart_block:hover .cart-heading,
		.cart-block-type-8 #top #cart_block:hover .cart-heading,
		.cart-block-type-7 #top #cart_block:hover .cart-heading,
		.cart-block-type-4 #top #cart_block:hover .cart-heading {
			background: <?php echo $theme_options->get( 'top_cart_icon_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_icon_background_hover_gradient_top_color' ) != '' && $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading .cart-icon,
		.cart-block-type-2 #top #cart_block:hover .cart-heading,
		.cart-block-type-9 #top #cart_block:hover .cart-heading,
		.cart-block-type-8 #top #cart_block:hover .cart-heading,
		.cart-block-type-7 #top #cart_block:hover .cart-heading,
		.cart-block-type-4 #top #cart_block:hover .cart-heading {
			background: <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_icon_background_hover_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_amount_text_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-count {
			color: <?php echo $theme_options->get( 'top_cart_amount_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_amount_background_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-count {
			background-color: <?php echo $theme_options->get( 'top_cart_amount_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_amount_background_gradient_top_color' ) != '' && $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ) != '') { ?>
		#top #cart_block .cart-heading .cart-count {
			background: <?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_amount_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_price_color' ) != '') { ?>
		#top #cart_block .cart-heading p {
			color: <?php echo $theme_options->get( 'top_cart_price_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_bullet_color' ) != '') { ?>
		#top #cart_block .cart-heading p:after {
			color: <?php echo $theme_options->get( 'top_cart_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_amount_hover_text_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading .cart-count {
			color: <?php echo $theme_options->get( 'top_cart_amount_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_amount_hover_background_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading .cart-count {
			background-color: <?php echo $theme_options->get( 'top_cart_amount_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_amount_hover_background_gradient_top_color' ) != '' && $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading .cart-count {
			background: <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_amount_hover_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_price_hover_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading p {
			color: <?php echo $theme_options->get( 'top_cart_price_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_bullet_hover_color' ) != '') { ?>
		#top #cart_block:hover .cart-heading p:after {
			color: <?php echo $theme_options->get( 'top_cart_bullet_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'megafilter_bullets_background_color' ) != '') { ?>
		#main .mfilter-slider-slider .ui-slider-handle, #main #mfilter-price-slider .ui-slider-handle {
		     background: <?php echo $theme_options->get( 'megafilter_bullets_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'megafilter_background_color_of_slider' ) != '') { ?>
		#main .mfilter-slider-slider .ui-slider-range, #main #mfilter-price-slider .ui-slider-range {
		     background: <?php echo $theme_options->get( 'megafilter_background_color_of_slider' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_links_bullet_color' ) != '') { ?>
		ul.megamenu > li.with-sub-menu > a strong:after {
			color: <?php echo $theme_options->get( 'main_links_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_links_bullet_hover_color' ) != '') { ?>
		ul.megamenu > li.with-sub-menu:hover > a strong:after {
			color: <?php echo $theme_options->get( 'main_links_bullet_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_background_color' ) != '') { ?>
		.megamenu-background {
			background-color: <?php echo $theme_options->get( 'menu_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_background_gradient_top_color' ) != '' && $theme_options->get( 'menu_background_gradient_bottom_color' ) != '') { ?>
		.megamenu-background {
			background: <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		
		     <?php if($theme_options->get( 'megamenu_type' ) == '26') { ?>
		          .megamenu-background {
		          	background: <?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?>; /* Old browsers */
		          	background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 50%, <?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 100%); /* FF3.6+ */
		          	background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,<?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
		          	background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 100%); /* Chrome10+,Safari5.1+ */
		          	background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 100%); /* Opera 11.10+ */
		          	background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 100%); /* IE10+ */
		          	background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'menu_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'menu_background_gradient_bottom_color' ); ?> 100%); /* W3C */
		          }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'main_links_color' ) != '') { ?>
		ul.megamenu > li > a {
			color: <?php echo $theme_options->get( 'main_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_links_hover_color' ) != '') { ?>
		ul.megamenu > li:hover > a,
		ul.megamenu > li.active > a,
		ul.megamenu > li.home > a {
			color: <?php echo $theme_options->get( 'main_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_link_position_right_text_color' ) != '') { ?>
		.horizontal ul.megamenu > li.pull-right > a {
			color: <?php echo $theme_options->get( 'menu_link_position_right_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_link_position_right_background_color' ) != '') { ?>
		.horizontal ul.megamenu > li.pull-right > a {
			background: <?php echo $theme_options->get( 'menu_link_position_right_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_link_position_right_background_gradient_top_color' ) != '' && $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ) != '') { ?>
		.horizontal ul.megamenu > li.pull-right > a {
			background: <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'menu_link_position_right_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_text_color' ) != '') { ?>
		#main .vertical .megamenuToogle-wrapper .container {
			color: <?php echo $theme_options->get( 'vertical_menu_heading_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_bullet_color' ) != '') { ?>
		#main .vertical .megamenuToogle-wrapper .container:after {
			color: <?php echo $theme_options->get( 'vertical_menu_heading_bullet_color' ); ?>;
		}
		
		.megamenu-type-15 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.megamenu-type-15 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.megamenu-type-15 .megamenu-background .vertical .megamenuToogle-wrapper:before {
		     background: <?php echo $theme_options->get( 'vertical_menu_heading_bullet_color' ); ?>;
		}
		
		.megamenu-type-20 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.megamenu-type-20 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.megamenu-type-20 .megamenu-background .vertical .megamenuToogle-wrapper:before {
		     background: <?php echo $theme_options->get( 'vertical_menu_heading_bullet_color' ); ?>;
		}
		
		.megamenu-type-34 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.megamenu-type-34 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.megamenu-type-34 .megamenu-background .vertical .megamenuToogle-wrapper:before {
		     background: <?php echo $theme_options->get( 'vertical_menu_heading_bullet_color' ); ?>;
		}
		
		.megamenu-type-28 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.megamenu-type-28 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.megamenu-type-28 .megamenu-background .vertical .megamenuToogle-wrapper:before {
		     background: <?php echo $theme_options->get( 'vertical_menu_heading_bullet_color' ); ?>;
		}
		
		.megamenu-type-25 .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.megamenu-type-25 .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.megamenu-type-25 .megamenu-background .vertical .megamenuToogle-wrapper:before {
		     background: <?php echo $theme_options->get( 'vertical_menu_heading_bullet_color' ); ?>;
		}
		
		.megamenu-type-18 .slideshow-modules .vertical .megamenuToogle-wrapper .container:before,
		.megamenu-type-18 .slideshow-modules .vertical .megamenuToogle-wrapper .container:after,
		.megamenu-type-18 .slideshow-modules .vertical .megamenuToogle-wrapper:before {
		     background: <?php echo $theme_options->get( 'vertical_menu_heading_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_background_color' ) != '') { ?>
		#main .vertical .megamenuToogle-wrapper,
		.standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before {
			background-color: <?php echo $theme_options->get( 'vertical_menu_heading_background_color' ); ?>;
		}
		
		     @media (max-width: 991px) {
     		     .responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before {
     		          background-color: <?php echo $theme_options->get( 'vertical_menu_heading_background_color' ); ?>;
     		     }
		     }
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ) != '' && $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ) != '') { ?>
		#main .vertical .megamenuToogle-wrapper,
		.standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before {
			background: <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		     @media (max-width: 991px) {
		          .responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before {
		               background: <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?>; /* Old browsers */
		               background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
		               background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
		               background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
		               background: -o-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
		               background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
		               background: linear-gradient(to bottom, <?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		          }
		     }
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_hover_text_color' ) != '') { ?>
		#main .vertical:hover .megamenuToogle-wrapper .container,
		.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper .container,
		body[class*="product-category-"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container,
		body[class*="product-product-"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container,
		.common-home.show-vertical-megamenu #main .slideshow-modules .vertical .megamenuToogle-wrapper .container {
			color: <?php echo $theme_options->get( 'vertical_menu_heading_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_hover_bullet_color' ) != '') { ?>
		#main .vertical:hover .megamenuToogle-wrapper .container:after,
		.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-category-"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-product-"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after {
			color: <?php echo $theme_options->get( 'vertical_menu_heading_hover_bullet_color' ); ?>;
		}
		
		.megamenu-type-15 .megamenu-background .vertical:hover .megamenuToogle-wrapper .container:before,
		.megamenu-type-15 .megamenu-background .vertical:hover .megamenuToogle-wrapper .container:after,
		.megamenu-type-15 .megamenu-background .vertical:hover .megamenuToogle-wrapper:before,
		.megamenu-type-18 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
		.megamenu-type-18 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
		.megamenu-type-18 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
		.megamenu-type-20 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
		.megamenu-type-20 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
		.megamenu-type-20 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
		.megamenu-type-34 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
		.megamenu-type-34 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
		.megamenu-type-34 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
		.megamenu-type-28 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
		.megamenu-type-28 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
		.megamenu-type-28 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
		.megamenu-type-25 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:before,
		.megamenu-type-25 .slideshow-modules .vertical:hover .megamenuToogle-wrapper .container:after,
		.megamenu-type-25 .slideshow-modules .vertical:hover .megamenuToogle-wrapper:before,
		.common-home.show-vertical-megamenu.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.common-home.show-vertical-megamenu.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.common-home.show-vertical-megamenu.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		.common-home.show-vertical-megamenu.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.common-home.show-vertical-megamenu.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.common-home.show-vertical-megamenu.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		.common-home.show-vertical-megamenu.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.common-home.show-vertical-megamenu.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.common-home.show-vertical-megamenu.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		.common-home.show-vertical-megamenu.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.common-home.show-vertical-megamenu.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.common-home.show-vertical-megamenu.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		.common-home.show-vertical-megamenu.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.common-home.show-vertical-megamenu.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.common-home.show-vertical-megamenu.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		.common-home.show-vertical-megamenu.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		.common-home.show-vertical-megamenu.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		.common-home.show-vertical-megamenu.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-category-"].show-vertical-megamenu-category-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-15 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-18 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-20 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-34 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-28 #main .megamenu-background .vertical .megamenuToogle-wrapper:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:before,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper .container:after,
		body[class*="product-product-"].show-vertical-megamenu-product-page.megamenu-type-25 #main .megamenu-background .vertical .megamenuToogle-wrapper:before {
		     background: <?php echo $theme_options->get( 'vertical_menu_heading_hover_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_hover_background_color' ) != '') { ?>
		#main .vertical:hover .megamenuToogle-wrapper,
		.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper,
		body[class*="product-category-"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
		body[class*="product-product-"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
		.common-home.show-vertical-megamenu #main .slideshow-modules .vertical .megamenuToogle-wrapper {
			background-color: <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_heading_hover_background_gradient_top_color' ) != '' && $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ) != '') { ?>
		#main .vertical:hover .megamenuToogle-wrapper,
		.common-home.show-vertical-megamenu #main .megamenu-background .vertical .megamenuToogle-wrapper,
		body[class*="product-category-"].show-vertical-megamenu-category-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
		body[class*="product-product-"].show-vertical-megamenu-product-page #main .megamenu-background .vertical .megamenuToogle-wrapper,
		.common-home.show-vertical-megamenu #main .slideshow-modules .vertical .megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'vertical_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_background_color' ) != '') { ?>
		#main .vertical .megamenu-wrapper {
			background-color: <?php echo $theme_options->get( 'vertical_menu_content_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_border_color' ) != '') { ?>
		#main .vertical ul.megamenu > li {
			border-color: <?php echo $theme_options->get( 'vertical_menu_content_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_border2_color' ) != '') { ?>
		#main .vertical .megamenu-wrapper {
			border: 1px solid <?php echo $theme_options->get( 'vertical_menu_content_border2_color' ); ?>;
			border-top: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_border3_color' ) != '') { ?>
		#main .vertical .megamenu-wrapper {
			border: 2px solid <?php echo $theme_options->get( 'vertical_menu_content_border3_color' ); ?>;
			border-top: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_links_color' ) != '') { ?>
		#main .vertical ul.megamenu > li > a {
			color: <?php echo $theme_options->get( 'vertical_menu_content_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_links_hover_color' ) != '') { ?>
		#main .vertical ul.megamenu > li:hover > a,
		#main .vertical ul.megamenu > li.active > a {
			color: <?php echo $theme_options->get( 'vertical_menu_content_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_links_hover_background_color' ) != '') { ?>
		#main .vertical ul.megamenu > li:hover {
			background: <?php echo $theme_options->get( 'vertical_menu_content_links_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_bullet_color' ) != '') { ?>
		#main .vertical ul.megamenu > li.with-sub-menu > a:before,
		#main .vertical ul.megamenu > li.with-sub-menu > a:after {
			color: <?php echo $theme_options->get( 'vertical_menu_content_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'vertical_menu_content_bullet_hover_color' ) != '') { ?>
		#main .vertical ul.megamenu > li.with-sub-menu:hover > a:before,
		#main .vertical ul.megamenu > li.with-sub-menu:hover > a:after {
			color: <?php echo $theme_options->get( 'vertical_menu_content_bullet_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_background_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content,
		ul.megamenu li .sub-menu .content .hover-menu .menu ul ul {
			background: <?php echo $theme_options->get( 'submenu_background_color' ); ?>;
		}
		
		ul.megamenu > li > .sub-menu > .content > .arrow:after {
		     border-bottom-color: <?php echo $theme_options->get( 'submenu_background_color' ); ?>;
		}
		
		.vertical ul.megamenu > li > .sub-menu > .content > .arrow:after,
		ul.megamenu li .sub-menu .content .hover-menu .menu ul ul:after {
		     border-right-color: <?php echo $theme_options->get( 'submenu_background_color' ); ?>;
		}
		
		     .rtl ul.megamenu li .sub-menu .content .hover-menu .menu ul ul:after,
		     .rtl .vertical ul.megamenu > li > .sub-menu > .content > .arrow:after {
		          border-left-color: <?php echo $theme_options->get( 'submenu_background_color' ); ?>;
		     }
		
		@media (max-width: 767px) {
		     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a,
		     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a,
		     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a:hover,
		     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a:hover,
		     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li.active > a,
		     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li.active > a {
		          background: <?php echo $theme_options->get( 'submenu_background_color' ); ?>;
		     }
		     
		     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li, 
		     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li,
		     .responsive ul.megamenu .sub-menu .content .row > div {
		          border-top-color: rgba(120,120,120,0.15);
		     }
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_text_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content {
			color: <?php echo $theme_options->get( 'submenu_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_links_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content a {
			color: <?php echo $theme_options->get( 'submenu_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_links_hover_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content a:hover,
		ul.megamenu li .sub-menu .content .hover-menu .menu ul li:hover > a {
			color: <?php echo $theme_options->get( 'submenu_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_bullets_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content .hover-menu a.with-submenu:before {
			color: <?php echo $theme_options->get( 'submenu_bullets_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_bullets_hover_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content .hover-menu a.with-submenu:after,
		ul.megamenu li .sub-menu .content .hover-menu li:hover > a.with-submenu:before {
			color: <?php echo $theme_options->get( 'submenu_bullets_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_main_links_in_visible_type_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content .static-menu a.main-menu{
			color: <?php echo $theme_options->get( 'submenu_main_links_in_visible_type_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_main_links_hover_in_visible_type_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content .static-menu a.main-menu:hover {
			color: <?php echo $theme_options->get( 'submenu_main_links_hover_in_visible_type_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'submenu_main_links_in_visible_type_border_bottom_color' ) != '') { ?>
		ul.megamenu li .sub-menu .content .static-menu a.main-menu:after {
			background: <?php echo $theme_options->get( 'submenu_main_links_in_visible_type_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_background_color' ) != '') { ?>
		.megamenuToogle-wrapper {
			background-color: <?php echo $theme_options->get( 'mobile_menu_heading_background_color' ); ?>;
		}
		
		     @media (max-width: 991px) {
		          .responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before {
		               background-color: <?php echo $theme_options->get( 'mobile_menu_heading_background_color' ); ?>;
		          }
		     }
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ) != '' && $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ) != '') { ?>
		.megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		
		     <?php if($theme_options->get( 'megamenu_type' ) == '26') { ?>
		          .megamenuToogle-wrapper {
		          	background: <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?>; /* Old browsers */
		          	background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 50%, <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 100%); /* FF3.6+ */
		          	background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
		          	background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 100%); /* Chrome10+,Safari5.1+ */
		          	background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 100%); /* Opera 11.10+ */
		          	background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 100%); /* IE10+ */
		          	background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_background_gradient_bottom_color' ); ?> 100%); /* W3C */
		          }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_text_color' ) != '') { ?>
		.megamenuToogle-wrapper .container {
			color: <?php echo $theme_options->get( 'mobile_menu_heading_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_bullet_color' ) != '') { ?>
		.megamenuToogle-wrapper .container > div span {
			background: <?php echo $theme_options->get( 'mobile_menu_heading_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_hover_background_color' ) != '') { ?>
		.megamenuToogle-wrapper:hover,
		.active .megamenuToogle-wrapper {
			background-color: <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ) != '' && $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ) != '') { ?>
		.megamenuToogle-wrapper:hover,
		.active .megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		
		     <?php if($theme_options->get( 'megamenu_type' ) == '26') { ?>
		          .megamenuToogle-wrapper:hover,
		          .active .megamenuToogle-wrapper {
		          	background: <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?>; /* Old browsers */
		          	background: -moz-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 50%, <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 100%); /* FF3.6+ */
		          	background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?>), color-stop(100%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
		          	background: -webkit-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 100%); /* Chrome10+,Safari5.1+ */
		          	background: -o-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 100%); /* Opera 11.10+ */
		          	background: -ms-linear-gradient(top,  <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 100%); /* IE10+ */
		          	background: linear-gradient(to bottom,  <?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_top_color' ); ?> 50%,<?php echo $theme_options->get( 'mobile_menu_heading_hover_background_gradient_bottom_color' ); ?> 100%); /* W3C */
		          }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_hover_text_color' ) != '') { ?>
		.megamenuToogle-wrapper:hover .container,
		.active .megamenuToogle-wrapper .container {
			color: <?php echo $theme_options->get( 'mobile_menu_heading_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_heading_hover_bullet_color' ) != '') { ?>
		.megamenuToogle-wrapper:hover .container > div span,
		.active .megamenuToogle-wrapper .container > div span {
			background: <?php echo $theme_options->get( 'mobile_menu_heading_hover_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_content_background_color' ) != '') { ?>
		@media (max-width: 991px) {
     		.responsive .horizontal .megamenu-wrapper {
     			background: <?php echo $theme_options->get( 'mobile_menu_content_background_color' ); ?> !important;
     		}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_content_border_color' ) != '') { ?>
		@media (max-width: 991px) {
			.responsive .horizontal .megamenu-wrapper {
				border: 1px solid <?php echo $theme_options->get( 'mobile_menu_content_border_color' ); ?> !important;
				border-top: none !important;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_content_link_color' ) != '') { ?>
		@media (max-width: 991px) {
			.responsive .horizontal ul.megamenu > li > a {
				color: <?php echo $theme_options->get( 'mobile_menu_content_link_color' ); ?> !important;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_content_link_active_color' ) != '') { ?>
		@media (max-width: 991px) {
			.responsive .horizontal ul.megamenu > li:hover > a,
			.responsive .horizontal ul.megamenu > li.active > a {
				color: <?php echo $theme_options->get( 'mobile_menu_content_link_active_color' ); ?> !important;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_content_link_border_top_color' ) != '') { ?>
		@media (max-width: 991px) {
			.responsive .horizontal ul.megamenu > li {
				border-top-color: <?php echo $theme_options->get( 'mobile_menu_content_link_border_top_color' ); ?> !important;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_content_link_hover_background_color' ) != '') { ?>
		@media (max-width: 991px) {
			.responsive ul.megamenu > li:hover,
			.responsive ul.megamenu > li.active {
				background: <?php echo $theme_options->get( 'mobile_menu_content_link_hover_background_color' ); ?> !important;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'mobile_menu_content_plus_minus_color' ) != '') { ?>
		@media (max-width: 991px) {
			.responsive ul.megamenu > li.with-sub-menu .open-menu,
			.responsive ul.megamenu > li.with-sub-menu .close-menu {
				color: <?php echo $theme_options->get( 'mobile_menu_content_plus_minus_color' ); ?> !important;
			}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'horizontal_type_2_menu_background_color' ) != '') { ?>
		.horizontal-type-2 {
			background: <?php echo $theme_options->get( 'horizontal_type_2_menu_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'horizontal_type_2_menu_links_color' ) != '') { ?>
		.horizontal-type-2 ul.megamenu > li > a strong {
			color: <?php echo $theme_options->get( 'horizontal_type_2_menu_links_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'horizontal_type_2_menu_bullet_color' ) != '') { ?>
		.horizontal-type-2 ul.megamenu > li > a strong:after {
			color: <?php echo $theme_options->get( 'horizontal_type_2_menu_bullet_color' ); ?> !important;
		}
		     @media (max-width: 991px) {
     		     .responsive .horizontal-type-2 ul.megamenu > li.with-sub-menu .open-menu, 
     		     .responsive .horizontal-type-2 ul.megamenu > li.with-sub-menu .close-menu {
     		          color: <?php echo $theme_options->get( 'horizontal_type_2_menu_bullet_color' ); ?> !important;
     		     }
		     }
		<?php } ?>
		
		<?php if($theme_options->get( 'horizontal_type_2_menu_links_hover_color' ) != '') { ?>
		.horizontal-type-2 ul.megamenu > li:hover > a strong,
		.horizontal-type-2 ul.megamenu > li.active > a strong {
			color: <?php echo $theme_options->get( 'horizontal_type_2_menu_links_hover_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'horizontal_type_2_menu_bullet_hover_color' ) != '') { ?>
		.horizontal-type-2 ul.megamenu > li:hover > a strong:after,
		.horizontal-type-2 ul.megamenu > li.active > a strong:after {
			color: <?php echo $theme_options->get( 'horizontal_type_2_menu_bullet_hover_color' ); ?> !important;
		}
		     
		     @media (max-width: 991px) {
		          .responsive .horizontal-type-2 ul.megamenu > li.with-sub-menu .close-menu {
		               color: <?php echo $theme_options->get( 'horizontal_type_2_menu_bullet_color' ); ?> !important;
		          }
		     }
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_background_color' ) != '') { ?>
		#main .breadcrumb .background {
			background: <?php echo $theme_options->get( 'breadcrumb_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_border_bottom_color' ) != '') { ?>
		#main .breadcrumb .background {
			border-bottom: 1px solid <?php echo $theme_options->get( 'breadcrumb_border_bottom_color' ); ?>;
			background-image: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_border_bottom_4px_color' ) != '') { ?>
		#main .breadcrumb .background {
			border-bottom: 4px solid <?php echo $theme_options->get( 'breadcrumb_border_bottom_4px_color' ); ?>;
			background-image: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_border_top_color' ) != '') { ?>
		#main .breadcrumb .background {
			border-top: 1px solid <?php echo $theme_options->get( 'breadcrumb_border_top_color' ); ?>;
			background-image: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_heading_color' ) != '') { ?>
		.breadcrumb .container h1 {
			color: <?php echo $theme_options->get( 'breadcrumb_heading_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_heading_border_bottom_color' ) != '') { ?>
		.breadcrumb .container h1 {
			border-bottom-color: <?php echo $theme_options->get( 'breadcrumb_heading_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_links_color' ) != '') { ?>
		.breadcrumb ul,
		.breadcrumb ul a {
			color: <?php echo $theme_options->get( 'breadcrumb_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_links_hover_color' ) != '') { ?>
		.breadcrumb ul a:hover {
			color: <?php echo $theme_options->get( 'breadcrumb_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_price_color' ) != '') { ?>
		.next-product .right .price {
			color: <?php echo $theme_options->get( 'breadcrumb_price_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_button_background_color' ) != '') { ?>
		.button-previous-next,
		.next-product {
			background: <?php echo $theme_options->get( 'breadcrumb_button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_button_border_color' ) != '') { ?>
		.button-previous-next,
		.next-product {
			border-color: <?php echo $theme_options->get( 'breadcrumb_button_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_button_text_color' ) != '') { ?>
		.button-previous-next {
			color: <?php echo $theme_options->get( 'breadcrumb_button_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_button_hover_background_color' ) != '') { ?>
		.button-previous-next:hover {
			background: <?php echo $theme_options->get( 'breadcrumb_button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_button_hover_border_color' ) != '') { ?>
		.button-previous-next:hover {
			border-color: <?php echo $theme_options->get( 'breadcrumb_button_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_button_hover_text_color' ) != '') { ?>
		.button-previous-next:hover {
			color: <?php echo $theme_options->get( 'breadcrumb_button_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_background_color' ) != '') { ?>
		#main .box-with-categories .box-content {
			background: <?php echo $theme_options->get( 'box_categories_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_border_color' ) != '') { ?>
		.box-with-categories .box-content {
			border: 2px solid <?php echo $theme_options->get( 'box_categories_border_color' ); ?> !important;
			border-top: none !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_border_1px_color' ) != '') { ?>
		.box-with-categories .box-content {
			border: 1px solid <?php echo $theme_options->get( 'box_categories_border_1px_color' ); ?> !important;
			
			<?php if($theme_options->get( 'box_categories_border_1px_color' ) == '#e5e5e5') { ?>
			border-top: none !important;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_link_border_top_color' ) != '') { ?>
		.box-category > ul li {
			border-top-color: <?php echo $theme_options->get( 'box_categories_link_border_top_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_links_color' ) != '') { ?>
		#main .box-category ul li > a {
			color: <?php echo $theme_options->get( 'box_categories_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_links_hover_color' ) != '') { ?>
		#main .box-category ul li > a:hover {
			color: <?php echo $theme_options->get( 'box_categories_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_links_active_color' ) != '') { ?>
		#main .box-category ul li a.active {
			color: <?php echo $theme_options->get( 'box_categories_links_active_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_links_hover_background_color' ) != '') { ?>
		.box-category > ul li > a:hover, 
		.box-category > ul li:hover > a, 
		.box-category > ul li a.active {
			background: <?php echo $theme_options->get( 'box_categories_links_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_bullet_color' ) != '') { ?>
		#main .box-category ul li .head a {
			color: <?php echo $theme_options->get( 'box_categories_bullet_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_heading_background_color' ) != '') { ?>
		.box-with-categories .box-heading {
			background: <?php echo $theme_options->get( 'box_categories_heading_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_heading_background_gradient_top_color' ) != '' && $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ) != '') { ?>
		.box-with-categories .box-heading {
			background: <?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'box_categories_heading_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_categories_heading_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_categories_heading_text_color' ) != '') { ?>
		.box-with-categories .box-heading {
			color: <?php echo $theme_options->get( 'box_categories_heading_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_with_products_background_color' ) != '') { ?>
		.box.box-with-products,
		.product-filter,
		.product-list, 
		.center-column .product-grid,
		#main .box .box-content.products,
		body #main .post .box.box-with-products .box-content,
		.product-grid .product-hover .only-hover,
		.product-grid-type-2 .product-grid .product:hover:before, 
		.product-grid-type-3 .product-grid .product:hover:before, 
		.product-grid-type-5 .product-grid .product:hover:before,
		.product-info .product-image {
			background-color: <?php echo $theme_options->get( 'box_with_products_background_color' ); ?> !important;
		}
		
		.product-grid .product:before {
		     border-color: <?php echo $theme_options->get( 'box_with_products_border_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'box_with_products_background_color' ) == 'none') { ?>
		     .box.box-with-products,
		     .product-filter,
		     .product-list, 
		     .center-column .product-grid,
		     .box .box-content.products,
		     .product-grid .product-hover .only-hover,
		     .product-grid-type-2 .product-grid .product:hover:before, 
		     .product-grid-type-3 .product-grid .product:hover:before, 
		     .product-grid-type-5 .product-grid .product:hover:before {
		     	background: none !important;
		     }
		     
		     .product-grid .product:before {
		          border-color: transparent;
		     }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'box_with_products_border_color' ) != '') { ?>
		.box-with-products .clear:before, 
		.box-with-products .clear:after, 
		.product-grid .product:before, 
		.product-list > div:before, 
		.product-list .desc:before,
		.product-list .name-actions:before,
		.center-column .product-grid:before, 
		.center-column .product-grid:after, 
		.product-grid > .row:before, 
		.product-filter .list-options .limit:before, 
		.product-filter .list-options .sort:before, 
		.product-filter .options .product-compare:before {
			background-color: <?php echo $theme_options->get( 'box_with_products_border_color' ); ?>;
		}
		
		.product-list {
		     border-color: <?php echo $theme_options->get( 'box_with_products_border_color' ); ?>;
		}
		
		     @media (max-width: 767px) {
     		     .responsive .product-grid .row > div.col-xs-6 .product:after {
     		         background: <?php echo $theme_options->get( 'box_with_products_border_color' ); ?>;
     		     }
		     }
		     
		     @media (max-width: 500px) {
     		     .responsive #main .product-grid .row > div.col-xs-6 .product:after {
     		         background: <?php echo $theme_options->get( 'box_with_products_border_color' ); ?>;
     		     }
		     }
		<?php } ?>
		
		<?php if($theme_options->get( 'box_with_products_text_color' ) != '') { ?>
		.box.box-with-products,
		.product-filter,
		.product-list, 
		.center-column .product-grid,
		.box .box-content.products,
		.product-grid .product-hover .only-hover,
		.product-filter .list-options select {
			color: <?php echo $theme_options->get( 'box_with_products_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_with_products_links_color' ) != '') { ?>
		.box.box-with-products a,
		.product-filter a,
		.product-list a, 
		.center-column .product-grid a,
		.box .box-content.products a,
		.product-grid .product-hover .only-hover a {
			color: <?php echo $theme_options->get( 'box_with_products_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_with_products_links_hover_color' ) != '') { ?>
		.box.box-with-products a:hover,
		.product-filter a:hover,
		.product-list a:hover, 
		.center-column .product-grid a:hover,
		.box .box-content.products a:hover,
		.product-grid .product-hover .only-hover a:hover {
			color: <?php echo $theme_options->get( 'box_with_products_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_with_products_heading_color' ) != '') { ?>
		.box.box-with-products .box-heading {
			color: <?php echo $theme_options->get( 'box_with_products_heading_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_with_products_heading_border_bottom_color' ) != '') { ?>
		.box.box-with-products .box-heading {
			border-bottom-color: <?php echo $theme_options->get( 'box_with_products_heading_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_background_color' ) != '') { ?>
		.box > .prev, 
		.box > .next,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next,
		div.pagination-results ul li,
		.tab-content .prev-button,
		.tab-content .next-button {
			background: <?php echo $theme_options->get( 'box_button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_background_gradient_top_color' ) != '' && $theme_options->get( 'box_button_background_gradient_bottom_color' ) != '') { ?>
		.box > .prev, 
		.box > .next,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next,
		div.pagination-results ul li,
		.tab-content .prev-button,
		.tab-content .next-button {
			background: <?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'box_button_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'box_button_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_text_color' ) != '') { ?>
		.box > .prev, 
		.box > .next,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next,
		div.pagination-results ul li,
		.tab-content .prev-button,
		.tab-content .next-button {
			color: <?php echo $theme_options->get( 'box_button_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_border_color' ) != '') { ?>
		.box > .prev, 
		.box > .next,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next,
		div.pagination-results ul li,
		.tab-content .prev-button,
		.tab-content .next-button {
			border-color: <?php echo $theme_options->get( 'box_button_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_hover_background_color' ) != '') { ?>
		.box > .prev:hover, 
		.box > .next:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
		div.pagination-results ul li:hover,
		.tab-content .prev-button:hover,
		.tab-content .next-button:hover {
			background: <?php echo $theme_options->get( 'box_button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_hover_background_gradient_top_color' ) != '' && $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ) != '') { ?>
		.box > .prev:hover, 
		.box > .next:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
		div.pagination-results ul li:hover,
		.tab-content .prev-button:hover,
		.tab-content .next-button:hover {
			background: <?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'box_button_hover_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'box_button_hover_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_hover_text_color' ) != '') { ?>
		.box > .prev:hover, 
		.box > .next:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
		div.pagination-results ul li:hover,
		.tab-content .prev-button:hover,
		.tab-content .next-button:hover {
			color: <?php echo $theme_options->get( 'box_button_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_button_hover_border_color' ) != '') { ?>
		.box > .prev:hover, 
		.box > .next:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover, 
		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
		div.pagination-results ul li:hover,
		.tab-content .prev-button:hover,
		.tab-content .next-button:hover {
			border-color: <?php echo $theme_options->get( 'box_button_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'tabs_link_active' ) != '') { ?>
		.filter-product .filter-tabs ul > li.active > a, .filter-product .filter-tabs ul > li.active > a:hover, .filter-product .filter-tabs ul > li.active > a:focus, .htabs a.selected, .htabs a:hover {
			color: <?php echo $theme_options->get( 'tabs_link_active' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'tabs_link_active_border_bottom_color' ) != '') { ?>
		.htabs a.selected:before,
		.filter-product .filter-tabs ul > li.active > a:before {
			background: <?php echo $theme_options->get( 'tabs_link_active_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'tabs_links_color' ) != '') { ?>
		.filter-product .filter-tabs ul > li > a,
		.htabs a {
			color: <?php echo $theme_options->get( 'tabs_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'category_wall_heading_border_bottom_color' ) != '') { ?>
		.categories-wall .category-wall h3 {
			border-bottom-color: <?php echo $theme_options->get( 'category_wall_heading_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'category_wall_button_background_color' ) != '') { ?>
		.categories-wall .category-wall .more-categories {
			background: <?php echo $theme_options->get( 'category_wall_button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'category_wall_button_border_color' ) != '') { ?>
		.categories-wall .category-wall .more-categories {
			border-color: <?php echo $theme_options->get( 'category_wall_button_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'category_wall_button_text_color' ) != '') { ?>
		.categories-wall .category-wall .more-categories {
			color: <?php echo $theme_options->get( 'category_wall_button_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'category_wall_button_hover_background_color' ) != '') { ?>
		.categories-wall .category-wall .more-categories:hover {
			background: <?php echo $theme_options->get( 'category_wall_button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'category_wall_button_hover_border_color' ) != '') { ?>
		.categories-wall .category-wall .more-categories:hover {
			border-color: <?php echo $theme_options->get( 'category_wall_button_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'category_wall_button_hover_text_color' ) != '') { ?>
		.categories-wall .category-wall .more-categories:hover {
			color: <?php echo $theme_options->get( 'category_wall_button_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_heading_border_bottom_color' ) != '') { ?>
		.popup h4:after {
			background: <?php echo $theme_options->get( 'popup_heading_border_bottom_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_newsletter_input_text_color' ) != '') { ?>
		.popup .newsletter input {
			color: <?php echo $theme_options->get( 'popup_newsletter_input_text_color' ); ?>;
		}
		
		.popup .newsletter input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
		    color:    <?php echo $theme_options->get( 'popup_newsletter_input_text_color' ); ?>;
		}
		
		.popup .newsletter input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		   color:    <?php echo $theme_options->get( 'popup_newsletter_input_text_color' ); ?>;
		   opacity:  1;
		}
		
		.popup .newsletter input::-moz-placeholder { /* Mozilla Firefox 19+ */
		   color:    <?php echo $theme_options->get( 'popup_newsletter_input_text_color' ); ?>;
		   opacity:  1;
		}
		
		.popup .newsletter input:-ms-input-placeholder { /* Internet Explorer 10-11 */
		   color:    <?php echo $theme_options->get( 'popup_newsletter_input_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_newsletter_input_background_color' ) != '') { ?>
		.popup .newsletter input {
			background: <?php echo $theme_options->get( 'popup_newsletter_input_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_newsletter_input_focus_background_color' ) != '') { ?>
		.popup .newsletter input:focus {
			background: <?php echo $theme_options->get( 'popup_newsletter_input_focus_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_newsletter_subscribe_button_text_color' ) != '') { ?>
		.popup .newsletter .subscribe {
			color: <?php echo $theme_options->get( 'popup_newsletter_subscribe_button_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_newsletter_subscribe_button_background_color' ) != '') { ?>
		.popup .newsletter .subscribe {
			background: <?php echo $theme_options->get( 'popup_newsletter_subscribe_button_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_newsletter_subscribe_button_hover_text_color' ) != '') { ?>
		.popup .newsletter .subscribe:hover {
			color: <?php echo $theme_options->get( 'popup_newsletter_subscribe_button_hover_text_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_newsletter_subscribe_button_hover_background_color' ) != '') { ?>
		.popup .newsletter .subscribe:hover {
			background: <?php echo $theme_options->get( 'popup_newsletter_subscribe_button_hover_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_close_button_background_color' ) != '') { ?>
		body .popup-module .mfp-close {
			background: <?php echo $theme_options->get( 'popup_close_button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_close_button_border_color' ) != '') { ?>
		body .popup-module .mfp-close {
			border-color: <?php echo $theme_options->get( 'popup_close_button_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_close_button_text_color' ) != '') { ?>
		body .popup-module .mfp-close {
			color: <?php echo $theme_options->get( 'popup_close_button_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_close_button_hover_background_color' ) != '') { ?>
		body .popup-module .mfp-close:hover {
			background: <?php echo $theme_options->get( 'popup_close_button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_close_button_hover_border_color' ) != '') { ?>
		body .popup-module .mfp-close:hover {
			border-color: <?php echo $theme_options->get( 'popup_close_button_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'popup_close_button_hover_text_color' ) != '') { ?>
		body .popup-module .mfp-close:hover {
			color: <?php echo $theme_options->get( 'popup_close_button_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_background_color' ) != '') { ?>
		#slider .pattern {
			background: <?php echo $theme_options->get( 'slider_background_color' ); ?>;
		}
		
		.spinner {
		     background-color: <?php echo $theme_options->get( 'slider_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_loader_background_color' ) != '') { ?>
		.spinner {
		     background-color: <?php echo $theme_options->get( 'slider_loader_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_border_bottom_4px_color' ) != '') { ?>
		#slider .pattern {
			border-bottom: 4px solid <?php echo $theme_options->get( 'slider_border_bottom_4px_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_buttons_background_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev, .camera_wrap .owl-controls .owl-buttons .owl-next,
		#main .tp-leftarrow.default,
		#main .tp-rightarrow.default,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next {
			background: <?php echo $theme_options->get( 'slider_buttons_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_buttons_hover_background_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev:hover, .camera_wrap .owl-controls .owl-buttons .owl-next:hover,
		#main .tp-leftarrow.default:hover,
		#main .tp-rightarrow.default:hover,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:hover,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:hover {
			background: <?php echo $theme_options->get( 'slider_buttons_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_buttons_icon_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev:before, .camera_wrap .owl-controls .owl-buttons .owl-next:before,
		#main .tp-leftarrow.default:before,
		#main .tp-rightarrow.default:before,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:before,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:before {
			color: <?php echo $theme_options->get( 'slider_buttons_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_buttons_hover_icon_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev:hover:before, .camera_wrap .owl-controls .owl-buttons .owl-next:hover:before,
		#main .tp-leftarrow.default:hover:before,
		#main .tp-rightarrow.default:hover:before,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:hover:before,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:hover:before {
			color: <?php echo $theme_options->get( 'slider_buttons_hover_icon_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_buttons_border_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev, .camera_wrap .owl-controls .owl-buttons .owl-next,
		#main .tp-leftarrow.default,
		#main .tp-rightarrow.default,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next {
			border: 1px solid <?php echo $theme_options->get( 'slider_buttons_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'slider_buttons_hover_border_color' ) != '') { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev:hover, .camera_wrap .owl-controls .owl-buttons .owl-next:hover,
		#main .tp-leftarrow.default:hover,
		#main .tp-rightarrow.default:hover,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-prev:hover,
		#main .post .post-media .media-slider .owl-controls .owl-buttons .owl-next:hover {
			border: 1px solid <?php echo $theme_options->get( 'slider_buttons_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_border_color' ) != '') { ?>
		.sale {
			border: 1px solid <?php echo $theme_options->get( 'sale_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_background_color' ) != '') { ?>
		.sale {
			background: <?php echo $theme_options->get( 'sale_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_background_gradient_top' ) != '' && $theme_options->get( 'sale_background_gradient_bottom' ) != '') { ?>
		.sale {
			background: <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_color_text' ) != '') { ?>
		.sale {
			color: <?php echo $theme_options->get( 'sale_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'new_border_color' ) != '') { ?>
		#main .new {
			border: 1px solid <?php echo $theme_options->get( 'new_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'new_background_color' ) != '') { ?>
		#main .new {
			background: <?php echo $theme_options->get( 'new_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'new_background_gradient_top' ) != '' && $theme_options->get( 'new_background_gradient_bottom' ) != '') { ?>
		#main .new {
			background: <?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'new_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'new_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'new_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'new_color_text' ) != '') { ?>
		#main .new {
			color: <?php echo $theme_options->get( 'new_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'ratings_background_color' ) != '') { ?>
		.rating i {
			color: <?php echo $theme_options->get( 'ratings_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'ratings_active_background_color' ) != '') { ?>
		.rating i.active {
			color: <?php echo $theme_options->get( 'ratings_active_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_color_text' ) != '') { ?>
		.button, .btn {
			color: <?php echo $theme_options->get( 'buttons_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_background_color' ) != '') { ?>
		.button, .btn {
			background: <?php echo $theme_options->get( 'buttons_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_border_color' ) != '') { ?>
		.button, .btn {
			border: 1px solid <?php echo $theme_options->get( 'buttons_border_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_background_gradient_top' ) != '' && $theme_options->get( 'buttons_background_gradient_bottom' ) != '') { ?>
		.button, .btn {
			background: <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_hover_color_text' ) != '') { ?>
		.button:hover, .btn:hover {
			color: <?php echo $theme_options->get( 'buttons_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_hover_border_color' ) != '') { ?>
		.button:hover, .btn:hover {
			border: 1px solid <?php echo $theme_options->get( 'buttons_hover_border_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_hover_background_color' ) != '') { ?>
		.button:hover, .btn:hover {
			background: <?php echo $theme_options->get( 'buttons_hover_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_hover_background_gradient_top' ) != '' && $theme_options->get( 'buttons_hover_background_gradient_bottom' ) != '') { ?>
		.button:hover, .btn:hover {
			background: <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_color_text' ) != '') { ?>
		.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
			color: <?php echo $theme_options->get( 'second_buttons_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_border_color' ) != '') { ?>
		.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
			border: 1px solid <?php echo $theme_options->get( 'second_buttons_border_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_background_color' ) != '') { ?>
		.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
			background: <?php echo $theme_options->get( 'second_buttons_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_background_gradient_top' ) != '' && $theme_options->get( 'second_buttons_background_gradient_bottom' ) != '') { ?>
		.buttons .left .button, .buttons .center .button, .btn-default, .input-group-btn .btn-primary {
			background: <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_hover_color_text' ) != '') { ?>
		.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
			color: <?php echo $theme_options->get( 'second_buttons_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_hover_border_color' ) != '') { ?>
		.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
			border: 1px solid <?php echo $theme_options->get( 'second_buttons_hover_border_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_hover_background_color' ) != '') { ?>
		.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
			background: <?php echo $theme_options->get( 'second_buttons_hover_background_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_hover_background_gradient_top' ) != '' && $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ) != '') { ?>
		.buttons .left .button:hover, .buttons .center .button:hover, .btn-default:hover, .input-group-btn .btn-primary:hover {
			background: <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_text' ) != '') { ?>
		.custom-footer .pattern,
		.custom-footer .pattern a,
		ul.contact-us li {
			color: <?php echo $theme_options->get( 'customfooter_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_heading' ) != '') { ?>
		.custom-footer h4 {
			color: <?php echo $theme_options->get( 'customfooter_color_heading' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_icon_heading' ) != '') { ?>
		.custom-footer h4 i,
		ul.contact-us li span,
		.custom-footer .tweets li a {
			color: <?php echo $theme_options->get( 'customfooter_color_icon_heading' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_icon_contact_us' ) != '') { ?>
		ul.contact-us li i,
		.tweets li:before {
			color: <?php echo $theme_options->get( 'customfooter_color_icon_contact_us' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_border_color' ) != '') { ?>
		.custom-footer h4,
		.custom-footer .background,
		.standard-body .custom-footer .background,
		.fb-like-box,
		ul.contact-us li i {
			border-color: <?php echo $theme_options->get( 'customfooter_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_background_color' ) != '') { ?>
		.custom-footer .background,
		.standard-body .custom-footer .background {
			background: <?php echo $theme_options->get( 'customfooter_background_color' ); ?>;
		}
		
		.custom-footer .pattern {
			background: none;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_text' ) != '') { ?>
		.footer .pattern,
		.footer .pattern a {
			color: <?php echo $theme_options->get( 'footer_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_links' ) != '') { ?>
		.footer .pattern a {
			color: <?php echo $theme_options->get( 'footer_color_links' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_links_hover' ) != '') { ?>
		.footer .pattern a:hover {
			color: <?php echo $theme_options->get( 'footer_color_links_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_heading' ) != '') { ?>
		.footer h4 {
			color: <?php echo $theme_options->get( 'footer_color_heading' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_heading_border_bottom' ) != '') { ?>
		.footer h4 {
			border-bottom-color: <?php echo $theme_options->get( 'footer_color_heading_border_bottom' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_background_color' ) != '') { ?>
		.footer .background,
		.standard-body .footer .background,
		.copyright .background,
		.standard-body .copyright .background {
			background: <?php echo $theme_options->get( 'footer_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_border_color' ) != '') { ?>
		.footer .container > .row:before, 
		.footer .advanced-grid .container > div > .row:before,
		.footer .container > .row > div:before, 
		.footer .advanced-grid .container > div > .row > div:before,
		.footer-type-11 .footer .container > .row:nth-last-child(2) > div:before, 
		.footer-type-11 .footer .advanced-grid .container > div > .row:nth-last-child(2) > div:before,
		.footer-type-16 .footer .container > .row:nth-last-child(2) > div:before, 
		.footer-type-16 .footer .advanced-grid .container > div > .row:nth-last-child(2) > div:before,
		.footer-type-21 .footer .container > .row > div:last-child:after, 
		.footer-type-21 .footer .advanced-grid .container > div > .row > div:last-child:after {
			background: <?php echo $theme_options->get( 'footer_border_color' ); ?>;
		}
		
		.footer-type-11 .footer .container > .row:nth-last-child(2), 
		.footer-type-11 .footer .advanced-grid .container > div > .row:nth-last-child(2),
		.footer-type-16 .footer .container > .row:nth-last-child(2), 
		.footer-type-16 .footer .advanced-grid .container > div > .row:nth-last-child(2) {
		     border-color: <?php echo $theme_options->get( 'footer_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_button_color_text' ) != '') { ?>
		.footer-button {
			color: <?php echo $theme_options->get( 'footer_button_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_button_background_color' ) != '') { ?>
		.footer-button {
			background: <?php echo $theme_options->get( 'footer_button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_button_background_gradient_top' ) != '' && $theme_options->get( 'footer_button_background_gradient_bottom' ) != '') { ?>
		.footer-button {
			background: <?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'footer_button_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'footer_button_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_button_hover_color_text' ) != '') { ?>
		.footer-button:hover {
			color: <?php echo $theme_options->get( 'footer_button_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_button_hover_background_color' ) != '') { ?>
		.footer-button:hover {
			background: <?php echo $theme_options->get( 'footer_button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_button_hover_background_gradient_top' ) != '' && $theme_options->get( 'footer_button_hover_background_gradient_bottom' ) != '') { ?>
		.footer-button:hover {
			background: <?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'footer_button_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'footer_button_hover_background_gradient_bottom' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_date_text' ) != '') { ?>
		#main .post .date-published,
		#main .news.v2 .media-body .bottom,
		.cosmetics-news .media .date-published,
		.medic-news .media .date-published,
		.wine-news .media .date-published,
		.cameras-news .media .date-published {
			color: <?php echo $theme_options->get( 'blog_date_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_categories_links_color' ) != '') { ?>
		#main .post .meta > li a {
			color: <?php echo $theme_options->get( 'blog_categories_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_categories_links_hover_color' ) != '') { ?>
		#main .post .meta > li a:hover {
			color: <?php echo $theme_options->get( 'blog_categories_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_text_color' ) != '') { ?>
		#main .tagcloud a,
		#main .post .tags a,
		#main .news .media-body .tags a,
		#main .posts .post .tags a,
		.cosmetics-news .media .tags a,
		.cameras-news .media .tags a {
			color: <?php echo $theme_options->get( 'blog_tag_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_background_color' ) != '') { ?>
		#main .tagcloud a,
		#main .post .tags a,
		#main .news .media-body .tags a,
		#main .posts .post .tags a,
		.cosmetics-news .media .tags a,
		.cameras-news .media .tags a {
			background: <?php echo $theme_options->get( 'blog_tag_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_background_gradient_top_color' ) != '' && $theme_options->get( 'blog_tag_background_gradient_bottom_color' ) != '') { ?>
		#main .tagcloud a,
		#main .post .tags a,
		#main .news .media-body .tags a,
		#main .posts .post .tags a,
		.cosmetics-news .media .tags a,
		.cameras-news .media .tags a {
			background: <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_background_gradient_bottom_color' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_hover_text_color' ) != '') { ?>
		#main .tagcloud a:hover,
		#main .post .tags a:hover,
		#main .news .media-body .tags a:hover,
		#main .posts .post .tags a:hover,
		.cosmetics-news .media .tags a:hover,
		.cameras-news .media .tags a:hover {
			color: <?php echo $theme_options->get( 'blog_tag_hover_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_hover_background_color' ) != '') { ?>
		#main .tagcloud a:hover,
		#main .post .tags a:hover,
		#main .news .media-body .tags a:hover,
		#main .posts .post .tags a:hover,
		.cosmetics-news .media .tags a:hover,
		.cameras-news .media .tags a:hover {
			background: <?php echo $theme_options->get( 'blog_tag_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_tag_hover_background_gradient_top_color' ) != '' && $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ) != '') { ?>
		#main .tagcloud a:hover,
		#main .post .tags a:hover,
		#main .news .media-body .tags a:hover,
		#main .posts .post .tags a:hover,
		.cosmetics-news .media .tags a:hover,
		.cameras-news .media .tags a:hover {
			background: <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> !important; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?>)) !important; /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'blog_tag_hover_background_gradient_bottom_color' ); ?> 99%) !important; /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_background_color' ) != '') { ?>
		#main .posts .button-more,
		.wine-news .button-more {
			background: <?php echo $theme_options->get( 'blog_button_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_border_color' ) != '') { ?>
		#main .posts .button-more,
		.wine-news .button-more {
			border-color: <?php echo $theme_options->get( 'blog_button_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_text_color' ) != '') { ?>
		#main .posts .button-more,
		.wine-news .button-more {
			color: <?php echo $theme_options->get( 'blog_button_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_hover_background_color' ) != '') { ?>
		#main .posts .button-more:hover,
		.wine-news .button-more:hover {
			background: <?php echo $theme_options->get( 'blog_button_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_hover_border_color' ) != '') { ?>
		#main .posts .button-more:hover,
		.wine-news .button-more:hover {
			border-color: <?php echo $theme_options->get( 'blog_button_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'blog_button_hover_text_color' ) != '') { ?>
		#main .posts .button-more:hover,
		.wine-news .button-more:hover {
			color: <?php echo $theme_options->get( 'blog_button_hover_text_color' ); ?>;
		}
		<?php } ?>
	<?php } ?>
			
	<?php if($theme_options->get( 'font_status' ) == '1') { ?>
		body,
		textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input, select {
			font-size: <?php echo $theme_options->get( 'body_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
			<?php } ?>
		}
		
		ul.megamenu .megamenu-label,
		#main .news .media-body h5,
		#main .posts .post .post-title {
		     <?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
		     font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
		     <?php } ?>
		}
		
		@media (max-width: 767px) {
		     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a,
		     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a {
		          <?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
		          font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
		          <?php } ?>
		     }
		}
		     
		<?php if( $theme_options->get( 'body_font' ) == 'standard' || $theme_options->get( 'body_font' ) == 'Poppins' ) { ?>
		body.firefox-mac,
		body.firefox-mac input,
		body.firefox-mac select {
		     font-weight: 300 !important;
		}
		<?php } ?>
		
		<?php if( $theme_options->get( 'body_font' ) == 'Oswald' ) { ?>
		.header-type-2 #top .dropdown > a:after {
		     margin-top: 6px;
		}
		
		.header-type-2 #top #cart_block .cart-heading p {
		     line-height: 20px;
		}
		<?php } ?>
		
		<?php if( $theme_options->get( 'body_font' ) == 'Alegreya' ) { ?>
		#top #cart_block .cart-heading p {
		     line-height: 19px;
		}
		
		.product-filter .list-options .sort:after,
		.product-filter .list-options .limit:after {
		     top: 2px;
		}
		
		.product-filter .options .product-compare {
		     position: relative;
		     margin-top: -2px;
		     padding-bottom: 22px;
		}
		
		.product-filter .options .button-group {
		     padding-bottom: 21px;
		}
		<?php } ?>
		
		<?php if( $theme_options->get( 'body_font' ) == 'Playfair Display' ) { ?>
		#top #cart_block .cart-heading p:after {
		     margin-top: 5px;
		}
		
		.megamenu-background .vertical .megamenuToogle-wrapper .container:after {
		     margin-top: 6px;
		}
		
		.button, .btn {
		     padding-top: 12px;
		     padding-bottom: 11px;
		}
		
		#main .new,
		.sale,
		.footer-button,
		.button-previous-next {
		     padding-top: 7px;
		     padding-bottom: 6px;
		}
		
		#top #cart_block .cart-heading .cart-count {
		     padding-top: 3px;
		}
		<?php } ?>
		
		<?php if( $theme_options->get( 'body_font' ) == 'Dosis' ) { ?>
		.button, .btn {
		     padding-top: 12px;
		     padding-bottom: 11px;
		}
		
		#main .new,
		.sale,
		.footer-button,
		.button-previous-next {
		     padding-top: 5px;
		     padding-bottom: 5px;
		}
		
		.product-info .cart .add-to-cart #button-cart {
		     font-size: 13px !important;
		}
		
		.box-with-categories .box-heading {
		     padding-bottom: 24px;
		}
		
		.icon-enquiry[align=left] {
		     margin-top: 1px;
		}
		
		#top #cart_block .cart-heading p:after {
		     margin-top: 5px;
		}
		<?php } ?>
		
		.center-column .panel-heading h4 {
		     <?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
		     font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
		     <?php } ?>
		}
		
		.dropdown-menu,
		body .dropdown-menu > li > a,
		.top-bar .menu li a,
		#top .dropdown > a,
		.product-info .cart .add-to-cart p,
		.header-notice,
		.header-type-9 #top #header-center .menu li a,
		.welcome-text,
		.header-type-16 #top #header-left .menu li {
			font-size: <?php echo $theme_options->get( 'body_font_smaller_px' ); ?>px;
		}
		
		<?php if($theme_options->get( 'body_font_smaller_px' ) == 14) { ?>
		#top .dropdown > a:after {
		     margin-top: 6px;
		}
		<?php } ?>
		
		.product-filter .options .product-compare a,
		.product-info .cart .links a,
		.button-previous-next,
		.footer-button,
		.button-white-with-red-text,
		table.attribute thead td,
		table.list thead td,
		.wishlist-product table thead td,
		.wishlist-info table thead td,
		.compare-info thead td,
		.checkout-product table thead td,
		.table thead td,
		.cart-info table thead td,
		.manufacturer-heading,
		.center-column .panel-heading h4,
		ul.box-filter > li > span,
		.popup .form-contact .contact-label label,
		.categories-wall .category-wall .more-categories,
		.mfilter-heading,
		.product-info .options2 > div > label {
			font-size: <?php echo $theme_options->get( 'body_font_very_small_px' ); ?>px !important;
			
			<?php if( $theme_options->get( 'body_font_very_small_transform' ) == 'none') { ?>
			text-transform: none !important;
			<?php } ?>
		}

		ul.megamenu li .sub-menu .content .static-menu a.main-menu {
			font-size: <?php echo $theme_options->get( 'categories_submenu_heading_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_submenu_heading_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'categories_submenu_heading' ) != '' && $theme_options->get( 'categories_submenu_heading' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_submenu_heading' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'categories_submenu_heading_transform' ) == 'uppercase') { ?>
			text-transform: uppercase;
			<?php } ?>
			
			<?php if($theme_options->get( 'categories_submenu_heading_line_height' ) >= 1) { ?>
			line-height: <?php echo $theme_options->get( 'categories_submenu_heading_line_height' ); ?>;
			<?php } ?>
		}
		
		ul.megamenu > li > a strong,
		.megamenuToogle-wrapper .container {
			font-size: <?php echo $theme_options->get( 'categories_bar_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'categories_bar_transform' ) == 'uppercase') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		<?php if($theme_options->get( 'categories_bar_line_height' ) >= 1) { ?>
		.horizontal ul.megamenu > li > a,
		.megamenuToogle-wrapper .container {
		     line-height: <?php echo $theme_options->get( 'categories_bar_line_height' ); ?>;
		}
		<?php } ?>
		
		.box .box-heading,
		.center-column h1, 
		.center-column h2, 
		.center-column h3, 
		.center-column h4, 
		.center-column h5, 
		.center-column h6,
		.products-carousel-overflow .box-heading,
		.htabs a,
		.product-info .options h2,
		h3,
		h4,
		h6,
		.product-block .title-block,
		.filter-product .filter-tabs ul > li > a,
		.popup h4,
		.product-info .product-name a,
		legend {
			font-size: <?php echo $theme_options->get( 'headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'headlines_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'headlines' ) != '' && $theme_options->get( 'headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'headlines' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'headlines_transform' ) == 'uppercase') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		.box-with-categories .box-heading,
		.vertical .megamenuToogle-wrapper .container {
			font-size: <?php echo $theme_options->get( 'categories_box_heading_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_box_heading_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'categories_box_heading' ) != '' && $theme_options->get( 'categories_box_heading' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_box_heading' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'categories_box_heading_transform' ) == 'uppercase') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		<?php if($theme_options->get( 'categories_box_heading_line_height' ) >= 1) { ?>
		.box-with-categories .box-heading,
		.vertical .megamenuToogle-wrapper .container {
		     line-height: <?php echo $theme_options->get( 'categories_box_heading_line_height' ); ?>;
		}
		<?php } ?>
		
		.box-category ul li > a,
		.vertical ul.megamenu > li > a strong {
			font-size: <?php echo $theme_options->get( 'categories_box_links_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_box_links_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'categories_box_links' ) != '' && $theme_options->get( 'categories_box_links' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_box_links' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'categories_box_links_transform' ) == 'uppercase') { ?>
			text-transform: uppercase;
			<?php } ?>
			
			<?php if($theme_options->get( 'categories_box_links_line_height' ) >= 1) { ?>
			line-height: <?php echo $theme_options->get( 'categories_box_links_line_height' ); ?>;
			<?php } ?>
		}
		
		     <?php if($theme_options->get( 'categories_box_links_weight' ) == '4') { ?>
		     .firefox-mac .box-category ul li > a,
		     .firefox-mac .vertical ul.megamenu > li > a strong {
		          font-weight: 300 !important;
		     }
		     <?php } ?>
		
		<?php if($theme_options->get( 'categories_box_links_px' ) == 13) { ?>
		.box-category ul li > a {
		     padding-top: 16px;
		}
		<?php } ?>
		
		.sale,
		#main .new {
			font-size: <?php echo $theme_options->get( 'sale_new_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'sale_new_font_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'sale_new_font' ) != '' && $theme_options->get( 'sale_new_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'sale_new_font' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'sale_new_font_text_transform' ) == 'none') { ?>
			text-transform: none;
			<?php } ?>
			
			<?php if($theme_options->get( 'sale_new_line_height' ) >= 1) { ?>
			line-height: <?php echo $theme_options->get( 'sale_new_line_height' ); ?>;
			<?php } ?>
		}
		
		.footer h4,
		.custom-footer h4 {
			font-size: <?php echo $theme_options->get( 'footer_headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'footer_headlines_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'footer_headlines' ) != '' && $theme_options->get( 'footer_headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'footer_headlines' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'footer_headlines_transform' ) == 'uppercase') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		.breadcrumb .container h1 {
			font-size: <?php echo $theme_options->get( 'page_name_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'page_name_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'page_name' ) != '' && $theme_options->get( 'page_name' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'page_name' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'page_name_transform' ) == 'uppercase') { ?>
			text-transform: uppercase;
			<?php } ?>
		}
		
		.button,
		.btn,
		.footer-button {
			font-size: <?php echo $theme_options->get( 'button_font_px' ); ?>px !important; 
			font-weight: <?php echo $theme_options->get( 'button_font_weight' )*100; ?> !important;
			<?php if( $theme_options->get( 'button_font' ) != '' && $theme_options->get( 'button_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'button_font' ); ?>;
			<?php } ?>
			
			<?php if( $theme_options->get( 'button_font_text_transform' ) == 'none') { ?>
			text-transform: none;
			<?php } ?>
			
			<?php if($theme_options->get( 'button_font_line_height' ) >= 1) { ?>
			line-height: <?php echo $theme_options->get( 'button_font_line_height' ); ?>;
			<?php } ?>
		}
		
		<?php if($theme_options->get( 'button_font_px' ) > 12) { ?>
		.product-info .cart .add-to-cart #button-cart {
		     font-size: <?php echo $theme_options->get( 'button_font_px' ); ?>px !important; 
		}
		<?php } ?>
		
		<?php if( $theme_options->get( 'custom_price' ) != '' && $theme_options->get( 'custom_price' ) != 'standard' ) { ?>
		.product-grid .product .price, 
		.product-list .name-actions > .price, 
		.product-info .price .price-new,
		ul.megamenu li .product .price,
		.advanced-grid-products .product .right .price,
		#top #cart_block .cart-heading p strong,
		.cart-total table tr td:last-child,
		.mini-cart-info td.total,
		.mini-cart-total td:last-child,
		.today-deals-products .product .price,
		.product-info .price .price-old,
		.architecture-products .product .right .price,
		.matrialarts-products .matrial-product .right .price,
		.today-deals-toys2-products .price,
		.today-deals-petshop2-products .price,
		.today-deals-shoes3-products .price,
		.today-deals-computer8-products .price,
		.today-deals-computer6-products .price {
			font-family: <?php echo $theme_options->get( 'custom_price' ); ?>;
		}
		<?php } ?>
		
		<?php if( $theme_options->get( 'custom_price' ) == 'Teko') { ?>
		.product-grid .product .price, 
		.product-list .name-actions > .price, 
		.product-info .price .price-new,
		ul.megamenu li .product .price,
		.advanced-grid-products .product .right .price,
		#top #cart_block .cart-heading p strong,
		.cart-total table tr td:last-child,
		.mini-cart-info td.total,
		.mini-cart-total td:last-child,
		.today-deals-products .product .price,
		.product-info .price .price-old {
		     line-height: 1.3;
		}
		
		#top #cart_block .cart-heading p:after {
		     margin-top: 6px;
		}
		
		#top #cart_block .cart-heading p {
		     padding-top: 10px;
		}
		<?php } ?>
		
		.product-grid .product .price,
		.advanced-grid-products .product .right .price,
		#top #cart_block .cart-heading p strong,
		.cart-total table tr td:last-child,
		.mini-cart-info td.total,
		.mini-cart-total td:last-child,
		.today-deals-products .product .price,
		.architecture-products .product .right .price,
		.matrialarts-products .matrial-product .right .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_small' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?> !important;
		}
		
		<?php if($theme_options->get( 'custom_price_px_small' ) == 20) { ?>
		#top #cart_block .cart-heading p strong,
		.cart-total table tr td:last-child,
		.mini-cart-total td:last-child,
		.mini-cart-info td.total {
		     font-size: 14px;
		}
		<?php } ?>
		
		.product-info .price .price-new {
			font-size: <?php echo $theme_options->get( 'custom_price_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?> !important;
		}
		
		.product-list .name-actions > .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_medium' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?> !important;
		}
		
		.price-old,
		.today-deals-products .product .price .price-old,
		.architecture-products .product .right .price .price-old {
			font-size: <?php echo $theme_options->get( 'custom_price_px_old_price' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
	<?php } ?>
</style>
<?php } ?>

<?php if($theme_options->get( 'background_status' ) == 1) { ?>
<style type="text/css">
	<?php if($theme_options->get( 'body_background_background' ) == '1') { ?> 
	body { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '2') { ?> 
	body { background-image:url(image/<?php echo $theme_options->get( 'body_background' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body_background_background' ) == '3') { ?> 
	body { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'body2_background_background' ) == '1') { ?> 
	body .standard-body:before, 
	body .fixed-body:before { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body2_background_background' ) == '2') { ?> 
	body .standard-body:before, 
	body .fixed-body:before { background-image:url(image/<?php echo $theme_options->get( 'body2_background' ); ?>);background-position:<?php echo $theme_options->get( 'body2_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body2_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body2_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body2_background_background' ) == '3') { ?> 
	body .standard-body:before, 
	body .fixed-body:before { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body2_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body2_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body2_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body2_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'body3_background_background' ) == '1') { ?> 
	.fixed-body,
	.standard-body { }
	<?php } ?>
	<?php if($theme_options->get( 'body3_background_background' ) == '2') { ?> 
	.fixed-body,
	.standard-body { background-image:url(image/<?php echo $theme_options->get( 'body3_background' ); ?>);background-position:<?php echo $theme_options->get( 'body3_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body3_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body3_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'body3_background_background' ) == '3') { ?> 
	.fixed-body,
	.standard-body { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body3_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body3_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body3_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body3_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'top_bar_background_background' ) == '1') { ?> 
	.top-bar { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'top_bar_background_background' ) == '2') { ?> 
	.top-bar { background-image:url(image/<?php echo $theme_options->get( 'top_bar_background' ); ?>);background-position:<?php echo $theme_options->get( 'top_bar_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'top_bar_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'top_bar_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'top_bar_background_background' ) == '3') { ?> 
	.top-bar { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'top_bar_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'top_bar_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'top_bar_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'top_bar_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'header_background_background' ) == '1') { ?> 
	header { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'header_background_background' ) == '2') { ?> 
	header { background-image:url(image/<?php echo $theme_options->get( 'header_background' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'header_background_background' ) == '3') { ?> 
	header { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'header_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'top_background_background' ) == '1') { ?> 
	#top > .background { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'top_background_background' ) == '2') { ?> 
	#top > .background { background-image:url(image/<?php echo $theme_options->get( 'top_background' ); ?>);background-position:<?php echo $theme_options->get( 'top_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'top_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'top_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'top_background_background' ) == '3') { ?> 
	#top > .background { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'top_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'top_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'top_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'top_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'menu_background_background' ) == '1') { ?> 
	.megamenu-background, .megamenu-background > div, .standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before,
	.responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before, .megamenuToogle-wrapper .megamenuToogle-pattern { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'menu_background_background' ) == '2') { ?> 
	.megamenu-background > div {
	     background-image:url(image/<?php echo $theme_options->get( 'menu_background' ); ?>);background-position:<?php echo $theme_options->get( 'menu_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'menu_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'menu_background_attachment' ); ?> !important;
	}
	
	.standard-body .full-width .megamenu-background .mega-menu-modules > div:first-child:before,
	.responsive .standard-body .full-width .megamenu-background .megaMenuToggle:before, .megamenuToogle-wrapper .megamenuToogle-pattern { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'menu_background_background' ) == '3') { ?> 
	.megamenu-background > div { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'menu_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'menu_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'menu_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'menu_background_attachment' ); ?> !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'slider_background_background' ) == '1') { ?> 
	#slider .pattern { background-image:none !important; }
	<?php } ?>
	<?php if($theme_options->get( 'slider_background_background' ) == '2') { ?> 
	#slider .pattern { background-image:url(image/<?php echo $theme_options->get( 'slider_background' ); ?>);background-position:<?php echo $theme_options->get( 'slider_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'slider_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'slider_background_attachment' ); ?> !important; }
	<?php } ?>
	<?php if($theme_options->get( 'slider_background_background' ) == '3') { ?> 
	#slider .pattern { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'slider_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'slider_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'slider_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'slider_background_attachment' ); ?> !important; }
	<?php } ?>
	
     <?php if($theme_options->get( 'footer_background_background' ) == '1') { ?> 
     .footer .pattern { background-image:none !important; }
     <?php } ?>
     <?php if($theme_options->get( 'footer_background_background' ) == '2') { ?> 
     .footer .pattern { background-image:url(image/<?php echo $theme_options->get( 'footer_background' ); ?>);background-position:<?php echo $theme_options->get( 'footer_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'footer_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'footer_background_attachment' ); ?> !important; }
     <?php } ?>
     <?php if($theme_options->get( 'footer_background_background' ) == '3') { ?> 
     .footer .pattern { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'footer_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'footer_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'footer_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'footer_background_attachment' ); ?> !important; }
     <?php } ?>
	
	<?php if($theme_options->get( 'categories_heading_background_background' ) == '2') { ?> 
	.box-with-categories .box-heading { background-image:url(image/<?php echo $theme_options->get( 'categories_heading_background' ); ?>);background-repeat: repeat;background-position: top left; }
	<?php } ?>
	
	<?php if($theme_options->get( 'mobile_menu_navigation_background_background' ) == '2') { ?> 
	.megamenuToogle-wrapper { background-image:url(image/<?php echo $theme_options->get( 'mobile_menu_navigation_background' ); ?>) !important;background-repeat: repeat;background-position: top left; }
	<?php } ?>
	
	<?php if($theme_options->get( 'new_label_background_background' ) == '2') { ?> 
	#main .new { background-image:url(image/<?php echo $theme_options->get( 'new_label_background' ); ?>) !important;background-repeat: repeat;background-position: top left; }
	<?php } ?>
	
	<?php if($theme_options->get( 'sale_label_background_background' ) == '2') { ?> 
	.sale { background-image:url(image/<?php echo $theme_options->get( 'sale_label_background' ); ?>) !important;background-repeat: repeat;background-position: top left; }
	<?php } ?>
	
	<?php if($theme_options->get( 'button_background_background' ) == '2') { ?> 
	.button, .btn, .button:hover, .btn:hover { background-image:url(image/<?php echo $theme_options->get( 'button_background' ); ?>) !important;background-repeat: repeat !important;background-position: top left !important; }
	<?php } ?>
	
	<?php if($theme_options->get( 'second_button_background_background' ) == '2') { ?> 
	.buttons .left .button,
	.buttons .center .button,
	.btn-default,
	.input-group-btn .btn-primary,
	.buttons .left .button:hover,
	.buttons .center .button:hover,
	.btn-default:hover,
	.input-group-btn .btn-primary:hover { background-image:url(image/<?php echo $theme_options->get( 'second_button_background' ); ?>) !important;background-repeat: repeat !important;background-position: top left !important; }
	<?php } ?>
</style>
<?php } ?>