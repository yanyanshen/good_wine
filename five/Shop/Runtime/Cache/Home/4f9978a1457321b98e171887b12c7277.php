<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/Public/Admin/Uploads/minilogo.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/Public/Admin/Uploads/minilogo.ico" type="image/x-icon"/>
    <link href="/Public/Home/css/common.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/fonts/iconfont.css"  rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Home/js/abc.js"></script>
    <script src="/Public/Home/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="/Public/Home/js/jquery.min.1.8.2.js" type="text/javascript"></script>

    <script src="/Public/Home/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <script src="/Public/Home/js/common_js.js" type="text/javascript"></script>
    <script src="/Public/Home/js/footer.js" type="text/javascript"></script>
    <script src="/Public/Home/js/ZoomPic.js" type="text/javascript"></script>
    <script src="/Public/Home/js/layer/layer.js" type="text/javascript"></script>
    <script src="/Public/Home/js/jquery.lazyload.js" type="text/javascript"></script>

    <style type="text/css">
        .nav_on{ background:#FF7200;color:white;}
    </style>
    <script type="text/javascript">
        $(function(){
            $(".Navigation_name li").removeClass();
            var reg1=/\/Home\/Index\//;
            var reg2=/\/Home\/ProductList\//;
            var reg3=/\/Home\/Sale\//;
            var reg4=/\/Home\/Vote\//;
            var reg5=/\/Home\/Auction\//;
            var reg6=/\/Home\/Integral\//;
            var reg7=/\/Home\/Connect\//;
            var nowurl=document.URL;
            if(reg1.test(nowurl)){
                $('#sy').addClass("nav_on");
            }else if(reg2.test(nowurl)){
                $('#cplb').addClass("nav_on");
                $(".Navigation_name li").mouseleave(function(){
                    $(this).removeClass("on");
                })
            }else if(reg3.test(nowurl)){
                $('#xsqg').addClass("nav_on");
                $(".Navigation_name li").mouseleave(function(){
                    $(this).removeClass("on");
                })
            }else if(reg4.test(nowurl)){
                $('#tptj').addClass("nav_on");
                $(".Navigation_name li").mouseleave(function(){
                    $(this).removeClass("on");
                })
            }else if(reg5.test(nowurl)){
                $('#pmsc').addClass("nav_on");
                $(".Navigation_name li").mouseleave(function(){
                    $(this).removeClass("on");
                })
            }else if(reg6.test(nowurl)){
                $('#jfdh').addClass("nav_on");
                $(".Navigation_name li").mouseleave(function(){
                    $(this).removeClass("on");
                })
            }else if(reg7.test(nowurl)){
                $('#lxwm').addClass("nav_on");
                $(".Navigation_name li").mouseleave(function(){
                    $(this).removeClass("on");
                })
            }
        })

    </script>
    <script>
        function addFavorite2() {
            var url = window.location;
            var title = document.title;
            var ua = navigator.userAgent.toLowerCase();
            if (ua.indexOf("360se") > -1) {
                alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
            }
            else if (ua.indexOf("msie 8") > -1) {
                window.external.AddToFavoritesBar(url, title); //IE8
            }
            else if (document.all) {
                try{
                    window.external.addFavorite(url, title);
                }catch(e){
                    alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
                }
            }
            else if (window.sidebar) {
                window.sidebar.addPanel(title, url, "");
            }
            else {
                alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
            }
        }

        //窗口冻结开始
        $(function(){
            headerHeight=$('.div').height();

            $(window).on('scroll',function(){
                var scrHeight=$(window).scrollTop();
                if(scrHeight){

                }
            })
        })
        //窗口冻结结束
    </script>


    <script language='javascript'>
        function getDiv(){
            var _div = document.getElementsByTagName('div');
            for(var i in _div){
                if(_div[i].className=='time'){
                    return _div[i];
                }
            }
        }
        function getText(){
            var _date = new Date();
            var _time = _date.getHours();
            var _text = '';
            if(_time>=6&&_time<9)
                _text = '早上好';
            else if(_time>=9&&_time<11)
                _text = '上午好';
            else if(_time>=11&&_time<13)
                _text = '中午好'
            else if(_time>=13&&_time<17)
                _text = '下午好';
            else
                _text = '晚上好';
            return _text;
        }
        $(function(){
            var winHeight = $(window).height();
            $(window).on('scroll',function(){
                var scTop = $(window).scrollTop();
//        alert(scTop);
                if(scTop>800) {
//            $("#header2").css({display:"block",border:'1px solid red',width: '1689px',padding: '0',marginLeft:'20px',position: 'fixed',top:'0',zIndex: '9999'});
//        }
                    $(".div").show(400);
                }
                else{
                    $(".div").hide(400);
                }
            })


        })

    </script>

    <!--新加样式-->
    <style type="text/css">
        *{margin:0;padding:0;list-style-type:none;}
        a,img{border:0;}
        body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}

        /* jswbox */
        #jswbox{width:1125px;height:550px;margin:0 auto;position:relative;}
        #jswbox ul{position:relative;height:500px;width:1200px; margin: 0 auto;}
        #jswbox li{position:absolute;width:0;height:0;z-index:0;cursor:pointer;overflow:hidden;top:152px;left:10px;background: #fff1e6;border: 1px solid #f4e1d2}
        #jswbox li img{width:100%;height:100%;vertical-align:top;float:left;}
        #jswbox .prev, #jswbox .next{display:none;}
        .floor_nav {  font-weight:bold;  cursor:pointer;  display:none; width:40px;  font-size:16px;position:fixed; left:10px; top:300px; text-align: center;  line-height: 40px;  }
        .floor_nav li{position:relative;  margin-bottom: 5px;  border:1px solid #EE661A;  border-radius: 20px;}
        .floor_nav li span{  font-size:14px;  height:40px;width: 40px;color:#fff; position: absolute;left:0;top:0;border-radius: 25px;background: #9453C8;opacity: 0;}
        .floor_nav li:hover span{ display:block;opacity: 1;}
        .focus{background:rgb(224,99,39);color: #fff;}
        #hzy_fast_login img{
            margin-top: 3px;
        }
    </style>

    <script type="text/javascript">
        var url="<?php echo U('Index/buyCart');?>";
        var  delurl="<?php echo U('Cart/del');?>";
        var pub="/Public";
        $(function(){
            new ZoomPic("jswbox");
            $('img.lazy').lazyload(function(){effect:"fadein";});
            $(document).scroll(function(){
                var T=$("body").scrollTop();
                if(T>1600 && T<4000){$(".floor_nav").slideDown();}
                else{$(".floor_nav").slideUp();}
                if(T>=3500){$(".floor_nav li").eq(4).addClass("focus").siblings().removeClass("focus");}
                else if(T>=3100){$(".floor_nav li").eq(3).addClass("focus").siblings().removeClass("focus");}
                else if(T>=2600){$(".floor_nav li").eq(2).addClass("focus").siblings().removeClass("focus");}
                else if(T>=2100){$(".floor_nav li").eq(1).addClass("focus").siblings().removeClass("focus");}
                else if(T>=1500){$(".floor_nav li").eq(0).addClass("focus").siblings().removeClass("focus");}
                else{$(".floor_nav li").eq(0).addClass("focus").siblings().removeClass("focus");};
            });
            $('#navList li').click(function(){
                var i=$(this).index();
                if(i==4){$("body").scrollTop('3800')}
                else if(i==3){$("body").scrollTop('3400')}
                else if(i==2){$("body").scrollTop('2900')}
                else if(i==1){$("body").scrollTop('2400')}
                else if(i==0){$("body").scrollTop('1800')}
            })
        })
        function change(id){
            layer.msg('此商品以抢购完',{icon:1,time:1500});
            $("#ch"+id).attr({src:'/Public/Home/images/mangguo.gif'});
        }
        function logout(){
            layer.confirm("你确定要退出吗？",{icon:3,btn:['确定','取消']},function(){
                $.get("<?php echo U('Home/Member/logout');?>",function(res){
                    if(res.status=="ok"){
                        layer.msg(res.msg,{icon:1,time:1000},function(){
                            window.location.href="<?php echo U('Home/Index/index');?>"
                        })
                    }
                })
            })
        }
        function del(gid){
            $.get(delurl,{gid:gid},function(res){
                if(res.status=="ok"){
                    $("div.hd_Shopping_list").click();
                }else{
                    layer.msg(res.msg,{icon:2});
                }
            });
        }
        //会员中心判断是否登陆过
        function islogin(){
            var mid=$("#islogin").val();
            if(mid){
                window.location.href="<?php echo U('Home/Personal/showlist');?>";
            }else{
                layer.confirm("登陆后才能查看",{icon:4,btn:['去登陆','算了吧']},function(){
                    window.location.href="<?php echo U('Home/Member/login');?>";
                })
            }
        }
        //我的订单判断是否登陆
        function isorder(){
            var mid=$("#islogin").val();
            if(mid){
                window.location.href="<?php echo U('Home/Personal/order');?>";
            }else{
                layer.confirm("登陆后才能查看",{icon:4,btn:['去登陆','算了吧']},function(){
                    window.location.href="<?php echo U('Home/Member/login');?>";
                })
            }
        }
    </script>


    <title>网站首页</title>
</head>

<body>
<!--顶部样式-->
<div id="header_top">
    <input type="hidden" value="<?php echo (session('mid')); ?>" id="islogin"/>
    <div id="top">
        <div class="Inside_pages">
            <?php if($_SESSION['shop_']['mid']>= 1): ?><div class="Collection"><div class="time"><script>jQuery('.time').html(getText());</script>,<?php echo (session('username')); ?> 欢迎光临！<em></em><a href="#" onclick="javascript:addFavorite2()"></span>收藏我们</a></div></div>

                <?php else: ?>
                <div class="Collection"><div class="time"><script>jQuery('.time').html(getText());</script>,欢迎光临！<em></em><a href="#" onclick="javascript:addFavorite2()">收藏我们</a></div></div><?php endif; ?>
            <span id="hzy_fast_login"></span>
            <script>
                $(function () {
                    if("<?php echo (session('username')); ?>"==0){
                        $('#hzy_fast_login').click(function () {
                            alert('您未登录,可以通过快捷登录');
                        })
                    }else {
                        $('#hzy_fast_login').click(function () {
                            alert('您以登录,可以更改快捷登录qq');
                        })
                    }
                })
            </script>
            <!--<div class="Collection">下午好，欢迎<?php echo (session('username')); ?>光临锦宏颜！<em></em><a href="#">收藏我们</a></div>-->
            <div class="hd_top_manu clearfix">
                <ul class="clearfix">
                    <?php if($_SESSION['shop_']['mid']>= 1): ?><li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">
                            欢迎光临本店！<a id="logout" href="javascript:logout()" class="red">[退出]</a>
                        </li>
                        <?php else: ?>
                        <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">
                            欢迎光临本店！<a href="<?php echo U('Home/Member/login');?>" class="red">[登录]</a>
                            新用户<a href="<?php echo U('Home/Member/register');?>" class="red">[免费注册]</a>
                        </li><?php endif; ?>
                    <!--<li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！<a href="#" class="red">[请登录]</a> 新用户<a href="#" class="red">[免费注册]</a></li>-->
                    <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="javascript:isorder()">我的订单</a></li>
                    <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="<?php echo U('Home/Cart/mycart');?>">购物车</a> </li>
                    <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="<?php echo U('Home/Connect/showlist');?>">联系我们</a></li>
                    <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">
                        <a href="javascript:islogin()" class="red">[会员中心]</a>
                    </li>
                    <li class="hd_menu_tit phone_c" data-addclass="hd_menu_hover"><a href="#" class="hd_menu "><em class="iconfont icon-shouji"></em>手机版</a>

                        <div class="hd_menu_list erweima">
                            <ul>
                                <img src="/Public/Home/images/erweima.png"  width="100px" height="100"/>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--顶部样式1-->
    <div id="header"  class="header page_style">
        <div class="logo"><a href="<?php echo U('Home/Index/index');?>"><img src="/Public/Home/images/logo.png" /></a></div>
        <!--结束图层-->
        <div class="Search">
            <form action="<?php echo U('Home/ProductList/searchlist',array('maxprice'=>0,'minprice'=>0));?>" method="get">
                <p>
                    <input name="words" type="text"  class="text" />
                    <input name="" type="submit" value="搜 索"  class="Search_btn"/>
                </p>
            </form>
            <p class="Words"><a href="<?php echo U('Home/ProductList/catelist',array('path'=>1,'minprice'=>0,'maxprice'=>0));?>">甜品</a><a href="<?php echo U('Home/ProductList/catelist',array('path'=>3,'minprice'=>0,'maxprice'=>0));?>">零食</a><a href="<?php echo U('Home/ProductList/catelist',array('path'=>5,'minprice'=>0,'maxprice'=>0));?>">水果</a><a href="<?php echo U('Home/ProductList/catelist',array('path'=>7,'minprice'=>0,'maxprice'=>0));?>">生鲜蔬菜</a><a href="<?php echo U('Home/ProductList/catelist',array('path'=>8,'minprice'=>0,'maxprice'=>0));?>">肉类</a><a href="<?php echo U('Home/ProductList/catelist',array('path'=>2,'minprice'=>0,'maxprice'=>0));?>">饮品</a></p>
        </div>
        <!--购物车样式-->
        <div class="hd_Shopping_list" id="Shopping_list">
            <div class="s_cart" style="cursor: pointer"><em class="iconfont icon-cart2"></em><a >我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount"><?php echo ($sum); ?></i></div>
            <div class="dorpdown-layer">
                <div class="spacer"></div>
                <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
                <ul class="p_s_list">
                </ul>
                <div class="Shopping_style">
                    <div class="p-total">共<b class="totalnum"></b>件商品　共计<strong id="totalprice"></strong></div>
                    <a href="<?php echo U('Home/Cart/mycart');?>" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
                </div>
            </div>
        </div>
    </div>

    <!--菜单导航样式-->
    <div id="Menu" class="clearfix">
        <div class="index_style clearfix">
            <div id="allSortOuterbox" class="display">
                <div class="t_menu_img"></div>
                <div class="Category"><a href="#"><em></em>所有产品分类</a></div>
                <div class="hd_allsort_out_box_new">
                    <!--左侧栏目开始-->
                    <ul class="Menu_list">
                        <?php if(is_array($firstcate)): $i = 0; $__LIST__ = $firstcate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="name">
                                <div class="Menu_name"><a href="<?php echo U('Home/ProductList/catelist',array('path'=>$val['path'],'minprice'=>0,'maxprice'=>0));?>" ><?php echo ($val['catename']); ?></a> <span>&lt;</span></div>
                                <div class="link_name">
                                    <p>
                                        <?php if(is_array($val['second'])): $i = 0; $__LIST__ = $val['second'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/ProductList/catelist',array('path'=>$val2['path'],'minprice'=>0,'maxprice'=>0));?>"><?php echo ($val2['catename']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </p>
                                </div>
                                <div class="menv_Detail">
                                    <div class="cat_pannel clearfix">
                                        <div class="hd_sort_list">
                                            <dl class="clearfix" data-tpc="1">
                                                <?php if(is_array($val['second'])): $i = 0; $__LIST__ = $val['second'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($i % 2 );++$i;?><dt><a href="<?php echo U('Home/ProductList/catelist',array('path'=>$val2['path'],'minprice'=>0,'maxprice'=>0));?>"><?php echo ($val2['catename']); ?><i>></i></a></dt>
                                                    <dd>
                                                        <?php if(is_array($val2['third'])): $i = 0; $__LIST__ = $val2['third'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val3): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/ProductList/catelist',array('path'=>$val3['path'],'minprice'=>0,'maxprice'=>0));?>"><?php echo ($val3['catename']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </dl>
                                        </div><div class="Brands">
                                        <a href="#" class="logo_Brands"><img src="/Public/Home/images/products/logo/34.jpg"/></a>

                                    </div>
                                    </div>
                                    <!--品牌-->
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail"	});</script>
            <!--菜单栏-->
            <div class="Navigation" id="Navigation">
                <!--<ul class="Navigation_name">-->
                <ul class="Navigation_name">
                    <li id="sy"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
                    <li id="cplb"><a href="<?php echo U('Home/ProductList/showlist',array('bid'=>0,'minprice'=>0,'maxprice'=>0));?>">产品列表</a></li>
                    <li id="xsqg"><a href="<?php echo U('Home/Sale/showlist');?>">限时抢购</a><em class="hot_icon"></em></li>
                    <li id="tptj"><a href="<?php echo U('Home/Vote/showlist');?>">投票统计</a></li>
                    <li id="pmsc"><a href="<?php echo U('Home/Auction/showlist');?>">拍卖商城</a></li>
                    <li id="jfdh"><a href="<?php echo U('Home/Integral/showlist');?>" target="_blank">积分兑换</a></li>
                    <li id="lxwm"><a href="<?php echo U('Home/Connect/showlist');?>">联系我们</a></li>
                </ul>
            </div>
            <script>$("#Navigation").slide({titCell:".Navigation_name li"});</script>
            <!-- <a href="#" class="link_bg"><img src="/Public/Home/images/link_bg_03.png" /></a>-->
        </div>
    </div>
</div>
<!--幻灯片样式-->
<div id="slideBox" class="slideBox">
    <div class="hd">
        <ul class="smallUl"></ul>
    </div>
    <div class="bd">
        <ul>
            <?php if(is_array($adslist)): $i = 0; $__LIST__ = $adslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo U('Index/ads');?>" target="_blank">
                        <div style="background:url(/Public/Admin/Uploads/ads/<?php echo ($val['adlogo']); ?>) no-repeat rgb(255, 227, 130); background-position:center; width:100%; height:460px;">
                            <!--<div>
                                <img src="/Public/Admin/Uploads/ads/<?php echo ($val['adlogo']); ?>" alt="" width="1200px" height="460px" style="margin: 0 auto"/>-->
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
    <a class="prev" href="javascript:void(0)"></a>
    <a class="next" href="javascript:void(0)"></a>

</div>
<script type="text/javascript">
    jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
</script>
</div>
<!--内容样式-->
<div class="index_style">
    <!--推荐图层样式-->
    <div class="recommend">
        <div class="recommend_bg"></div>
        <div class="list">
            <div class="picScroll">
                <div class="hd">
                    <a class="prev" href="javascript:void(0)">&gt;</a>
                    <a class="next" href="javascript:void(0)">&lt;</a>
                </div>
                <div class="bd">
                    <div class="tempWrap" >
                        <ul>
                            <?php if(is_array($firsttj)): $i = 0; $__LIST__ = $firsttj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="recommend_info">
                                    <div class="img_link">
                                        <a href="<?php echo U('Detail/detail',array('gid'=>$val['id']));?>" class="">
                                            <img src="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($val['pic']); ?>" width="110px" height="150px">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="<?php echo U('Detail/detail',array('gid'=>$val['id']));?>" class="title_name"><?php echo ($val['goodsname']); ?></a>
                                        <h2><i>￥</i><?php echo ($val['price']); ?></h2>
                                    </div>
                                    <a href="<?php echo U('Detail/detail',array('gid'=>$val['id']));?>" class="buy_btn"> 查看详情</a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul></div>
                </div>
            </div>
            <script>jQuery(".picScroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});</script>
        </div>
    </div>
    <!--品牌样式-->
    <div class="Shops_style clearfix">
        <div class="title_name">
            <span>品牌之家</span>
        </div>
        <div class="Shops_list clearfix">
            <ul>
                <?php if(is_array($bpic)): $i = 0; $__LIST__ = $bpic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li style="width:218px;height:120px">
                        <!--   <div class="Shops_area"><a href="#">四川成都武侯区</a></div>-->
                        <!--<div class="Shops_address">-->
                        <!--改动一处-->
                        <a href="<?php echo U('ProductList/showlist',array('bid'=>$value['id'],'maxprice'=>0,'minprice'=>0));?>"><img src="/Public/Admin/Uploads/brand/<?php echo ($value['logo']); ?>" style="width:180px;height: 120px;"></a>
                        <!--  </div>-->
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <!--样式-->
    <div class="clearfix">
        <div class="news_P">
            <div class="slideTxtBox">
                <div class="parHd">
                    <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                    <span class="arrow"><a class="next"></a><a class="prev"></a></span>
                    <ul><li class="">最新订单</li><li class="on">商城新闻</li></ul>
                </div>
                <div class="parBd">
                    <ul class="Order_list">
                        <div class="picMarquee-top">
                            <div class="hd"></div>
                            <div class="bd">
                                <ul>
                                    <?php if(is_array($lastlist)): $k = 0; $__LIST__ = $lastlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><li class="clearfix">
                                        <a href="<?php echo U('Detail/detail',array('gid'=>$v['id']));?>" target="_blank" class="img_link"><img src="/Public/Admin/Uploads/goods/thumb800/800_<?php echo ($v["pic"]); ?>"  width="60" height="60"/></a>
                                        <a href="<?php echo U('Detail/detail',array('gid'=>$v['id']));?>" class="name"><?php echo ($v["goodsname"]); ?></a>
                                        <h2>总价：<b>￥<?php echo ($v["order_price"]); ?></b></h2>
                                        <h4>下单时间:<?php echo (date("Y/m/d H:i:s",$v['addtime'])); ?></h4>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!--<li class="clearfix">
                                        <a href="#" target="_blank" class="img_link"><img src="/Public/Home/images/products/p_56.jpg"  width="60" height="60"/></a>
                                        <a href="#" class="name">史努比（SNOOPY）净含量30克 梦系列薄荷糖（甜橙味）</a>
                                        <h2>总价：<b>￥123</b></h2>
                                        <h4>下单时间：2016年5月2日 12:43:03</h4>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" target="_blank" class="img_link"><img src="/Public/Home/images/products/p_56.jpg"  width="60" height="60"/></a>
                                        <a href="#" class="name">史努比（SNOOPY）净含量30克 梦系列薄荷糖（甜橙味）</a>
                                        <h2>总价：<b>￥123</b></h2>
                                        <h4>下单时间：2016年5月2日 12:43:03</h4>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" target="_blank" class="img_link"><img src="/Public/Home/images/products/p_56.jpg"  width="60" height="60"/></a>
                                        <a href="#" class="name">史努比（SNOOPY）净含量30克 梦系列薄荷糖（甜橙味）</a>
                                        <h2>总价：<b>￥123</b></h2>
                                        <h4>下单时间：2016年5月2日 12:43:03</h4>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                        <script>jQuery(".slideTxtBox .picMarquee-top").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:2,interTime:50,trigger:"click"});</script>
                    </ul>
                    <ul>
                        <table style="text-align: center;">
                            <tr>

                                <td style="width: 170px;line-height: 40px;border-bottom: 1px solid #ccc;text-align: center">标题</td>
                                <td style="width:60px;line-height: 40px;border-bottom: 1px solid #ccc">日期</td>
                            </tr>
                            <?php if(is_array($xinwen)): $i = 0; $__LIST__ = $xinwen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>

                                    <td style="width: 170px;line-height: 30px;border-bottom: 1px solid #ccc;text-align: center"><a href="<?php echo U('Home/News/newsdetail',array('id'=>$v['id']));?>" target="_blank" ><?php echo ($v["title"]); ?></a></td>

                                    <td style="width: 60px;line-height: 30px;border-bottom: 1px solid #ccc"><?php echo (date("Y/m/d",$v["addtime"])); ?></td>

                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<li><a href="#" target="_blank">商城最新公告提示！</a></li>
                            <li><a href="#" target="_blank">商城最新公告提示！</a></li>
                            <li><a href="#" target="_blank">商城最新公告提示！</a></li>
                            <li><a href="#" target="_blank">商城最新公告提示！</a></li>
                            <li><a href="#" target="_blank">商城最新公告提示！</a></li>-->
                        </table>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">jQuery(".slideTxtBox").slide({titCell:".parHd li",mainCell:".parBd"});</script>
        </div>
        <div class="Hot_p">
            <!--热销产品-->
            <div class="hot_silde">
                <div class="hd"><em></em>热销产品<ul></ul></div>
                <div class="bd">
                    <ul>
                        <?php if(is_array($tjlist)): $i = 0; $__LIST__ = $tjlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('Detail/detail',array('gid'=>$val['id']));?>" class="imglibk">
                                    <img  src="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($val['pic']); ?>"  width="160" height="160"/></a>
                                <a href="<?php echo U('Detail/detail',array('gid'=>$val['id']));?>" class="name"><?php echo ($val["goodsname"]); ?></a>
                                <div class="infostyle"><span class="Price"><b>￥</b><?php echo ($val["price"]); ?></span><span class="Quantity">销售：<b><?php echo ($val["salenum"]); ?></b>件</span></div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <a class="next" href="javascript:void(0)">&lt;</a>
                <a class="prev" href="javascript:void(0)">&gt;</a>
            </div>
            <script type="text/javascript">
                jQuery(".hot_silde").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,scroll:4,vis:4,interTime:5000,trigger:"click"});
            </script>
        </div>
    </div>
    <!--限时促销-->
    <div class="Promotions_style">
        <div class="title_name"><i class="iconfont icon-time"></i>限时促销<a href="#" >更多促销</a></div>
        <div class="list">
            <ul>
                <?php if(is_array($sumlist)): $k = 0; $__LIST__ = $sumlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><li>
                        <?php if($time > $v['endtime']): ?><a class="Promotions_img ch" href="javascript:change(<?php echo ($k); ?>);" ><img id="ch<?php echo ($k); ?>" src="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($v['pic']); ?>"  width="180" height="180"/></a>
                            <?php else: ?>
                            <a href="<?php echo U('Sale/limitBuy',array('gid'=>$v['id']));?>" class="Promotions_img"><img src="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($v['pic']); ?>"  width="180" height="180"/></a><?php endif; ?>
                        <div class="Promotions_line">
                            <?php if($time > $v['endtime']): ?><a class="name"><?php echo (mb_substr($v['goodsname'],0,35,'utf-8')); ?></a>
                            <?php else: ?>
                                <a href="<?php echo U('Sale/limitBuy',array('gid'=>$v['id']));?>" class="name"><?php echo (mb_substr($v['goodsname'],0,35,'utf-8')); ?></a><?php endif; ?>
                            <div class="infostyle"><span class="Price"><b>￥</b><?php echo ($v['price']); ?></span><span class="Original_price">￥<?php echo ($v['marketprice']); ?></span></div>
                            <div class="time" id="time<?php echo ($k); ?>" style="font-family: '微软雅黑';font-size: 16px;font-weight: bolder"></div>
                            <input type="hidden" value="<?php echo ($v['endtime']); ?>" id="endTime<?php echo ($k); ?>"/>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <script>
                    $(function(){
                        setInterval(changTime, 1000);    //每一秒都循环一次函数
                        function changTime(){
                            for(i=1;i<=5;i++){document.getElementById("time"+i).innerHTML = getTime1();}
                        }
                        function getTime1() {
                            var now = new Date().getTime(); //获取当前的
                            var end = ($('#endTime'+i).val()) * 1000;
                            var temp = end - now;
                            if (temp <= 0) {return "抢购已结束";}
                            else {
                                var temp2 = new Date();
                                temp2.setTime(temp);
                                var sec = Math.floor((temp) / 1000 % 60);
                                var min = Math.floor(temp / (60 * 1000) % 60);
                                var hou = Math.floor(temp / (60 * 60 * 1000) % 24);
                                var day = Math.floor(temp / (24 * 60 * 60 * 1000));
                                return day + "天 " + hou + "小时 " + min + "分钟 " + sec + "秒";
                            }
                        }
                    })
                </script>
            </ul>
        </div>
    </div>
    <div class="AD_tu"><a href="<?php echo U('Home/Sale/tens');?>"><img src="/Public/Home/images/AD/ad_cx.png"  width="1200" height="150"/></a></div>
    <!--产品类样式-->
    <!--一楼开始-->
    <div class="product_Sort">
        <div class="title_name"><span class="floor" id="floor1">1F</span><span class="name" style="color:#ff5628;">蛋糕甜品</span>
        </div>
        <div class="Section_info clearfix">
            <div class="product_AD">
                <div class="pro_ad_slide">
                    <div class="hd">
                        <ul><li class="on">1</li><li class="">2</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <?php if(is_array($adslist1)): $i = 0; $__LIST__ = $adslist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li style="display: list-item;"><a href="#"><img src="/Public/Admin/Uploads/ads/<?php echo ($val["adlogo"]); ?>" width="398" height="469"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <a class="prev" href="javascript:void(0)"><em class="arrow"></em></a>
                    <a class="next" href="javascript:void(0)"><em class="arrow"></em></a>
                </div>
                <script type="text/javascript">
                    jQuery(".pro_ad_slide").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:6000});
                </script>
            </div>
            <!--产品列表-->
            <div class="pro_list">
                <ul>
                    <?php if(is_array($goodslist1)): $i = 0; $__LIST__ = $goodslist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>">
                                <img class="lazy" data-original="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($value['pic']); ?>" src="/Public/Home/images/loading.gif" width="180px" height="160px"></a>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>" class="p_title_name"><?php echo (mb_substr($value['goodsname'],0,15,'utf-8')); ?></a>
                            <div class="Numeral"><span class="price"><i>￥</i><?php echo ($value["price"]); ?></span><span class="Sales">销量<i><?php echo ($value["salenum"]); ?></i>件</span></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--一楼结束-->

    <!--二楼开始-->
    <div class="product_Sort">
        <div class="title_name"><span class="floor" id="floor2">2F</span><span class="name" style="color:#ff5628;">清爽饮品</span>
            </div>
        <div class="Section_info clearfix">
            <div class="product_AD">
                <div class="pro_ad_slide">
                    <div class="hd">
                        <ul><li class="on">1</li><li class="">2</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <?php if(is_array($adslist2)): $i = 0; $__LIST__ = $adslist2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li style="display: list-item;"><a href="#"><img src="/Public/Admin/Uploads/ads/<?php echo ($val["adlogo"]); ?>" width="398" height="469"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <a class="prev" href="javascript:void(0)"><em class="arrow"></em></a>
                    <a class="next" href="javascript:void(0)"><em class="arrow"></em></a>
                </div>
                <script type="text/javascript">
                    jQuery(".pro_ad_slide").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:6000});
                </script>
            </div>
            <!--产品列表-->
            <div class="pro_list">
                <ul>
                    <?php if(is_array($goodslist2)): $i = 0; $__LIST__ = $goodslist2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>">
                                <img class="lazy" data-original="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($value['pic']); ?>" src="/Public/Home/images/loading.gif" width="180px" height="160px"></a>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>" class="p_title_name"><?php echo (mb_substr($value['goodsname'],0,15,'utf-8')); ?></a>
                            <div class="Numeral"><span class="price"><i>￥</i><?php echo ($value['price']); ?></span><span class="Sales">销量<i><?php echo ($value['salenum']); ?></i>件</span></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--二楼结束-->

    <!--三楼开始-->
    <div class="product_Sort">
        <div class="title_name"><span class="floor" id="floor3">3F</span><span class="name" style="color:#ff5628;">休闲零食</span></div>
        <div class="Section_info clearfix">
            <div class="product_AD">
                <div class="pro_ad_slide">
                    <div class="hd">
                        <ul><li class="on">1</li><li class="">2</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <?php if(is_array($adslist3)): $i = 0; $__LIST__ = $adslist3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li style="display: list-item;"><a href="#"><img src="/Public/Admin/Uploads/ads/<?php echo ($val["adlogo"]); ?>" width="398" height="469"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <a class="prev" href="javascript:void(0)"><em class="arrow"></em></a>
                    <a class="next" href="javascript:void(0)"><em class="arrow"></em></a>
                </div>
                <script type="text/javascript">
                    jQuery(".pro_ad_slide").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:6000});
                </script>
            </div>
            <!--产品列表-->
            <div class="pro_list">
                <ul>
                    <?php if(is_array($goodslist3)): $i = 0; $__LIST__ = $goodslist3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>">
                                <img class="lazy" data-original="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($value['pic']); ?>" src="/Public/Home/images/loading.gif" width="180px" height="160px"></a>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>" class="p_title_name"><?php echo (mb_substr($value['goodsname'],0,15,'utf-8')); ?></a>
                            <div class="Numeral"><span class="price"><i>￥</i><?php echo ($value["price"]); ?></span><span class="Sales">销量<i><?php echo ($value["salenum"]); ?></i>件</span></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--三楼结束-->

    <!--四楼开始-->
    <div class="product_Sort">
        <div class="title_name"><span class="floor" id="floor4">4F</span><span class="name" style="color:#ff5628;">养生冲剂</span></div>
        <div class="Section_info clearfix">
            <div class="product_AD">
                <div class="pro_ad_slide">
                    <div class="hd">
                        <ul><li class="on">1</li><li class="">2</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <?php if(is_array($adslist4)): $i = 0; $__LIST__ = $adslist4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li style="display: list-item;"><a href="#"><img src="/Public/Admin/Uploads/ads/<?php echo ($val["adlogo"]); ?>" width="398" height="469"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <a class="prev" href="javascript:void(0)"><em class="arrow"></em></a>
                    <a class="next" href="javascript:void(0)"><em class="arrow"></em></a>
                </div>
                <script type="text/javascript">
                    jQuery(".pro_ad_slide").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:6000});
                </script>
            </div>
            <!--产品列表-->
            <div class="pro_list">
                <ul>
                    <?php if(is_array($goodslist4)): $i = 0; $__LIST__ = $goodslist4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>">
                                <img class="lazy" src="/Public/Home/images/loading.gif" data-original="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($value['pic']); ?>" width="180px" height="160px"></a>
                            <a href="<?php echo U('Detail/detail',array('gid'=>$value['id']));?>" class="p_title_name"><?php echo (mb_substr($value['goodsname'],0,15,'utf-8')); ?></a>
                            <div class="Numeral"><span class="price"><i>￥</i><?php echo ($value["price"]); ?></span><span class="Sales">销量<i><?php echo ($value["salenum"]); ?></i>件</span></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--四楼结束-->
    <!--猜你喜欢样式-->
    <div class="like_p">
        <div class="title_name"><span id="floor5">猜你喜欢</span></div>
        <div class="list" id="jswbox">
            <pre class="prev">prev</pre>
            <pre class="next">next</pre>
            <ul class="list_style">
                <?php if(is_array($like)): $i = 0; $__LIST__ = $like;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="p_info_u">
                        <a href="<?php echo U('Detail/detail',array('gid'=>$val['id']));?>" class="p_img"><img src="/Public/Admin/Uploads/goods/thumb350/350_<?php echo ($val['pic']); ?>" style="width: 300px;height: 300px;"></a>
                        <a href="<?php echo U('Detail/detail',array('gid'=>$val['id']));?>"  style="float:left;margin-top: 10px;font-size: 14px;"><?php echo ($val["goodsname"]); ?></a>
                        <div class="Numeral"  style="float:left;font-size: 20px;"><span class="price"><i>￥</i><?php echo ($val["price"]); ?></span>
                            <span class="Sales">销量<i><?php echo ($val["salenum"]); ?></i>件</span></div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div>
    </div>
