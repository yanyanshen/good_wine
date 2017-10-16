<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>欢迎您的到来</title>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/styles.css">
    <script src="/Public/Home/js/login/jQuery-1.8.2.min.js"></script>
    <script src="/Public/Home/js/login/jquery.validate.js"></script>
    <link href="/Public/Home/css/drag.css" rel="stylesheet" type="text/css"/>
    <script src="/Public/Home/js/login//drag.js" type="text/javascript"></script>
    <script src="/Public/Home/js/layer/layer.js"></script>

</head>
<body>
<div class="login-top">
    <div class="wrapper">
        <span class="logo"><img src="/Public/Home/images/logo2.png" alt=""></span>
    </div>
</div>
<div class="zhu">
    <img src="/Public/Home/images/zs.png" alt="左上" class="zs">
    <img src="/Public/Home/images/ys.png" alt="右上" class="ys">

    <!--<div class="ad"><img src="/Public/Home/images/1.png" alt="" class="yuan"></div>-->

    <div class="panel-lite">
        <div class="img"><img src="/Public/Home/images/h1.png" alt=""/></div>
        <h4>用户登录</h4>
        <form action="<?php echo U('Member/login');?>" method="post" class="form1" autocomplete="off" >
            <div class="form-group">
                <input name="username" required="required" class="form-control" autocomplete="off" />
                <label class="form-label" >用户名   </label>
            </div>
            <div class="form-group">
                <input name="password" id="pwd" type="password" required="required" class="form-control"/>
                <label class="form-label">密　码</label>
            </div>

            <div id="drag"></div>
            <script type="text/javascript">
                $('#drag').drag();
            </script>

            <div class="denglu">
                <!--<div class="qq"><img src="/Public/Home/images/qq.png"></div>
                <div class="wb"><img src="/Public/Home/images/wb.png"></div>
                <div class="zfb"><img src="/Public/Home/images/zfb.png"></div>-->
                <span id="hzy_fast_login"></span>
            </div>
            <span style="margin-left:200px;color: red"><a href="<?php echo U('Member/register');?>">没有账号,去注册</a></span>
            <div>
                <button class="floating-btn" type="button" ><i class="icon-arrow"></i></button>
            </div>
        </form>
    </div>
    <img src="/Public/Home/images/zx.png" alt="左下" class="zx">
    <img src="/Public/Home/images/yx.png" alt="右下" class="yx">
</div>


<div class="footer">
    关于我们 | 联系我们 | 人才招聘 | 商家入驻 | 广告服务 | 手机电商 | 友情链接 | 销售联盟 | 美食社区 | 热爱公益 | English Site<br>
    <span>Copyright © 2004-2016  我爱我家wawj.com 版权所有</span>
</div>
<script>
    $(function () {
        var Obj=$('.form1').validate({
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
            }
        })
        $('.floating-btn').click(function() {
               if($('.drag_text').text()=='验证通过'){
                if (Obj.form()) {
                    $.post("<?php echo U('Member/login');?>", $(".form1").serialize(), function (res) {
                        if (res.status == 1) {
                            layer.msg(res.info, {icon: 1, time: 1000}, function () {
                                window.location.href = "<?php echo U('Home/Index/index');?>";
                            });
                        } else {
                            layer.msg(res.info, {icon: 2, time: 1000});
                        }
                    });
                }
               }else{
                   return false;
               }
        })
    })


</script>
<script type="text/javascript" src="/Public/Home/js/abc.js"></script>
</body>
</html>