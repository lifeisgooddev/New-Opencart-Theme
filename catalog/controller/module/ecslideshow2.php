<?php
/******************************************************
 * @package Camera Slideshow for Opencart 1.5.x
 * @version 1.0
 * @author ecomteck (http://ecomteck.com)
 * @copyright	Copyright (C) May 2013 ecomteck.com <@emai:ecomteck@gmail.com>.All rights reserved.
 * @license		GNU General Public License version 2
*******************************************************/

class ControllerModuleEcslideshow2 extends Controller {
	protected function index($setting = array()) {
		static $module = 0;
		if(empty($setting)){
			$modules = $this->config->get('ecslideshow2_module');
			if ($modules) {
				foreach ($modules as $module) {  
					if ( ($module['layout_id'] == '0' ) && $module['status']) {
						$setting = $module;
						break;			
					}
				}
			}
		}
		$current_store_id = $this->config->get('config_store_id');
		$stores = isset($setting['store_id'])?$setting['store_id']:array();
		if(!empty($stores) && !in_array($current_store_id, $stores)){
			return;
		}
		$this->language->load('module/ecslideshow2');
		$this->load->model('ecslideshow2/banner');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');
		$setting = $this->defaultConfig($setting);
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/stylesheet/ecslideshow2.css')) {
			$this->document->addStyle('catalog/view/theme/'.$this->config->get('config_template').'/stylesheet/ecslideshow2.css');
		} else {
			$this->document->addStyle('catalog/view/theme/default/stylesheet/ecslideshow2.css');
		}

	    
		if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
         	$base = $this->config->get('config_ssl');
         	$base = empty($base)?HTTPS_CATALOG:$base;
	    } else {
	        $base = $this->config->get('config_url');
	        $base = empty($base)?HTTP_CATALOG:$base;
	    }
	    $this->data['base'] = $base;
	    
	    $this->data['enable_async'] = $setting['enable_async'];

	    if($setting['enable_async']){
			$this->data['script'] =  $this->data['base'].'catalog/view/javascript/ecslideshow2/ecslideshow2.min.js';
		}else{
			$this->document->addScript('catalog/view/javascript/ecslideshow2/jquery.mobile.customized.min.js');
			$this->document->addScript('catalog/view/javascript/ecslideshow2/jquery.easing.1.3.js');
			$this->document->addScript('catalog/view/javascript/ecslideshow2/camera.min.js');
		}

	    $lang_id = $this->config->get('config_language_id');
	    $this->data['button_cart'] = $this->language->get("button_cart");
	    $this->data["skin"] = isset($setting["skin"])?$setting["skin"]:"camera_azure_skin";
	    $this->data["alignment"] = isset($setting["alignment"])?$setting["alignment"]:"center";
	    $this->data["auto_advance"] = isset($setting["auto_advance"])?$setting["auto_advance"]:1;
	    $this->data["mobile_auto_advance"] = isset($setting["mobile_auto_advance"])?$setting["mobile_auto_advance"]:1;
	    $this->data["bar_direction"] = isset($setting["bar_direction"])?$setting["bar_direction"]:"leftToRight";
	    $this->data["cols"] = isset($setting["cols"])?$setting["cols"]:6;
	    $this->data["easing"] = isset($setting["easing"])?$setting["easing"]:"easeInOutExpo";
	    $this->data["fx"] = isset($setting["fx"])?$setting["fx"]:"random";
	    if(is_array($this->data['fx'])){
	    	$this->data['fx'] = implode(",",$this->data['fx']);
	    }
	    $this->data["grid_difference"] = isset($setting["grid_difference"])?$setting["grid_difference"]:250;
	    $this->data["height"] = isset($setting["height"])?$setting["height"]:'50%';
	    $this->data["hover"] = isset($setting["hover"])?$setting["hover"]:1;
	    $this->data["loader"] = isset($setting["loader"])?$setting["loader"]:"pie";
	    $this->data["loader_color"] = isset($setting["loader_color"])?$setting["loader_color"]:"#eeeeee";
	    $this->data["loader_bg_color"] = isset($setting["loader_bg_color"])?$setting["loader_bg_color"]:"#222222";
	    $this->data["loader_opacity"] = isset($setting["loader_opacity"])?$setting["loader_opacity"]:'.8';
	    $this->data["min_height"] = isset($setting["min_height"])?$setting["min_height"]:"200px";
	    $this->data["navigation"] = isset($setting["navigation"])?$setting["navigation"]:1;
	    $this->data["navigation_hover"] = isset($setting["navigation_hover"])?$setting["navigation_hover"]:1;
	    $this->data["overlayer"] = isset($setting["overlayer"])?$setting["overlayer"]:1;
	    $this->data["pagination"] = isset($setting["pagination"])?$setting["pagination"]:1;
	    $this->data["play_pause"] = isset($setting["play_pause"])?$setting["play_pause"]:1;
	    $this->data["pie_diameter"] = isset($setting["pie_diameter"])?$setting["pie_diameter"]:38;
	    $this->data["pie_position"] = isset($setting["pie_position"])?$setting["pie_position"]:"rightTop";
	    $this->data['bar_position'] = isset($setting["bar_position"])?$setting["bar_position"]:"bottom";
	    $this->data["rows"] = isset($setting["rows"])?$setting["rows"]:4;
	    $this->data["sliced_cols"] = isset($setting["sliced_cols"])?$setting["sliced_cols"]:12;
	    $this->data["sliced_rows"] = isset($setting["sliced_rows"])?$setting["sliced_rows"]:8;
	    $this->data["slide_on"] = isset($setting["slide_on"])?$setting["slide_on"]:'random';
	    $this->data["thumbnails"] = isset($setting["thumbnails"])?$setting["thumbnails"]:0;
	    $this->data["time"] = isset($setting["time"])?$setting["time"]:7000;
	    $this->data["trans_period"] = isset($setting["trans_period"])?$setting["trans_period"]:1500;
	    $this->data['show_caption'] = isset($setting['show_caption'])?$setting['show_caption']:1;
	    $this->data['support_rtl'] = isset($setting['support_rtl'])?$setting['support_rtl']:1;
	    $this->data['caption_effect'] = $setting['caption_effect'];

	    $this->data["show_category"] = isset($setting["show_category"])?$setting["show_category"]:1;
	    $this->data["show_image"] = isset($setting["show_image"])?$setting["show_image"]:1;
	    $this->data["show_product_name"] = isset($setting["show_product_name"])?$setting["show_product_name"]:1;
	    $this->data["show_price"] = isset($setting["show_price"])?$setting["show_price"]:1;
	    $this->data["show_addtocart"] = isset($setting["show_addtocart"])?$setting["show_addtocart"]:1;
	    $this->data["show_product_description"] = isset($setting["show_product_description"])?$setting["show_product_description"]:1;

	    $data_source = isset($setting["data_source"])?$setting["data_source"]:"banner";
	    $limit = isset($setting["limit"])?$setting["limit"]:5;
	   
	    $this->data["module_width"] = isset($setting["module_width"])?$setting["module_width"]:"800px";
	    $this->data["module_height"] = isset($setting["module_height"])?$setting["module_height"]:"600px";
	    $this->data["thumbnail_width"] = isset($setting["thumbnail_width"])?$setting["thumbnail_width"]:"100";
		$this->data["thumbnail_height"] = isset($setting["thumbnail_width"])?$setting["thumbnail_width"]:"75";
		$this->data['show_product_info'] = isset($setting["show_product_info"])?$setting["show_product_info"]:"1";
		$this->data['show_custom_code'] = isset($setting['show_custom_code'])?$setting['show_custom_code']: 0;

		$this->data['background_color'] = isset($setting['background_color'])?$setting['background_color']: "";
		$this->data['text_color'] = isset($setting['text_color'])?$setting['text_color']: "";
		$this->data['link_color'] = isset($setting['link_color'])?$setting['link_color']: "";

	    $this->data["slides"] = array();
	    $banners = array();

	    $setting['banner_id'] = isset($setting['banner_id'])?(int)$setting['banner_id']:0;
	    $setting['random_mode'] = isset($setting['random_mode'])?(int)$setting['random_mode']:0;

	    if(!empty($setting['banner_id'])){
	    	$banners = $this->model_ecslideshow2_banner->getBanner($setting['banner_id'], $limit, $setting['random_mode']);
		    $this->data["slides"] = $this->getBannerInfo($banners, $setting);

			$this->data['module'] = $module++;

			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/ecslideshow2.tpl')) {
				$this->template = $this->config->get('config_template') . '/template/module/ecslideshow2.tpl';
			} else {
				$this->template = 'default/template/module/ecslideshow2.tpl';
			}

			$this->render();
	    }
	    return false;
	}
	function getBannerInfo($banners = array(), $setting= array()){
		$data = array();
		$banner_info = $banners['banner_info'];
		$banners = $banners['banners'];
		$main_width = $main_height = 0;
		if($banner_info){
			$main_width = isset($banner_info["main_width"])?$banner_info["main_width"]:"0";
	   		$main_height = isset($banner_info["main_height"])?$banner_info["main_height"]:"0";
		}
		if(empty($main_width) && empty($main_height)){
			$main_width = isset($setting["main_width"])?$setting["main_width"]:"800";
	    	$main_height = isset($setting["main_height"])?$setting["main_height"]:"600";
		}
		
		$show_product_info = isset($setting["show_product_info"])?$setting["show_product_info"]:0;
		$thumbnail_width = isset($setting["thumbnail_width"])?$setting["thumbnail_width"]:"100";
		$thumbnail_height = isset($setting["thumbnail_width"])?$setting["thumbnail_width"]:"75";
		$title_max_chars =  isset($setting["title_max_chars"])?$setting["title_max_chars"]:"100";
		$description_max_chars =  isset($setting["description_max_chars"])?$setting["description_max_chars"]:"150";
		$resize_image = isset($setting["resize_image"])?$setting["resize_image"]:"1";
		$resize_type = isset($setting["resize_type"])?$setting["resize_type"]:"w";
		$is_striped = isset($setting["is_striped"])?$setting["is_striped"]: 1;
		$show_custom_code = isset($setting['show_custom_code'])?$setting['show_custom_code']: 0;
		$des_max_chars = isset($setting['des_max_chars'])?$setting['des_max_chars']: 60;

		$product_image_width = isset($setting['product_image_width'])?(int)$setting['product_image_width']:100;
		$product_image_height = isset($setting['product_image_height'])?(int)$setting['product_image_height']:100;


		foreach ($banners as $banner) {
			$image = false;
			$thumb = false;
			$rating = false;
			$price = false;
			$special = false;
			$reviews = false;

			$banner['params'] = isset($banner['params'])?unserialize($banner['params']):array();
			$top = isset($banner['params']['top'])?$banner['params']['top']:0;
			$left = isset($banner['params']['left'])?$banner['params']['left']:0;
			$limit_products = isset($banner['params']['limit_product'])?$banner['params']['limit_product']:1;
			$category_id = isset($banner['category_id'])?explode(",", $banner['category_id']):array();

			if(!empty($banner['image'])){
				if($resize_image){
					$image = $this->model_tool_image->resize($banner['image'], $main_width, $main_height, $resize_type);
				}else{
					if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
						$image = $this->config->get('config_ssl') . 'image/' . $banner['image'];
					} else {
						$image = $this->config->get('config_url') . 'image/' . $banner['image'];
					}
				}
				
				$thumb = $this->model_tool_image->resize($banner['image'], $thumbnail_width, $thumbnail_height);
			}

			if($show_product_info ){
				$products = array();
				$sdata = array(
					'filter_category_id' => $category_id,
					'sort'  => 'p.date_added',
					'order' => 'DESC',
					'start' => 0,
					'limit' => $limit_products
				);

				if(isset($banner['params']['filter_type']) && $banner['params']['filter_type']){
					switch ($banner['params']['filter_type']) {
						case 'latest':
							$products = $this->model_ecslideshow2_banner->getLatestProducts( $sdata );

							break;
						case 'bestseller':
				    		$products = $this->model_ecslideshow2_banner->getBestSellerProducts( $sdata );
				    		break;
				    	case 'special':
				    		$products = $this->model_ecslideshow2_banner->getProductSpecials( $sdata );
				    		break;
				    	case 'mostviewed':
				    		$products = $this->model_ecslideshow2_banner->getPopularProducts( $sdata );
				    		break;
				    	case 'random':
				    		$products = $this->model_ecslideshow2_banner->getRandomProducts( $sdata );
				    		break;
						case 'featured':
							$product_ids = isset($banner['params']['featured'])?$banner['params']['featured']:array();

							$product_ids = is_array($product_ids)?$product_ids:explode(",", $product_ids);

							$filter_data = array("filter_id" => $product_ids,
										  "start" => 0,
										  "limit" => $limit_products);

							$products = $this->model_ecslideshow2_banner->getProducts($filter_data);

							break;
						default:

							break;
					}
				}

				if($products){
					foreach($products as $key =>$product){
						$image2 = false;
						$thumb2 = false;
						$rating = false;
						$price = false;
						$special = false;
						$reviews = false;
						if ($product['image'] && isset($product_image_width) && $product_image_height) {
							$image2 = $this->model_tool_image->resize($product['image'], $product_image_width, $product_image_height);
						}

						if ($this->config->get('config_review_status')) {
							$rating = $product['rating'];
						}
						if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
							$price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')));
						}
						if ((float)$product['special']) {
							$special = $this->currency->format($this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax')));
						}
						$reviews = sprintf($this->language->get('text_reviews'), (int)$product['reviews']);
						$product['thumb'] = $image2;
						$product['price'] = $price;
						$product['special'] = $special;
						$product['rating'] = $rating;
						$product['reviews'] = $reviews;
						$product['link'] = $this->url->link('product/product', 'product_id=' . $product['product_id']);
						$product['description'] = html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8');
						$product['short_description'] = $this->substring($product['description'], $des_max_chars, '');
						if($category = $this->model_ecslideshow2_banner->getCategoryByProduct($product['product_id'])){
							$product['category_id'] = $category['category_id'];
							$product['category_name'] = $category['name'];
							$product['category_link'] = $this->url->link('product/category', 'path='.(int)$product['category_id']);
						}

						$products[$key] = $product;
					}
				}
			}
			$description = html_entity_decode($banner['description'], ENT_QUOTES, 'UTF-8');
			$description = $this->substring($description, $description_max_chars, '', $is_striped);

			$banner['title'] = $this->substring($banner['title'], $title_max_chars);

			$data[] = array(
				'thumb'   	 => $thumb,
				'image'		 => $image,
				'top'		 => $top,
				'left'		 => $left,
				'caption'    => $banner['title'],
				'link'    	 => $banner['link'],
				'products'	 => $products,
				'description'=> $description,
				'params'	 => $banner['params']
			);
		}

		return $data;
	}
	protected function runCustomCode($code = ""){
		if($code){
			ob_start();
			// Do eval()
			eval($code);

			$output = ob_get_contents();
			ob_end_clean();
			return $output;
		}
		return;
	}
	protected function substring( $text, $length = 100, $replacer ='...', $is_striped=true ){
    		$text = ($is_striped==true)?strip_tags($text):$text;
    		if(strlen($text) <= $length || empty($text)){
    			return $text;
    		}
    		$text = substr($text,0,$length);
    		$pos_space = strrpos($text,' ');
    		return substr($text,0,$pos_space).$replacer;
	}
	protected function defaultConfig($setting = array()){
		$defaults = array('skin'	=> 'camera_azure_skin',
			'title_max_chars'		=> 100,
			'description_max_chars'	=> 150,
			'enable_async'			=> 0,
			'show_custom_code'		=> 0,
			'show_caption'			=> 1,
            'caption_effect'		=> 'moveFromBottom',
			'show_product_info'		=> 1,
			'is_striped'			=> 0,
			'barPosition'			=> 'bottom',
			'alignment'				=> 'center',
			'auto_advance'			=> '1',
			'mobile_auto_advance'	=> '1',
			'bar_direction'			=> 'leftToRight',
			'cols'					=> '6',
			'easing'				=> 'easeInOutExpo',
			'fx'					=> 'random',
			'grid_difference'		=> '250',
			'height'				=> '50%',
			'hover'					=> '1',
			'loader'				=> 'pie',
			'loader_color'			=> '#eeeeee',
			'loader_bg_color'		=> '#222222',
			'loader_opacity'		=> '.8',
			'min_height'			=> '200px',
			'navigation'			=> '1',
			'navigation_hover'		=> '1',
			'overlayer'				=> '1',
			'pagination'			=> '1',
			'play_pause'			=> '1',
			'pie_diameter'			=> '38',
			'pie_position'			=> 'rightTop',
			'rows'					=> '4',
			'sliced_cols'			=> '12',
			'sliced_rows'			=> '8',
			'slide_on'				=> 'random',
			'thumbnails'			=> '0',
			'time'					=> '7000',
			'trans_period'			=> '1500',
			'data_source'			=> 'banner',
			'limit'					=> '5',
			'module_width'			=> '800px',
			'module_height'			=> '600px',
			'main_width'			=> '800',
			'main_height'			=> '600',
			'thumbnail_width'		=> '100',
			'thumbnail_height'		=> '75',
			'banner_id'				=> '0'
			);
		if(!empty($setting)){
			return array_merge($defaults, $setting);
		}
		else{
			return $defaults;
		}
	}
}
?>
