<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="大连理工大学管理与经济学部校友信息采集">
    <title>校友资料</title>
	<link href="style/bootstrap.min.css" rel="stylesheet">
	<link href="style/site.css" rel="stylesheet">
	<link href="style/user-info.css" rel="stylesheet">
	<script src="script/jquery-1.11.1.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script>
		$(function() {
			/*$("#userinfo-support_service input[type = 'checkbox']").bind("click", function() {

				if(this.checked == true) {
					//$(this).parent().after("");
					
					console.log($(this).val());
				}
			});*/
			$("#w0").bind("submit", function() {
				if($("#userinfo-number").val() == "") {
					$("#userinfo-number").focus();
					return false;
				}
			});
			
			$("#userinfo-photo").bind("change", function() {
				var file = this.files[0];
				
				var img = $("#photo")[0];
				img.file = file;
				  
				var reader = new FileReader();  
				reader.onload = (function(aImg){  
					return function(e){  
						aImg.src = e.target.result;  
					};  
				})(img);  
				reader.readAsDataURL(file);  
				
			});	
		});
	</script>
<body>
<div class="wrap">
    <div class="container">
		<div class="user-info">
			<img src = "images/me.png"/>
			<form id="w0" action="controllers/index.php?r=UserInfo/save" method="post" enctype="multipart/form-data">
				<div class="form-group field-userinfo-openid required">
					<!-- <label class="control-label" for="userinfo-openid">Openid</label>-->
					<input type="hidden" id="userinfo-openid" class="form-control" name="UserInfo[openid]">
				</div>        
				<div class="form-group field-userinfo-openid required">
					<label class="control-label" for="userinfo-name">姓名</label>
					<input type="text" id="userinfo-name" class="form-control" name="UserInfo[name]">
				</div>   
				<div class="form-group field-userinfo-year required">
					<label class="control-label" for="userinfo-year">毕业年份</label>
					<input type="number" id="userinfo-year" class="form-control" name="UserInfo[year]">
				</div>       
				<div class="form-group field-userinfo-major required">
					<label class="control-label" for="userinfo-major">专业</label>
					<input type="text" id="userinfo-major" class="form-control" name="UserInfo[major]">
				</div>        
				<div class="form-group field-userinfo-number required">
					<label class="control-label" for="userinfo-number">学号</label>
					<input type="number" id="userinfo-number" class="form-control" name="UserInfo[number]">
				</div>        
				<div class="form-group field-userinfo-degree required">
					<label class="control-label" for="userinfo-degree">校友类型</label>
					<select id="userinfo-degree" class="form-control" name="UserInfo[degree]">
						<option>本科</option>
						<option>硕士</option>
						<option>博士</option>
						<option>MBA</option>
						<option>EMBA</option>
					</select>
				</div>        
				<div class="form-group field-userinfo-city required">
					<label class="control-label" for="userinfo-city">所在城市</label>
					<input type="text" id="userinfo-city" class="form-control" name="UserInfo[city]">
				</div>        
				<div class="form-group field-userinfo-industry required">
					<label class="control-label" for="userinfo-industry">所在行业</label>
					<input type="text" id="userinfo-industry" class="form-control" name="UserInfo[industry]">
				</div>        
				<div class="form-group field-userinfo-company required">
					<label class="control-label" for="userinfo-company">所在企业</label>
					<input type="text" id="userinfo-company" class="form-control" name="UserInfo[company]">
				</div>        
				<div class="form-group field-userinfo-department required">
					<label class="control-label" for="userinfo-department">部门</label>
					<input type="text" id="userinfo-department" class="form-control" name="UserInfo[department]">
				</div>        
				<div class="form-group field-userinfo-position required">
					<label class="control-label" for="userinfo-position">职务</label>
					<input type="text" id="userinfo-position" class="form-control" name="UserInfo[position]">
				</div>        
				<div class="form-group field-userinfo-email required">
					<label class="control-label" for="userinfo-email">邮箱</label>
					<input type="email" id="userinfo-email" class="form-control" name="UserInfo[email]">
				</div>        
				<div class="form-group field-userinfo-tel required">
					<label class="control-label" for="userinfo-tel">联系电话</label>
					<input type="number" id="userinfo-tel" class="form-control" name="UserInfo[tel]">
				</div>        
				<div class="form-group field-userinfo-field required">
					<label class="control-label" for="userinfo-field">从事领域简述</label>
					<input type="text" id="userinfo-field" class="form-control" name="UserInfo[field]" placeholder="选填">
				</div>        
				<div class="form-group field-userinfo-support_service required">
					<label class="control-label" for="userinfo-support_service">可提供的服务</label>
					<input type="hidden" name="UserInfo[support_service]" value="">
					<div id="userinfo-support_service">
					<label><input type="checkbox" name="UserInfo[support_service][]" value="分享坐谈会"> 分享坐谈会
						（如：大学生择业、大学生创业、职业生涯规划、关于实习、关于专业与岗位的对接、HR眼中的简历）</label>
					<label><input type="checkbox" name="UserInfo[support_service][]" value="生涯人物访谈"> 生涯人物访谈</label>
					<label><input type="checkbox" name="UserInfo[support_service][]" value="担任评委"> 担任评委
						（如：文艺类、语言表达类、评优、学科竞赛、政论、体育类等）</label>
					</div>
				</div>        
				<div class="form-group field-userinfo-photo required">
					<label class="control-label" for="userinfo-photo">生活照</label>
					<input type="hidden" name="UserInfo[photo]" value=""><input type="file" id="userinfo-photo" name="user-photo" accept="image/*">
				</div>    
				<img id = "photo"/>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">提交</button>        
				</div>
			</form>
			
		</div><!-- user-info -->
    </div>
</div>
<?php include('footer.html');?>
</body>
</html>