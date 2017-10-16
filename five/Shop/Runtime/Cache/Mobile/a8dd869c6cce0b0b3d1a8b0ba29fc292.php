<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>修改密码</title>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/style.css"/>
      <script src="/Public/Mobile/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Public/Mobile/js/layer_mobile/layer.js" type="text/javascript"></script>
    <script type="text/javascript">
    	$(window).load(function(){
    		$(".loading").addClass("loader-chanage");
    		$(".loading").fadeOut(300)
    	});
    	
    </script>
    
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
		<a class="text texta" href="javascript:history.go(-1)">返回</a>
		<h3>修改密码</h3>
	</header>
	
	<div class="login">
		<form action="<?php echo U('Personal/changePwd');?>" method="post" id="form1">
			
			<ul>
				<li>
					<img src="/Public/Mobile/images/login.png"/>
					<input name="password" type="password" placeholder="输入原密码"/>
				</li>
				<li>
					<img src="/Public/Mobile/images/password.png"/>
					<input name="newPwd" type="password" placeholder="输入新密码"/>
				</li>
				<li>
					<img src="/Public/Mobile/images/password.png"/>
					<input name="reNewPwd" type="password" placeholder="输入确认密码"/>
				</li>
			</ul>
			<input id="sub" type="button" value="立即修改"/>
		</form>
	</div>
</body>
<script>
    $("#sub").click(function(){
        $.post("<?php echo U('Personal/changePwd');?>",$("#form1").serialize(),function(res){
            if(res.status=="ok"){
                //信息框
                layer.open({
                    content:res.msg
                    ,btn: '我知道了'
                    ,yes:function(index){
                        location.href="<?php echo U('Personal/personalList');?>"
                        layer.close(index);
                    }
                });
            }else{
                //信息框
                layer.open({
                    content:res.msg
                    ,btn: '我知道了'
                });
            }
        })
    })
</script>
</html>