<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title>爱家网搜索页！</title>
    <link rel="stylesheet" href="/Public/Home/style/reset.css"/>
    <link rel="stylesheet" href="/Public/Home/style/DetailPages.css"/>
    <link rel="stylesheet" href="/Public/Home/style/index.css"/>
    <style>
        .recommend p{
            font-size: 14px;
            color:#fff; background:rgba(0,0,0,0.5);
            position: absolute;
            bottom:0;width:390px;
            height:40px;
            line-height: 40px;
            text-align: center;opacity: 0;
            transition:all 0.8s;
        }
        .pagin{position:relative;margin-top:10px;padding:0 12px;}
        .pagin .paginList{position:absolute;right:350px;top:0px;}
        .pagin .message{position:absolute;left:350px;top:0px;font-size: 25px;}
        .page a{display: inline-block;width:25px;height:25px;padding:7px;margin:2px;
            border:1px solid #CC0001;text-align: center;line-height: 25px;font-size: 10px;font-weight: bolder;}
        .page span.current{display: inline-block;width:25px;height:25px;padding:6px;margin:2px;
            border:1px solid #CC0001;text-align: center;background:#CC0001;line-height: 25px;font-size: 10px;font-weight: bolder;}
        .page a:hover{background:#999999;color:#1a1a1a;}
        .pxtitle{overflow:hidden;_height:30px;background-color:#f2f2f2; padding:12px 30px;margin:20px 0;}
        .pxtitle a{padding:6px 15px; height:30px; line-height:30px; background-color:#c2a07a; color:#FFFFFF; text-align:center;border-radius:5px; }
        .pxtitle a.active{background-color: #C91623}
        .pxtitle span{ float:right; line-height:24px;}
        .myShopCar1{margin-left: 1px;background:#fff;border:1px solid #F1F1F1;borderBottom:0;}
        .carlist{position: absolute;width:450px;padding:10px;background: #fff;left:1302px;top:125px;border:1px solid #F1F1F1;display:none;z-index:999;  }
        #goodslist dd{position:relative;float:left;margin-left: 8px;}
        #myShopCar{margin-left: 1px;background:#fff;border:1px solid #F1F1F1;borderBottom:0;}
    </style>
</head>
<body>
<!-- 顶部开始 -->
<div>
    <div class="header">
        <div class="headerCont frm_sty clearfix">
            <p>欢迎光临爱家网！</p>
            <p class="tel">4008-8888-8888</p>
            <a href="<?php echo U('Home/Member/member');?>">用户中心</a>
            <a href="<?php echo U('Home/Login/register');?>">注册</a>
            <a href="<?php echo U('Home/Login/login');?>">登录</a>
        </div>
    </div>
    <!-- 导航搜索栏 -->
    <div class="search">
        <div class="searchCont frm_sty clearfix">
            <!-- 标志搜索栏开始 -->
            <h1 class="fl"><a href="<?php echo U('Home/Index/index');?>"><img src="/Public/Home/images/Ihomelogo.png" alt="" width=180px></a></h1>
            <div class="bd fl">
                <form action="" method="get" id="searchform">
                    <input name="searchwords" type="text" class="msg" id="msg" value="<?php echo ($_SESSION['searchwords']); ?>" placeholder="家具">
                    <a href="javascript:document.getElementById('searchform').submit();" class="btn fl" id="abtn">搜索</a>
                </form>
                <p class="msg1">
                    <a href="#">&nbsp;</a>
                </p>
            </div>
            <div class="buy clearfix">
                <span class="fl">1</span>
                <a class="fl"  id="mycart"  href="<?php echo U('Home/Cart/showcart');?>">购物车</a>
                <div class="carlist">
                    <dl id="goodslist" style="font-size:15px">
                        <dt>商品名称</dt>
                        <dd>商品图片</dd>
                        <dd>购买数量</dd>
                        <dd>价钱</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="navCont frm_sty">
                <div class="classify fl">
                    <div class="fenlei">
                        <h2>全部商品分类</h2>
                        <img class="xiala" src="/Public/Home/images/xiala.png" alt="">
                    </div>
                    <div class="menu">
                        <?php if(is_array($firstlist)): $i = 0; $__LIST__ = $firstlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><div class="menu1" id="list">
                                <h4><?php echo ($value["catename"]); ?></h4>
                                <?php if(is_array($value['second'])): $i = 0; $__LIST__ = array_slice($value['second'],0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($val["catename"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                <div class="submenu">
                                    <h4><?php echo ($value["catename"]); ?></h4>
                                    <?php if(is_array($value['second'])): $i = 0; $__LIST__ = $value['second'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><p><?php echo ($val["catename"]); ?></p>
                                        <?php if(is_array($val['third'])): $i = 0; $__LIST__ = $val['third'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($v["catename"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <ul class="topNav clearfix">
                    <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!--搜索列-->
    <div class="pxtitle" style="width: 1135px;text-align: center;margin:0 auto;">
        <div class="frm_sty now">
            <ul class="clearfix">
                <li>当前位置：</li>
                <li><a href="<?php echo U('Home/Index/index');?>">首页&nbsp;&nbsp;><?php echo ($position); ?>></a></li>
            </ul>
        </div>
        <div style="float:right;">
            <a href="<?php echo U(Home/Search/search);?>?act=1" onclick="sort(this)" class="rank">
                发布时间降序排列
            </a>
            <a href="<?php echo U(Home/Search/search);?>?act=2" onclick="sort(this)" class="rank" style=" margin-left:30px;">商品价格降序排序</a>
            <a href="<?php echo U(Home/Search/search);?>?act=3" onclick="sort(this)" class="rank" style=" margin-left:30px;">销售数量降序排序</a>
        </div>
    </div>
    <!--搜索列结束-->
    <!-- 商品列 -->
    <div>
        <div class="recommend frm_sty clearfix">
            <?php if(is_array($searchlist)): $i = 0; $__LIST__ = $searchlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="rec1">
                    <a href="<?php echo U('Home/Detail/detail');?>?gid=<?php echo ($val["gid"]); ?>">
                        <img src="/Public/Upload/Goodspic/thumb_390_<?php echo ($val["pic"]); ?>" alt="">
                    </a>
                    <p class="msg2">
                        <span><?php echo (iconv_substr($val["goodsname"],0,10,'utf-8')); ?></span>
                    </p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="pagin" style="height: 80px">
            <div class="message">共<i class="blue"><?php echo ($count); ?></i>条记录，当前显示第&nbsp;<i class="blue"><?php echo ($num); ?>&nbsp;</i>页</div>
            <div class="paginList">
                <div class="page">
                    <?php echo ($page); ?>
                </div>
            </div>
        </div>
    <!-- 商品列结束 -->
        <!-- 猜你喜欢 -->
        <div class="guess frm_sty clearfix">
            <ul class="ul11">
                <li class="l11"><a href="#">猜您喜欢</a></li>
                <li class="l12"><a href="#">更多></a></li>
            </ul>
            <ul class="Cont">
                <?php if(is_array($guesslist)): $i = 0; $__LIST__ = array_slice($guesslist,2,16,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li style="margin-left: 10px;margin-top: 10px">
                        <a href="<?php echo U('Home/Detail/detail');?>?gid=<?php echo ($val["gid"]); ?>">
                            <img src="/Public/Upload/Goodspic/thumb_150_<?php echo ($val["pic"]); ?>"/>
                            <span class="txt" style="width: 150px"><?php echo (iconv_substr($val["goodsname"],0,5,'utf-8')); ?></span>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>


    <!-- 底部开始 -->
    <div class="footer">
        <div class="footer_cont frm_sty">
            <div class="service">
                <ul>
                    <li class="ser1">
                        <span></span>
                        <h4><a href="#">正品保证</a></h4>
                        <p>正品保障，提供发票</p>
                    </li>
                    <li class="ser2">
                        <span></span>
                        <h4><a href="#">急速物流</a></h4>
                        <p>急速物流，急速送达</p>
                    </li>
                    <li class="ser3">
                        <span></span>
                        <h4><a href="#">无忧售后</a></h4>
                        <p>7天无理由退换货</p>
                    </li>
                    <li class="ser4">
                        <span></span>
                        <h4><a href="#">帮助中心</a></h4>
                        <p>您的购物指南</p>
                    </li>
                </ul>
            </div>
            <div class="guild clearfix">
                <ul class="guild01 clearfix">
                    <li class="strong"><a href="#">购物指南</a></li>
                    <li><a href="#">导购指标</a></li>
                    <li><a href="#">免费注册</a></li>
                    <li><a href="#">会员等级</a></li>
                    <li><a href="#">常见问题</a></li>
                    <li><a href="#">品牌大全</a></li>
                </ul>
                <ul>
                    <li class="strong"><a href="#">支付方式</a></li>
                    <li><a href="#">易付定支会付</a></li>
                    <li><a href="#">网银注册</a></li>
                    <li><a href="#">快捷支付</a></li>
                    <li><a href="#">分期付款</a></li>
                </ul>
                <ul>
                    <li class="strong"><a href="#">物流配送</a></li>
                    <li><a href="#">免运费政策</a></li>
                    <li><a href="#">配送服务承诺</a></li>
                    <li><a href="#">签收验货</a></li>
                    <li><a href="#">物流查询</a></li>
                </ul>
                <ul>
                    <li class="strong"><a href="#">售后服务</a></li>
                    <li><a href="#">退换货政策</a></li>
                    <li><a href="#">退换货流程</a></li>
                    <li><a href="#">退款说明</a></li>
                    <li><a href="#">退换货申请</a></li>
                </ul>
                <ul>
                    <li class="strong"><a href="#">商家服务</a></li>
                    <li><a href="#">商家入驻</a></li>
                    <li><a href="#">培训中心</a></li>
                    <li><a href="#">信息公告</a></li>
                    <li><a href="#">广告服务</a></li>
                    <li><a href="#">商家帮助</a></li>
                    <li><a href="#">服务市场</a></li>
                </ul>
                <div class="weixin fr">
                    <p>爱家网客户端</p>
                    <img src="/Public/Home/images/erweima.jpg">
                </div>

            </div>
        </div>
        <div class="footer_b">
            <p>Copyright @ 2016-2028 爱家有限公司版权所有 桂ICP备10101010号-201600001</p>
        </div>
    </div>
    <!-- 返回顶部 -->
    <!-- <div class="toTop">TOP</div> -->
    <!-- 右导航 -->
    <div class="rightNav">
        <div class="right">
            <ul class="rightCont">
                <li class="sc">
                    <a class="me" href="<?php echo U('Home/Member/member');?>"><p class="p1">1</p></a>
                    <p class="sc1">我的收藏</p>
                </li>
                <li class="time">
                    <a class="me" href="<?php echo U('Home/Member/member');?>"><p class="p1">1</p></a>
                    <p class="time1">浏览记录</p>
                </li>
                <li class="kf">
                    <a class="me" href="<?php echo U('Home/Member/member');?>"><p class="p1">1</p></a>
                    <p class="kf1">客服服务</p>
                </li>

                <li class="toTop" style="bottom: 0px;right: 0px"></li>
            </ul>
        </div>
    </div>
</div>
<!-- 置顶导航 -->
<div class="topFixed">
    <ul class="frm_sty">
        <li><a href="#">首页</a></li>
        <li><a href="#">卧室家具</a></li>
        <li><a href="#">儿童家具</a></li>
        <li><a href="#">书房家具</a></li>
        <li><a href="#">阳台户外</a></li>
        <li><a href="#">热销商品</a></li>
        <li><form action=""><input name="" type="text" class="msg" placeholder="家具"></form></li>
        <li class="sousuo"><a href="#">搜索</a></li>
    </ul>
</div>
    <script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
    <script src="/Public/layer/layer.js"></script>
    <script src="/Public/Home/js/imageflow.js"></script>
    <script src="/Public/Home/js/index.js"></script>
    <script src="/Public/Home/js/reset.js"></script>
<script>
    function sort(v) {
        $(v).addClass('active').siblings().removeClass('active');
    }
    $('#mycart').mouseenter(function(){
        $(this).addClass('myShopCar1');
        $('.carlist').show();
        $.post('/Home/Cart/mycart?act=getCartList',null,function(res){
            $("#goodslist").html(res);
        })
    });
    $("#mycart").mouseleave(function(){
        $(this).removeClass("myShopCar1");
        $('.carlist').hide();
    });
    $('#abtn').click(function(){
        if(!$('#msg').val()){
            layer.alert('请输入要搜索的商品名称');
            return false;
        }
    })
</script>
</body>
</html>