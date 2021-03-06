<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>欢迎登录后台管理系统</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/Public/Admin/js/jquery.js"></script>
    <script src="/Public/Admin/js/cloud.js" type="text/javascript"></script>
    <!--新增引入表单文件-->
    <script src="/Public/Admin/js/jQuery-1.8.2.min.js"></script>
    <script src="/Public/Admin/js/layer/layer.js"></script>
    <script src="/Public/Admin/js/jquery.validate.js"></script>

    <style>
        #adminname-error {
            position: absolute;
            top:48px;
            left:0px;
            padding-left: 22px;
            padding-bottom: 2px;
            color: #ea1b13;
            vertical-align: middle;
            font-size: 15px;
        }
        #password-error {
            position: absolute;
            top:50px;
            left:0px;
            padding-left: 22px;
            padding-bottom: 2px;
            color: #ea1b13;
            vertical-align: middle;
            font-size: 15px;
        }
        #verify-error {
            position: absolute;
            top:50px;
            left:0px;
            padding-left: 22px;
            padding-bottom: 2px;
            color: #ea1b13;
            vertical-align: middle;
            font-size: 15px;
        }
    </style>
    <script language="javascript">
        $(function(){
            $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
            $(window).resize(function(){
                $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
            })

            //新增表单验证
           var Obj= $('#form1').validate({
                //设置验证规则
                rules:{
                        adminname: {
                        required: true,
                        minlength: 2,
                        maxlength: 15,
                        remote:{
                            url:"<?php echo U('Admin/Login/checkName');?>",
                            type:"post"
                        }
                    },
                    password:{
                        required: true,
                        minlength: 2,
                        maxlength: 15
                    },
                    verify:{
                        required: true,
                        remote:{
                            url:"<?php echo U('Admin/Login/checkVerify');?>",
                            type:"post"
                        }
                    }

                },
                //设置提示信息
                messages: {
                    adminname: {
                        required: "用户名不能为空",
                        minlength: "用户名不能长度小于2位",
                        maxlength: "用户名不能长度大于15位",
                        remote:"用户不存在"
                    },
                    password: {
                        required: "密码不能为空",
                        minlength: "密码长度不能小于2位",
                        maxlength: "密码长度不能大于15位"
                    },
                    verify:{
                        required: '验证码不能为空',
                        remote:"验证码不正确"
                    }
                },
                success: function(label) {
                    label.addClass("ok");
                },
                validClass: "ok"
            });

            $("#adminBtn").click(function(){
                if(Obj.form()){
                    $.post("<?php echo U('Admin/Login/login');?>",$("#form1").serialize(),function(res){
                        if(res.status=='ok'){
                            layer.msg(res.msg,{icon:1,time:1000},function(){
                                window.location.href="<?php echo U('Admin/Index/index');?>";
                            });
                        }else{
                            layer.alert(res.msg,{icon:2});
                        }
                    });
                }
            })
        });
    </script>

</head>

<body style="background-color:#1c77ac; background-image:url(/Public/Admin/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
<div id="mainBody">
    <div id="cloud1" class="cloud"></div>
    <div id="cloud2" class="cloud"></div>
</div>
<div class="logintop">
    <span>欢迎登录后台管理界面平台</span>
    <ul>
        <li><a href="#">回首页</a></li>
        <li><a href="#">帮助</a></li>
        <li><a href="#">关于</a></li>
    </ul>
</div>

<div class="loginbody">

    <span class="systemlogo"></span>

    <form action="<?php echo U('Admin/Login/login');?>" method="post" id="form1">
        <div class="loginbox loginbox1">
            <ul>
                <li style="position: relative"><input name="adminname" type="text" class="loginuser"  /></li>
                <li style="position: relative"><input name="password" type="password" class="loginpwd"  /></li>
                <li class="yzm"  style="position: relative">
                    <span><input class="yzm" name="verify" type="text" placeholder="验证码" /></span>
                    <cite><img style="width: 120px; height:46px ;cursor: pointer" src="<?php echo U('Admin/Login/verify');?>" alt="验证码" onclick="this.src='<?php echo U('Admin/Login/verify');?>'"/></cite>
                </li>
                <li>
                    <input id="adminBtn" name="" type="button" class="loginbtn" value="登录" />
                    <label><input name="" type="checkbox" value="" />记住密码</label>
                    <label><a href="#">忘记密码？</a></label>
                </li>
            </ul>
        </div>
    </form>
</div>

</body>
</html>