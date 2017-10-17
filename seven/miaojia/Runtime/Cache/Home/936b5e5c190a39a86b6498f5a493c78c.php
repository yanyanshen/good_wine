<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会员注册</title>
    <link rel="stylesheet" href="/Public/Home/style/reg.css">
    <script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
    <script src="/Public/Home/js/reg.js"></script>
    <script src="/Public/Home/js/dist/jquery.validator.min.js?local=zh_CN"></script>
    <script src="/Public/Home/js/geo.js"></script>
    <script src="/Public/Home/js/YMDClass.mini.js"></script>
    <script src="/Public/Home/js/jquery.form.js"></script>
    <script src="/Public/Home/js/layer.js"></script>
    <script type="text/javascript">
        function promptinfo(){
            var address = document.getElementById('address');
            var s1 = document.getElementById('s1');
            var s2 = document.getElementById('s2');
            var s3 = document.getElementById('s3');
            address.value = s1.value + s2.value + s3.value;
        }
        $(function(){
            new YMDselect('year','month','day');
            setup();preselect('北京市');promptinfo();
            $("#s3").change(promptinfo);
            $("form").validator({
                fields:{
                    username:"用户名:required;username;remote[chkUser]",
                    passwd:"密码:required;password",
                    repasswd:"确认密码:required;match(pwd)",
                    tel:"手机号码:required;mobile",
                    email:"邮箱:required;email",
                    yzm: "验证码:required;remote[chk_verify]",
                    check:"checked",
                    sex:"checked"
                },
                valid:function(form){
                    var me = this;
                    me.holdSubmit();
                    $(form).ajaxSubmit(function(res){
                        if(res=='注册成功'){
                            layer.msg(res+',即将跳转到首页',{
                                icon:1,
                                time:3000
                            },function(){
                                location.href="/";
                            })
                        }else{
                            layer.msg(res,{
                                icon:1,
                                time:3000
                            },function(){
                                me.holdSubmit(false);
                            })
                        }
                    })
                }
            })
        })
    </script>
</head>
<body>
<!-- 头部开始 -->
    <div class="header ">
        <div class="headerCont wid_1200 clearfix">
            <div class="logo clearfix"><a href="../Index/index.html"><img src="/Public/Home/images/logo.png" alt=""></a><h3>会员注册</h3></div>
            <span class="fr">已有账号，直接<a href="login.html">登录</a></span>
        </div>
    </div>
<!-- 注册模块开始 -->
    <div class="reg wid_1200">
        <div>
            <form action="<?php echo u('registered');?>" method="post">
                    <p>用户名：<input type="text" name="username"><span id="msgUser" class="tips"></span></p><br />
                    <p>密&nbsp;&nbsp;&nbsp;码：<input type="password" name="passwd"><span id="msgPass1" class="tips"></span></p><br />
                    <p>确认密码：<input type="password" class="password" name="repasswd"><span id="msgPass2" class="tips"></span></p><br />
                    <p>性&nbsp;&nbsp;&nbsp;别：<input class="sex" type="radio" name="sex" value="男" data-msg-checked="性别为必选,且无法更改,请慎重选择!">男<input class="sex" type="radio" name="sex" value="女">女</p><br />
                    <p>出生年月：<select name="year"></select>
                    <select name="month"></select>
                    <select name="day"></select><span class="red">*</span></p><br />
                    <p>所在地：<select class="select" id="s1">
                        <option></option>
                    </select>
                        <select class="select" id="s2">
                            <option></option>
                        </select>
                        <select class="select" id="s3">
                            <option></option>
                        </select>
                        <input id="address" name="address" type="hidden" value="" />
                        <span class="red">*</span></p><br />
                    <p>手机号：<input type="text" name="tel"><span id="msgTel" class="tips"></span></p><br />
                    <p>E-mail：<input type="text" name="email"><span id="msgMail" class="tips"></span></p><br />
                    <p>验证码：<input class="yzm" type="text" name="yzm"><img src="<?php echo u('User/verify_code');?>" onclick="this.src='<?php echo u('User/verify_code');?>'" alt="点击刷新验证码"><span class="msg-box" for="yzm"></span></p><br />
                    <p><input class="check" type="checkbox" class="inp" name="check" data-msg-checked="请同意注册协议方可注册">我已看过并接受<a href="#">《苗家频道网注册用户协议》</a></p><br />
                    <p><input class="btn" type="submit" name="btn" value="注&nbsp;&nbsp;&nbsp;&nbsp;册">
            </form>
        </div>
    </div>
</body>
</html>