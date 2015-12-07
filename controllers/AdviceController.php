<?php 
	require_once('BaseController.php');
	require_once('../dao/AdviceDao.php');
	class AdviceController extends BaseController {
		
		public function __construct() {
			parent:: __construct(new AdviceDao());
		}
		
		public function save($model) {
			parent::save($model);
			$time = time();
			header("location: ../advice-success.php?time=" . $time);
		}
	}
?>