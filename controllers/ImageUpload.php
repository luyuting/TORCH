<?php 
	class ImageUpload {
		
		public static function getImageUrl(){
			return ImageUpload :: setImage('userImage');
		}
		
		private static function setImage($file_dir) {

			date_default_timezone_set('PRC');
			
			$php_url = dirname($_SERVER['PHP_SELF']) . '/';
			$save_url = $php_url . $file_dir . '/';
			$php_path = dirname(__FILE__) . '/';
			$save_path = $php_path . $file_dir;
			$save_path = realpath($save_path) . '/';
		
			$file_all_path = null;
			foreach($_FILES as $file_key => $file_value) {
				if(!empty($file_value['error']))
					continue;
				if($file_all_path != null)
					$file_all_path .= ",";
				
				$file_name = $file_value['name'];
				
				$temp_arr = explode('.', $file_name);
				$file_ext = array_pop($temp_arr);
				$file_ext = strtolower(trim($file_ext));
				
				$new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
				$file_path = $save_path . $new_file_name;
				
				if(move_uploaded_file($file_value['tmp_name'], $file_path)) {
					@chmod($file_path, 0755);	
					$file_url = $save_url . $new_file_name;
					$file_all_path .= $file_url; 
				}
			}
			
			return $file_all_path;
		}
	}
?>