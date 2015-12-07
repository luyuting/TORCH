<?php
	require_once('BaseModelDao.php');
	class AdviceDao extends BaseModelDao {
		
		public function __construct() {
			$this -> table_name = 'tb_advice';
		}
	}
?>