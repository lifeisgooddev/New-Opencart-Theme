<?php
class ControllerModuleSlideshowLocalized extends Controller {
	protected function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$this->document->addScript('catalog/view/javascript/jquery/nivo-slider/jquery.nivo.slider.pack.js');

		if (file_exists('catalog/view/theme/' . $this->config->get('config_template') . '/stylesheet/slideshow.css')) {
			$this->document->addStyle('catalog/view/theme/' . $this->config->get('config_template') . '/stylesheet/slideshow.css');
		} else {
			$this->document->addStyle('catalog/view/theme/default/stylesheet/slideshow.css');
		}

		$this->data['width'] = $setting['width'];
		$this->data['height'] = $setting['height'];

		/*if (isset($setting['languagecode'])):
               $languagecode = $setting['languagecode'];
     	else:
          	$languagecode = $this->session->data['language'];
          endif;*/
		$currentlanguage = $this->session->data['language'];

		$this->data['banners'] = array();

		if (isset($setting['banner_id']) && (isset($setting['languagecode'])) && ($setting['languagecode'] == $currentlanguage)) {
			$results = $this->model_design_banner->getBanner($setting['banner_id']);

			foreach ($results as $result) {
				if (file_exists(DIR_IMAGE . $result['image'])) {
					$this->data['banners'][] = array(
						'title' => $result['title'],
						'link'  => $result['link'],
						'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}

		$this->data['module'] = $module++;

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/slideshowlocalized.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/slideshowlocalized.tpl';
		} else {
			$this->template = 'default/template/module/slideshowlocalized.tpl';
		}

		$this->render();
	}
}
?>