</div>

<!--楼层导航开始-->
<div class="floor_nav">
    <ul id="navList">
        <li class="focus">1F <span>甜品</span></li>
        <li>2F <span>饮品</span></li>
        <li>3F <span>零食</span></li>
        <li>4F <span>冲剂</span></li>
        <li>5F <span>喜欢</span></li>
    </ul>
</div>

<!--<div class="slogen">
    <div class="index_style">
        <ul class="wrap">
            <li>
                <a href="#"><img src="/Public/Home/images/slogen_34.png" data-bd-imgshare-binded="1"></a>
                <b>安全保证</b>
                <span>多重保障机制 认证商城</span>
            </li>
            <li><a href="#"><img src="/Public/Home/images/slogen_28.png" data-bd-imgshare-binded="2"></a>
                <b>正品保证</b>
                <span>正品行货 放心选购</span>
            </li>
            <li>
                <a href="#"><img src="/Public/Home/images/slogen_30.png" data-bd-imgshare-binded="3"></a>
                <b>七天无理由退换</b>
                <span>七天无理由保障消费权益</span>
            </li>
            <li>
                <a href="#"><img src="/Public/Home/images/slogen_31.png" data-bd-imgshare-binded="4"></a>
                <b>天天低价</b>
                <span>价格更低，质量更可靠</span>
            </li>
        </ul>
    </div>
