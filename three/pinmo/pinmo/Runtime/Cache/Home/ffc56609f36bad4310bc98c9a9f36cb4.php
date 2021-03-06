<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>用户登录</title>
	<link rel="stylesheet" href="/Public/Home/css/base.css" />
	<link rel="stylesheet" href="/Public/Home/css/global.css" />
	<link rel="stylesheet" href="/Public/Home/css/login-register.css" />
    <style>
        input.error { border: 1px solid #EA5200;background: #ffdbb3;}
        label.error{
            background:url("error.png") no-repeat 5px 2px;
            padding-left:18px;
            color:#ff0300;
            font-weight: bold;
            font-size: 13px;
        }
        label.ok {
            background:url("ok.png") no-repeat 5px 2px;
        }
    </style>
</head>
<body>
	<div class="header wrap1000">
		<a href=""><img src="/Public/Home/images/logo.png" alt="" /></a>
	</div>
	
	<div class="main">
		<div class="login-form fr">
			<div class="form-hd">
				<h3>用户注册</h3>
			</div>
			<div class="form-bd">
				<form id="form" action="<?php echo u('Home/Register/register');?>" method="POST">
					<dl>
						<dt>用户名</dt>
						<dd><input type="text" name="username" class="text" /></dd>
					</dl>
					<dl>
						<dt>密码</dt>
						<dd><input id="password" type="password" name="password" class="text"/></dd>
					</dl>
					<dl>
						<dt>确认密码</dt>
						<dd><input type="password" name="repwd" class="text"/></dd>
					</dl>
					<dl>
						<dt>邮箱</dt>
						<dd><input type="text" name="email" class="text"/></dd>
					</dl>
					<dl>
						<dt>验证码</dt>
						<dd><input type="text" name="code" class="text" size="10" style="width:58px;"> <img width="160px" height="30px" src="<?php echo U('Home/Register/verify');?>" alt="" align="absmiddle" style="position:relative;top:-2px;" onclick="this.src='<?php echo u('Home/Register/verify',array('id'=>mt_rand()));?>'"/> </dd>
					</dl>
					<dl>
						<dt>&nbsp;</dt>
						<dd><input type="button" value="立即注册" class="submit"/> <input type= "checkbox" checked="checked"/>阅读并同意<a href="" class="forget">服务协议</a></dd>
					</dl>
				</form>
				
			</div>
			<div class="form-ft">
			
			</div>		
		</div>
		
		<div class="login-form-left fl">
			<dl class="func clearfix">
				<dt>注册之后您可以</dt>
				<dd class="ico05"><i></i>购买商品支付订单</dd>
				<dd class="ico01"><i></i>申请开店销售商品</dd>
				<dd class="ico03"><i></i>空间好友推送分享</dd>
				<dd class="ico02"><i></i>收藏商品关注店铺</dd>
				<dd class="ico06"><i></i>商品资讯服务评价</dd>
				<dd class="ico04"><i></i>安全交易诚信无忧</dd>
			</dl>
			
			<div class="if">
				<h2>如果您是本站用户</h2>
				<p>我已经注册过账号，立即 <a href="<?php echo u('Home/Login/login');?>" class="register">登录</a> 或是 <a href="" class="findpwd">找回密码？</a></p>
			</div>
		</div>
	</div>
	
	<div class="footer clear wrap1000">
		<p> <a href="">首页</a> | <a href="">招聘英才</a> | <a href="">广告合作</a> | <a href="">关于品墨</a> | <a href="">联系我们</a></p>
		<p>Copyright 2004-2016 pmstore Inc.,All rights reserved.</p>
	</div>
	
	
</body>
<script src="/Public/Home/js/jquery-1.8.2.js"></script>
<script src="/Public/Home/js/jquery.validate.min.js"></script>
<script src="/Public/Home/layer/layer.js"></script>
<script type="text/javascript">
    $(function(){
        var validate=$('#form').validate({
            //设置验证规则
            rules:{
                username:{
                    required:true,
                    minlength:2,
                    maxlength:15,
                    remote:{
                        url:'<?php echo U("Home/Register/chkUsername");?>',
                        type:'post'
                    }
                },
                password:{
                    required:true,
                    minlength:5,
                    maxlength:20
                },

                repwd:{
                    required:true,
                    equalTo:"#password"

                },
                email:{
                    required:true,
                    email:true
                },
                code:{
                    required:true,
                    remote:{
                        url:'<?php echo U("Home/Register/chkVerify");?>',
                        type:'post'
                    }
                }

            },
            messages:{
                username:{
                    required:'用户名不能为空',
                    minlength:'用户名至少需要2个字符',
                    maxlength:'用户名最多15个字符',
                    remote:'用户名已被占用'
                },
                password:{
                    required:'密码不能为空',
                    minlength:'密码长度至少5个字符',
                    maxlength:'密码长度最多20个字符'
                },

                repwd:{
                    required:'重复密码不能为空',
                    equalTo:'两次密码输入不一致'
                },
                email:{
                    required:'邮箱不能为空',
                    email:'邮箱格式不正确'
                },
                code:{
                    required:'请输入验证码',
                    remote:'验证码不正确'
                }

            },
            /*            success: function(label) {
             label.addClass("ok");
             },
             validClass: "ok",*/
            errorElement:'div',
            errorPlacement: function(error, element) {
                error.appendTo( element.parent());
            }

        })
        jQuery.validator.onfocus=true;

        $('.submit').click(function(){
            if(validate.form()){
                $.post("<?php echo U('Home/Register/register');?>",$('#form').serialize(),function(res){
                    if(res.status=='ok'){
                        layer.alert(res.msg,{
                            yes:function(){

                               // alert("<?php echo ($_SERVER['HTTP_REFERER']); ?>");
                               var  $a="http://"+"<?php echo ($_SERVER['HTTP_HOST']); ?>"+"<?php echo U('Home/Login/login');?>";
                                //alert($a);
                                if("<?php echo ($_SERVER['HTTP_REFERER']); ?>"==$a){
                                    location.href=history.go(-2);
                                }else{
                                    location.href="<?php echo ($_SERVER['HTTP_REFERER']); ?>";
                                }

                            }
                        });

                    }else{
                        layer.alert(res.msg);
                    };
                })
            }

        })

    })
</script>

</html>