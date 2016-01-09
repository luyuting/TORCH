<?php 
	include('check.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>校友信息</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="description" content="大连理工大学管理与经济学部校友会，在填写反馈意见前，请填写您的基本信息，
			以便我们为您提供更加优质、快捷的服务"/>
		<link href="style/bootstrap.min.css" rel="stylesheet">
		<link href="style/site.css" rel="stylesheet">
		<link href="style/schoolmate-save.css" rel="stylesheet">
		<script src="script/jquery-1.11.1.min.js"></script>
		<script src="script/bootstrap.min.js"></script>
		<script>
			$(function() {
				$("#w0").bind("submit", function() {
					
					var empty = /^\s+$/;
					var tel = /^1[3|5|7|8][0-9]{9}$/;
					var year = /^[12][567890][0-9]{2}$/;
					var email = /^[_a-zA-Z\d\-\.]+@[_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+$/;
					
					if(empty.test($("#schoolmate-mate_name").val()) || $("#schoolmate-mate_name").val() == "") {
						$("#schoolmate-mate_name").focus();
						return false;
					}
					if(!tel.test($("#schoolmate-mate_tel").val())) {
						$("#schoolmate-mate_tel").focus();
						return false;
					}
					if(!email.test($("#schoolmate-mate_mail").val())) {
						$("#schoolmate-mate_mail").focus();
						return false;
					}
					if(!year.test($("#schoolmate-mate_year").val())) {
						$("#schoolmate-mate_year").focus();
						return false;
					}
					return true;
				});
			});
		</script>
	</head>
<body>
<div class="wrap">
    <div class="container">
            
	<div>
		<p>亲爱的校友，为了您能更好地享受大连理工大学管理与经济学部校友会的服务，请返回菜单栏或者点击下方按钮完善个人详细资料</p>
		<p class="more"><a href="#">完善资料&nbsp;<span>&gt;&gt;</span></a></p>
	</div>
	<div class="schoolmate-save">
		<img src="<?= $userinfo['headimgurl'] ?>">

		<form id="w0" action="controllers/index.php?r=SchoolMate/save" method="post">
			<div class="form-group field-schoolmate-mate_openid required">
				<input type="hidden" id="schoolmate-mate_openid" class="form-control" name="SchoolMate[mate_openid]" value = "<?= $userinfo['openid'] ?>">
			</div>        
			<div class="form-group field-schoolmate-mate_name required">
				<label class="control-label" for="schoolmate-mate_name">姓名</label>
				<input type="text" id="schoolmate-mate_name" class="form-control" name="SchoolMate[mate_name]">
				<div class="help-block"></div>
			</div>       
			<div class="form-group field-schoolmate-mate_tel required">
				<label class="control-label" for="schoolmate-mate_tel">电话</label>
				<input type="text" id="schoolmate-mate_tel" class="form-control" name="SchoolMate[mate_tel]">
				<div class="help-block"></div>
			</div>
			<div class="form-group field-schoolmate-mate_mail required">
				<label class="control-label" for="schoolmate-mate_mail">邮箱</label>
				<input type="text" id="schoolmate-mate_mail" class="form-control" name="SchoolMate[mate_mail]">
				<div class="help-block"></div>
			</div>        
			<div class="form-group field-schoolmate-mate_edu required">
				<label class="control-label" for="schoolmate-mate_edu">学历</label>
				<select id="schoolmate-mate_edu" class="form-control" name="SchoolMate[mate_edu]">
					<option>本科</option>
					<option>硕士</option>
					<option>博士</option>
				</select>
				</div>        
			<div class="form-group field-schoolmate-mate_year required">
				<label class="control-label" for="schoolmate-mate_year">毕业年份</label>
				<input type="text" id="schoolmate-mate_year" class="form-control" name="SchoolMate[mate_year]">
				<div class="help-block"></div>
			</div>    
			<div class="form-group">
				<button type="submit" class="btn btn-primary">确认</button>        
			</div>
		</form>
	</div><!-- schoolmate-save -->
    </div>
</div>

<?php include('footer.html');?>

</body>
</html>