</div>-->
<!--底部图层-->
<div class="phone_style">
    <div class="index_style">
        <span class="phone_number"><em class="iconfont icon-dianhua"></em>400-4565-345</span><span class="phone_title">客服热线 7X24小时 贴心服务</span>
    </div>
</div>
<div class="footerbox clearfix">
    <div class="clearfix">
        <div class="">
            <?php if(is_array($articleInfo)): $i = 0; $__LIST__ = $articleInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><dl>
                    <dt><?php echo ($val['title']); ?></dt>
                    <?php if(is_array($val)): $i = 0; $__LIST__ = $val;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val1): $mod = ($i % 2 );++$i; if(is_array($val1)): $i = 0; $__LIST__ = $val1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val2): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('Home/Article/articledetail',array('id'=>$val2['id']));?>">&nbsp;<?php echo ($val2['cate']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                </dl><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<dl>
                <dt>新手上路</dt>
                <dd><a href="#">售后流程</a></dd>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">订购方式</a> </dd>
                <dd><a href="#">隐私声明 </a></dd>
                <dd><a href="#">推荐分享说明 </a></dd>
            </dl>
            <dl>
                <dt>配送与支付</dt>
                <dd><a href="#">保险需求测试</a></dd>
                <dd><a href="#">专题及活动</a></dd>
                <dd><a href="#">挑选保险产品</a> </dd>
                <dd><a href="#">常见问题 </a></dd>
            </dl>
            <dl>
                <dt>售后保障</dt>
                <dd><a href="#">保险需求测试</a></dd>
                <dd><a href="#">专题及活动</a></dd>
                <dd><a href="#">挑选保险产品</a> </dd>
                <dd><a href="#">常见问题 </a></dd>
            </dl>
            <dl>
                <dt>支付方式</dt>
                <dd><a href="#">保险需求测试</a></dd>
                <dd><a href="#">专题及活动</a></dd>
                <dd><a href="#">挑选保险产品</a> </dd>
                <dd><a href="#">常见问题 </a></dd>
            </dl>
            <dl>
                <dt>帮助中心</dt>
                <dd><a href="#">保险需求测试</a></dd>
                <dd><a href="#">专题及活动</a></dd>
                <dd><a href="#">挑选保险产品</a> </dd>
                <dd><a href="#">常见问题 </a></dd>
            </dl>-->
        </div>
    </div>
    <div class="text_link">
        <p>
            <a href="#">关于我们</a>｜ <a href="#">公开信息披露</a>｜ <a href="#">加入我们</a>｜ <a href="#">联系我们</a>｜ <a href="#">版权声明</a>｜ <a href="#">隐私声明</a>｜ <a href="#">网站地图</a></p>
        <p>蜀ICP备11017033号 Copyright ©2011 成都福际生物技术有限公司 All Rights Reserved. Technical support:CDDGG Group</p>
    </div>
