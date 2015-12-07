<?php
	$subtime =intval(time()) - intval($_GET['time']);
    if($subtime > 1) {
		$appid = "appid";
		$redirect_uri = "http://localhost/schoolmate/grant.php";
		$authorize_url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=
			$redirect_uri&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect";
		header("location: " . $authorize_url);
	}
?>