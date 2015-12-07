<?php
	require_once('BaseModelDao.php');
	class SchoolMateDao extends BaseModelDao {
		
		public function __construct() {
			$this -> table_name = 'tb_school_mate';
		}
	}
?>