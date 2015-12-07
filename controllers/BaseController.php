<?php 
	require_once('../dao/SchoolMateDao.php');
	class BaseController {
		protected $baseDao;
		
		public function __construct($dao) {
			$this -> baseDao = $dao;
		}
		
		public function save($model) {
			return $this -> baseDao -> save($model);
		}
		
		public function find($model) {
			return $this -> baseDao -> find($model);
		}
	}
?>