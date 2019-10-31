<?php
//-----------------------------------------------------
// News Module for Opencart v1.5.6   					
// Modified by villagedefrance                          		
// contact@villagedefrance.net                         		
//-----------------------------------------------------

class ControllerModuleNews extends Controller {
	private $_name = 'news';

	protected function index($setting) {
		static $module = 0;
	
		$this->language->load('module/' . $this->_name);
	
      	$this->data['heading_title'] = $this->language->get('heading_title');
	
		$this->load->model('localisation/language');
	
		$this->data['customtitle'] = $this->config->get($this->_name . '_customtitle' . $this->config->get('config_language_id'));
		$this->data['header'] = $this->config->get($this->_name . '_header');
	
		if (!$this->data['customtitle']) { $this->data['customtitle'] = $this->data['heading_title']; } 
		if (!$this->data['header']) { $this->data['customtitle'] = ''; }
	
		$this->data['icon'] = $this->config->get($this->_name . '_icon');
		$this->data['box'] = $this->config->get($this->_name . '_box');
	
		//$this->document->addStyle('catalog/view/theme/default/stylesheet/news.css');
	
		$this->load->model('catalog/news');
	
		$this->data['text_more'] = $this->language->get('text_more');
		$this->data['text_posted'] = $this->language->get('text_posted');
	
		$this->data['show_headline'] = $this->config->get($this->_name . '_headline_module');
	
		$this->data['news_count'] = $this->model_catalog_news->getTotalNews();
	
		$this->data['news_limit'] = $setting['limit'];
	
		if ($this->data['news_count'] > $this->data['news_limit']) { $this->data['showbutton'] = true; } else { $this->data['showbutton'] = false; }
	
		$this->data['buttonlist'] = $this->language->get('buttonlist');
	
		$this->data['newslist'] = $this->url->link('information/news');
	
		$this->data['numchars'] = $setting['numchars'];
	
		if (isset($this->data['numchars'])) { $chars = $this->data['numchars']; } else { $chars = 100; }
	
		$this->data['news'] = array();
	
		$results = $this->model_catalog_news->getNewsShorts($setting['limit']);
	
		foreach ($results as $result) {
			if ($result['image'] && file_exists(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], 460, 240);
			} else {
				$image = $this->model_tool_image->resize('no_image.jpg', 460, 240);
			}
			$this->data['news'][] = array(
				'title'        		=> $result['title'],
				'description'  	=> utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $chars),
				'href'         	=> $this->url->link('information/news', 'news_id=' . $result['news_id']),
				'posted'   		=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'image'			=> $image
			);
		}
	
		$this->data['module'] = $module++; 
	
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/' . $this->_name . '.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/' . $this->_name . '.tpl';
		} else {
			$this->template = 'default/template/module/' . $this->_name . '.tpl';
		}
	
		$this->render();
	}
}
?>
