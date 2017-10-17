<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">

<title>个人中心-<?php echo C('WEB_NAME');?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="/Public/Mobile/css/personal.css" rel="stylesheet">
<script src="/Public/Mobile/js/jquery-1.9.1.min.js"></script>
<script src="/Public/Mobile/js/layer.js"></script>
<script>
  
$(function(){
    function w() {
    var r = document.documentElement;
    var a = r.getBoundingClientRect().width;
    // console.log(a);
        if (a > 750 ){
            a = 750;
        } 
        rem = a / 7.5;
        r.style.fontSize = rem + "px"
    }
    var t;
    w();
    window.addEventListener("resize", function() {
        clearTimeout(t);
        t = setTimeout(w, 300)
    }, false);
});
$(function(){
    $("#goBack").click(function(){
        history.back();
    })
        $("#returnGoods").click(function(){
            layer.open({
                content:"暂不支持退货操作!"
            })
        })
    $(".li01").click(function(){
        location.href="<?php echo U('User/goodsScList');?>";
    });
    $(".li03").click(function(){
        location.href="<?php echo U('addressList');?>";
    });
    $("#popMenu").click(function(){
        var popContent='<div class="popMenu"><ul><li><a href="<?php echo u('Mobile/Index/index');?>">首页</a></li><?php if(empty($_SESSION['uid'])): else: ?><li><a href="<?php echo u('User/logout');?>">退出登录</a></li><?php endif; ?></ul></div>';
        layer.open({
            type:1,
            style:"width:100%;height:auto;text-align:center;position:fixed;bottom:0;left:0;opacity:1;filter:alpha(opacity=100);",
            content:popContent,
            anim:1
        })
    });
})
</script>
</head>
<body>
<!--头部 开始-->
<div class="header">
    <div class="wrapper">
        <p><a href="javascript:void (0)" id="goBack"><返回</a></p>
        <h2><a href="#">个人中心</a></h2>
        <ul>
            <a href="javascript:void(0)" id="popMenu">
                <li></li>
                <li></li>
                <li></li>
            </a>
        </ul>
    </div>
</div>
<!--头部 结束-->

<!--个人中心 开始-->
 <div class="person clearfix">
    <div class="wrapper">
        <div class="img fl"><img src="/upload/UserPic/small/<?php echo ($meminfo["pic"]); ?>" style="width: 0.98rem;height:0.98rem"/> </div>
        <div class="fl">
            <h3><?php if(($meminfo["nickname"]) == ""): echo ($meminfo["username"]); else: echo ($meminfo["nickname"]); endif; ?></h3>
            <p><h3>可用余额:<?php echo ($meminfo["money"]); ?>元</h3></p>
        </div></div>
</div>
<!--个人中心 结束-->

<!--订单 开始-->
<div class="order">
    <div class="wrapper">
    <p class="p"><a href="<?php echo u('order');?>">全部订单<i>></i></a></p>
    <ul>
          <li class="first"><a href="<?php echo u('order',array('s'=>1));?>" style="color: #333;"><p><img src="/Public/Mobile/images/icon_09.png" alt=""></p><p>待付款</p></a></li>
          <li class="second"><a href="<?php echo u('order',array('s'=>2));?>" style="color: #333333;"><p><img src="/Public/Mobile/images/icon_11.png" alt=""></p><p>待发货</p></a></li>
          <li class="three"><a href="<?php echo u('order',array('s'=>3));?>" style="color: #333333;"><p><img src="/Public/Mobile/images/icon_13.png" alt=""></p><p>待收货</p></a></li>
          <li class="four"><a href="<?php echo u('order',array('s'=>4));?>" style="color: #333333;"><p><img src="/Public/Mobile/images/icon_03.png" alt=""></p><p>待评价</p></a></li>
          <li class="last"><a href="javascript:void(0)" id="returnGoods" style="color: #333;"><p><img src="/Public/Mobile/images/icon_06.png" alt=""></p><p>退款</p></a></li>
    </ul>  
    </div>
</div>
<!--订单 结束-->

<!--收藏 开始-->
<div class="collect">
    
    <ul>
        <li class="li01"><a href="javascript:void (0)"><img src="/Public/Mobile/images/collect_21.png" alt="">我的收藏夹</a><i>></i></li>
        <li class="li02"><a href="javascript:void (0)"><img src="/Public/Mobile/images/collect_24.png" alt="">我的留言</a><i>></i></li>
        <li class="li03"><a href="javascript:void (0)"><img src="/Public/Mobile/images/collect_28.png" alt="">我的收货地址管理</a><i>></i></li>
    </ul>
</div>
<!--收藏 结束-->

<!--底部导航  开始-->
<div class="outside">
    <div class="footer">
        <ul>
            <li><a href="<?php echo u('Index/index');?>">
                <i><span class="i1"></span></i>
                <h5>首页</h5>
            </a></li>
            <li><a href="<?php echo u('Category/categoryList');?>">
                <i><span class="i2"></span></i>
                <h5>分类</h5>
            </a></li>
            <li><a href="<?php echo u('Cart/cart');?>">
                <i><span class="i3"></span></i>
                <h5>购物车</h5>
            </a></li>
            <li class="end"><a href="<?php echo u('User/member');?>">
                <i class="on"><span class="i4"></span></i>
                <h5>我的</h5>
            </a></li>
        </ul>
    </div>
</div>
<!--底部导航  结束-->
</body>
</html>