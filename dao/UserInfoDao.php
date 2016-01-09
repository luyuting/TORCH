<?php
	require_once('BaseModelDao.php');
	class UserInfoDao extends BaseModelDao {
		
		public function __construct() {
			$this -> table_name = 'tb_user_info';
		}
	}
?>