<?php 
	include('check.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>意见反馈</title>
		<link href="style/bootstrap.min.css" rel="stylesheet">
		<link href="style/site.css" rel="stylesheet">
		<link href="style/advice-make.css" rel="stylesheet">
		<script src="script/jquery-1.11.1.min.js"></script>
		<script src="script/bootstrap.min.js"></script>
		<script>
			$(function() {
				$("#w0").bind("submit", function() {
					
					var empty = /^\s+$/;
					
					if(empty.test($("#advice-advice_content").val()) || $("#advice-advice_content").val() == "") {
						$("#advice-advice_content").focus();
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
		<div class = "advice-head">
			<p>亲爱的校友，如果我们现在提供的所有功能不能满足您的需求，请在下面的输入框中向我们反馈，我们会尽力为您提供更好的服务！</p>
		</div>
		<div class="advice-make">
			<form id="w0" action="controllers/index.php?r=Advice/save" method="post">
				<div class="form-group field-advice-advice_mate required">
					<input type="hidden" id="advice-advice_mate" class="form-control" name="Advice[advice_mate]" value = "<?= $_GET['mate_openid'] ?>">
				</div>        
				<div class="form-group field-advice-advice_content required">
					<textarea id="advice-advice_content" class="form-control" name="Advice[advice_content]"></textarea>
				</div>    
				<div class="form-group">
						<button type="submit" class="btn btn-primary">提交</button>        
				</div>
			</form>
		</div><!-- advice-make -->
    </div>
</div>
<?php include('footer.html');?>

</body>
</html>