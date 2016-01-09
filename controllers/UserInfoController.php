<?php
	require_once('BaseController.php');
	require_once('../dao/UserInfoDao.php');
	require_once('ImageUpload.php');
	
	define('TORCH_SECRET', 'torch');
	class UserInfoController extends BaseController {
		
		public function __construct() {
			parent:: __construct(new UserInfoDao());
		}
		
		public function save($model) {
			$model['openid'] = hash('sha256', $model['number'] . TORCH_SECRET);
			$model['support_service'] = implode(',', (array)$model['support_service']);
			$model['photo'] = ImageUpload :: getImageUrl();
			parent::save($model);
			$time = time();
			header("location: ../user-success.php");
		}
	}
?>