<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title><?php echo ($tit); ?></title>

<link rel="stylesheet" href="/Public/Admin/css/normalize.css">


    <style type="text/css">
.btn {
    width: 70%;
    display: inline-block;
    *display: inline;
    *zoom: 1;
    padding: 4px 4px 4px;
    margin-bottom: 0;
    font-size: 20px;
    line-height: 25px;
    color: #333333;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle; background-color: #f5f5f5;
    background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
    background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
    background-image: linear-gradient(top, #ffffff, #e6e6e6);
    background-repeat: repeat-x;
    filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0);
    border-color: #e6e6e6 #e6e6e6 #e6e6e6;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    border: 1px solid #e6e6e6;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large {
    padding: 9px 14px; font-size: 15px;
    line-height: normal; -webkit-border-radius: 5px;
    -moz-border-radius: 5px; border-radius: 5px;
}
.btn:hover {
    color: #333333;
    text-decoration: none;
    background-color: #e6e6e6;
    background-position: 0 -15px;
    -webkit-transition: background-position 0.1s linear;
    -moz-transition: background-position 0.1s linear;
    -ms-transition: background-position 0.1s linear;
    -o-transition: background-position 0.1s linear;
    transition: background-position 0.1s linear;
}
.btn-primary, .btn-primary:hover {
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    color: #ffffff;
}
.btn-primary.active {
    color: rgba(255, 255, 255, 0.75);
}
.btn-primary { background-color: #4a77d4;
    background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4);
    background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4));
    background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4);
    background-image: -o-linear-gradient(top, #6eb6de, #4a77d4);
    background-image: linear-gradient(top, #6eb6de, #4a77d4);
    background-repeat: repeat-x;
    filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);
    border: 1px solid #3762bc;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.4);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5);
}
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
    filter: none;
    background-color: #4a77d4;
}
.btn-block { width: 60%; display:block;
}

* {
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    -ms-box-sizing:border-box;
    -o-box-sizing:border-box;
    box-sizing:border-box;
}

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.login { 
	position: absolute;
	top: 40%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:600px;
	height:450px;
}
.login h1 { width: 70%;color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 60%;
	margin-bottom: 10px;
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 15px;
	font-size: 18px;
    color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
.yzm {
	width: 35%;
    position: relative;
    top:-15px;
	margin-bottom: 10px;
	margin-top: 0px;
    background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 15px;
	font-size: 18px;
    color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
.yz {
    position: relative;
    top:15px;
    width: 23%;
    height: 52px;
    margin-top:0px ;
    margin-bottom: 10px;
    background: rgba(0,0,0,0.3);
    border: none;
    outline: none;
    padding: 1px;
    font-size: 13px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 4px;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;
    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;
    transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

input.error {  box-shadow: inset 0 -5px 45px rgba(221, 21, 65, 0.40), 0 1px 1px rgba(138, 60, 255, 0.45); }
span.error{
    /*background:url("error.png") no-repeat 5px 2px;*/
    padding-left:18px;
    color: #d5e6ff;
    font-weight: bold;
    font-size: 13px;
}
        li{
        text-decoration: none;
        }
</style>
</head>

<body>

<div class="login">
	<h1>Mr.Big</h1>
	<form action="<?php echo u('Admin/Login/login');?>" method="post" id="loginForm" >
        <li style="list-style: none"><input type="text" name="name" placeholder="用户名" required="required" /></li>
        <li style="list-style: none"><input type="password" name="password" placeholder="密码" required="required" /></li>
        <li style="list-style: none">
            <input type="text" name="verify" class="yzm" placeholder="验证码" required="required" />
            <img class="yz" src="<?php echo u('Login/verify');?>"   alt="" onclick="this.src='<?php echo u('Login/verify',array('id'=>mt_rand()));?>'"/>
        </li>

        <button type="button" class="btn btn-primary btn-block btn-large" id="be">登录</button>
	</form>
</div>
<div style="text-align:center;">
</div>
</body>
<script type="text/javascript" src="/Public/Admin/cjyy/jQuery-1.8.2.js"></script>
<script type="text/javascript" src="/Public/Admin/cjyy/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Admin/cjyy/layer/layer.js"></script>
<script type="text/javascript">
        var validate = $('#loginForm').validate({
            //设置验证规则
            rules: {
                name:{
                    required:true
                },
                password:{
                    required:true
                },
                verify: {
                    required: true,
                    remote: {
                        url: '<?php echo U("Admin/Login/checkVerify");?>',
                        type: 'post'
                    }
                }
            },
            messages: {
                name:{
                    required:'用户名不能为空'
                },
                password:{
                    required:'请输入密码'
                },
                verify: {
                    required: '请输入验证码',
                    remote: '验证码不正确'
                }

            },
            success: function (label) {
                label.addClass("ok");
            },
            validClass: "ok",
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.appendTo(element.parent());

            }
        })
        jQuery.validator.onfocus = true;

        $('.btn').click(function(){
            if(validate.form()){
                $.post("<?php echo U('/Admin/Login/login');?>",$('#loginForm').serialize(),function(res){
                    if(res.status=='ok'){
                        layer.msg(res.msg,{icon:6,time:1000},function(){
                                location.href="<?php echo U('/Admin');?>";
                            }
                        );
                    }else{
                        layer.tips(res.msg,'#be', {tips: [1, '#3f3149']},function () {
                                location.href = "<?php echo U('/Admin/Login');?>";
                                }
                         )
                    }
                })
            }
        })
        $(window).keydown(function(e){
            if(e.keyCode==13){
                $("form").button();
            }
        })

        </script>
</html>