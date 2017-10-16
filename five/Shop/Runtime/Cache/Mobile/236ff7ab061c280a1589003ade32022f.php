<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/style.css"/>
	<script src="/Public/Mobile/js/jquery-1.8.3.min.js"></script>
      <script src="/Public/Mobile/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    	$(window).load(function(){
    		$(".loading").addClass("loader-chanage")
    		$(".loading").fadeOut(300)
    	})
    </script>
	<script src="/Public/Mobile/js/jquery.validate.js"></script>
	<script src="/Public/Mobile/js/jquery.form.js"></script>
	<script src="/Public/Mobile/js/layer_mobile/layer.js"></script>
	<script>
		$(function () {
			var obj=$('#form1').validate({
				rules:{
					username:{
						required:true,
						minlength:2,
						maxlength:15
					},
					password:{
						required:true,
						minlength:6,
						maxlength:18
					}
				},
				messages:{
					username:{
						required:'请填写此字段',
						minlength:'用户名至少2个字符',
						maxlength:'用户名最多15个字符'
					},
					password:{
						required:'请填写此字段',
						minlength:'密码名至少6个字符',
						maxlength:'密码最多18个字符'
					}
				},
				success: function(div) {
					div.addClass("ok").text('通过验证');
				},
				validClass:'ok',
				errorElement:'div'
			})
			$('.floating-btn').click(function(){
				//表单提交之前判断前端验证是否通过，只有通过时才提交表单
				if (obj.form()) {
					$.post("<?php echo U('Login/login');?>", $('#form1').serialize(), function (res) {
						if (res.status == 1) {
							layer.open({
								content: res.info
								,skin: 'msg'
								,time: 1 //2秒后自动关闭
								,end: function () {
									location.href = "<?php echo U('Index/index');?>";
								}});
						} else {
							layer.open({
								content: '登陆失败',
								skin: 'msg',
								time: 2 //2秒后自动关闭
							});
						}
						return false;
					}, 'json')
				}

			})
		})


	</script>
	<style>
		.error{
			color: red;
			font-size: 12px;
			background: #ffdbb3;
			background: url("/Public/Mobile/images/cuo.jpg") no-repeat ;
			padding-left: 20px;

		}
		.ok {
			color: green;
			font-size: 12px;
			background: #ffdbb3;
			background: url("/Public/Mobile//images/dui.jpg") no-repeat ;
			padding-left: 20px;

		}
	</style>
</head>
<!--loading页开始-->
<div class="loading">
	<div class="loader">
        <div class="loader-inner pacman">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
	</div>
</div>
<!--loading页结束-->
<body>
	<header class="top-header">
		<a class="text texta" href="index.html">取消</a>
		<h3>登录</h3>
		<a class="text" href="<?php echo U('Login/register');?>">注册</a>
	</header>
	
	<div class="login">
		<form action="<?php echo U('Login/login');?>" method="post" id="form1">
			<ul>
				<li>
					<img src="/Public/Mobile/images/login.png"/>
					<label>账号</label>
					<input type="text" name="username" placeholder="请输入账号"/>
				</li>
				<li>
					<img src="/Public/Mobile/images/password.png"/>
					<label>密码</label>
					<input type="password" name="password" placeholder="请输入密码"/>
				</li>
			</ul>
			<input class="floating-btn" type="button" value="登录"/>
		</form>
	</div>

</body>
</html>