</div>
<!--右侧菜单栏购物车样式-->



<div class="fixedBox">
    <ul class="fixedBoxList">
        <li class="fixeBoxLi user">
            <?php if($mid != 0): ?><a href="<?php echo U('Personal/showlist');?>">
                    <span class="fixeBoxSpan iconfont icon-yonghu"></span> <strong>用户</strong>
                </a>
                <?php else: ?>
                <a href="<?php echo U('Member/login');?>">
                   <span class="fixeBoxSpan iconfont icon-yonghu"></span> <strong>用户</strong></a><?php endif; ?>
        </li>

        <li class="fixeBoxLi Service "> <span class="fixeBoxSpan iconfont icon-service"></span> <strong>客服</strong>
            <div class="ServiceBox">
                <div class="bjfffs"></div>

                <dl onclick="javascript:;">
                    <dd> <strong style="float: left;top:12px;left: 30px;position: absolute">QQ客服1</strong>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=591813762&site=qq&menu=yes">
                            <img border="0" src="http://wpa.qq.com/pa?p=2:591813762:52" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
                    </dd><br><br>
                    <dd> <strong style="float: left;top:52px;left: 30px;position: absolute">QQ客服2</strong>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=211663882&site=qq&menu=yes">
                            <img border="0" style="" src="http://wpa.qq.com/pa?p=2:211663882:52" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
                    <!--                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=591813766&site=qq&menu=yes">
                                                <img border="0" src="http://wpa.qq.com/pa?p=2:591813766:53" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>-->
                   </dd>
                </dl>

            </div>
        </li>
        <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
            <span class="fixeBoxSpan iconfont icon-erweima"></span> <strong>微信</strong>
            <div class="cartBox">
                <div class="bjfff"></div>
                <div class="QR_code">
                    <p><img src="/Public/Home/images/two-code.png" width="150px" height="150px" style=" margin-top:10px;" /></p>
                    <span style="color: #000">微信扫一扫，关注我们</span>
                </div>
            </div>
        </li>
        <li class="fixeBoxLi Home">
            <?php if($mid != 0): ?><a href="<?php echo U('Personal/collection');?>"> <span class="fixeBoxSpan iconfont  icon-shoucang"></span> <strong>收藏</strong> </a>
                <?php else: ?>
                <a href="<?php echo U('Member/login');?>"><span class="fixeBoxSpan iconfont  icon-shoucang"></span> <strong>收藏</strong></a><?php endif; ?>
        </li>
        <li class="fixeBoxLi Home">
            <?php if($mid != 0): ?><a href="<?php echo U('Personal/foot');?>"> <span class="fixeBoxSpan iconfont  icon-zuji"></span> <strong>足迹</strong> </a>
                <?php else: ?>
                <a href="<?php echo U('Member/login');?>"><span class="fixeBoxSpan iconfont  icon-zuji"></span> <strong>足迹</strong></a><?php endif; ?>
        </li>

        <li class="fixeBoxLi Home">
            <?php if($mid != 0): ?><a href="<?php echo U('Personal/feedback');?>"> <span class="fixeBoxSpan iconfont  icon-fankui"></span> <strong>反馈</strong> </a>
                <?php else: ?>
                <a href="<?php echo U('Member/login');?>"><span class="fixeBoxSpan iconfont  icon-fankui"></span> <strong>反馈</strong></a><?php endif; ?>
        </li>
        <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan iconfont icon-top"></span> <strong>返回顶部</strong> </li>
    </ul>
</div>



</body>
</html>