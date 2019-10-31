<?php
/* 
Version: 1.0
Author: Felix Sułkowski
Website: http://lakshmi.com
*/

class ModelSliderCameraslider extends Model {		
	public function getSlider($id) {
		$query = $this->db->query("SELECT * FROM ".DB_PREFIX."camera_slider WHERE id='".$id."'");
		if( count($query) ) {
			foreach($query->rows as $row) {
				$output = array(
					'id' => $row['id'],
					'settings' => unserialize($row['settings']),
					'content' => unserialize($row['content'])
				);
				return $output;
			}
		}
		return false;
	}

}
?>