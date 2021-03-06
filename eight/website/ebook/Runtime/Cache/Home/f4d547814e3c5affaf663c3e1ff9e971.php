<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/Public/Home/css/style.css" />
    <!--[if IE 6]>
    <script src="/Public/Home/js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/menu.js"></script>
	<script type="text/javascript" src="/Public/Home/js/select.js"></script>
    <script type="text/javascript" src="/Public/Home/js/region_select.js"></script>
<title><?php echo ($title); ?></title>
</head>
<body>
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
        <!--Begin 所在收货地区 Begin-->
    	<span class="s_city_b">
        	<span class="fl">送货至：</span>
            <span class="s_city">
            	<span>四川</span>
                <div class="s_city_bg">
                    <div class="s_city_t"></div>
                    <div class="s_city_c">
                        <h2>请选择所在的收货地区</h2>
                        <table border="0" class="c_tab" style="width:235px; margin-top:10px;" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>A</th>
                                <td class="c_h"><span>安徽</span><span>澳门</span></td>
                            </tr>
                            <tr>
                                <th>B</th>
                                <td class="c_h"><span>北京</span></td>
                            </tr>
                            <tr>
                                <th>C</th>
                                <td class="c_h"><span>重庆</span></td>
                            </tr>
                            <tr>
                                <th>F</th>
                                <td class="c_h"><span>福建</span></td>
                            </tr>
                            <tr>
                                <th>G</th>
                                <td class="c_h"><span>广东</span><span>广西</span><span>贵州</span><span>甘肃</span></td>
                            </tr>
                            <tr>
                                <th>H</th>
                                <td class="c_h"><span>河北</span><span>河南</span><span>黑龙江</span><span>海南</span><span>湖北</span><span>湖南</span></td>
                            </tr>
                            <tr>
                                <th>J</th>
                                <td class="c_h"><span>江苏</span><span>吉林</span><span>江西</span></td>
                            </tr>
                            <tr>
                                <th>L</th>
                                <td class="c_h"><span>辽宁</span></td>
                            </tr>
                            <tr>
                                <th>N</th>
                                <td class="c_h"><span>内蒙古</span><span>宁夏</span></td>
                            </tr>
                            <tr>
                                <th>Q</th>
                                <td class="c_h"><span>青海</span></td>
                            </tr>
                            <tr>
                                <th>S</th>
                                <td class="c_h"><span>上海</span><span>山东</span><span>山西</span><span class="c_check">四川</span><span>陕西</span></td>
                            </tr>
                            <tr>
                                <th>T</th>
                                <td class="c_h"><span>台湾</span><span>天津</span></td>
                            </tr>
                            <tr>
                                <th>X</th>
                                <td class="c_h"><span>西藏</span><span>香港</span><span>新疆</span></td>
                            </tr>
                            <tr>
                                <th>Y</th>
                                <td class="c_h"><span>云南</span></td>
                            </tr>
                            <tr>
                                <th>Z</th>
                                <td class="c_h"><span>浙江</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </span>
        </span>
        <!--End 所在收货地区 End-->
        <span class="fr">
        	<span class="fl">
                <?php if(session('mid')): ?>欢迎您，
                    <a href="<?php echo U('Home/MemberCenter/member_info');?>" style="color:#ff4e00;font-weight: bold">
                    <?=session('mname')?>
                    </a>
                    <?php else: ?>您还没有登录，请先
                    <a href="<?php echo U('Home/Login/login');?>" style="color:#ff4e00;">登录！</a>&nbsp;|&nbsp;
                    <a href="<?php echo U('Home/Login/register');?>" style="color:#ff4e00;">免费注册</a><?php endif; ?>&nbsp;|&nbsp;
                <a href="<?php echo U('Home/MemberCenter/member_info');?>">会员中心</a>&nbsp;|&nbsp;
                <a href="<?php echo U('Home/Login/logout');?>">安全退出</a>&nbsp;|
            </span>
            <span class="fr">&nbsp;<a href="#">手机版&nbsp;<img src="/Public/Home/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<div class="m_top_bg">
    <div class="top">
        <div class="m_logo"><a href="<?php echo U('Home/Index/index');?>"><img src="/Public/Home/images/logo.png" /></a></div>
    </div>
</div>
<!--End Header End-->
<div class="i_bg bg_color">
    <div class="m_content">
        <div class="m_left">
    <div class="left_m">
        <div class="left_m_t t_bg1">会员中心</div>
        <ul>
            <li><a href="<?php echo U('Home/MemberCenter/member_info');?>">个人信息</a></li>
            <li><a href="<?php echo U('Home/MemberCenter/member_editor');?>">修改资料</a></li>
            <li><a href="<?php echo U('Home/MemberCenter/member_safe');?>">账号安全</a></li>
            <li><a href="<?php echo U('Home/MemberCenter/member_address');?>">收货地址</a></li>
        </ul>
    </div>
    <div class="left_m">
    <div class="left_m_t t_bg2">我的订单</div>
        <ul>
            <li><a href="<?php echo U('Home/MemberOrder/order_list');?>">订单列表</a></li>
            <li><a href="<?php echo U('Home/MemberOrder/order_list');?>">订单列表</a></li>
            <li><a href="<?php echo U('Home/MemberOrder/order_list');?>">订单列表</a></li>
            <li><a href="<?php echo U('Home/MemberOrder/order_list');?>">订单列表</a></li>
        </ul>
    </div>
    <div class="left_m">
        <div class="left_m_t t_bg3">我的购物车</div>
        <ul>
            <li><a href="<?php echo U('Home/MemberShop/shop_list');?>">购物车列表</a></li>
            <li><a href="<?php echo U('Home/MemberShop/shop_list');?>">购物车列表</a></li>
            <li><a href="<?php echo U('Home/MemberShop/shop_list');?>">购物车列表</a></li>
            <li><a href="<?php echo U('Home/MemberShop/shop_list');?>">购物车列表</a></li>
        </ul>
    </div>
</div>

		<div class="m_right">
            <p></p>
            <div class="mem_tit">收货地址</div>
			<div class="address">
            	<table border="0" class="add_t" align="center" style="width:98%; margin:10px auto;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="right" width="80">收货用户：</td>
                        <td><?php echo ($username); ?></td>
                    </tr>
                    <tr>
                        <td align="right" width="80">用户昵称：</td>
                        <td><?php echo ($nickname); ?></td>
                    </tr>
                    <tr>
                        <td align="right" width="80">联系电话：</td>
                        <td><?php echo ($mobile); ?></td>
                    </tr>
                    <tr>
                        <td align="right" width="80">联系邮箱：</td>
                        <td><?php echo ($email); ?></td>
                    </tr>
                    <tr>
                        <td align="right" width="80">详细地址：</td>
                        <td><?php echo ($address); ?></td>
                    </tr>
                </table>
            </div>
            <div class="mem_tit">修改地址</div>
            <form action="<?php echo U('Home/MemberCenter/member_address');?>" method="post">
                <table border="0" class="add_tab" style="width:930px;"  cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left">
                            <div style="margin-top: 15px;">
                                <input type="text" name="address" placeholder="请输入收货地址" />
                            </div>
                        </td>
                    </tr>
                </table>
                <input type="submit"  value="确认修改" style="margin:25px 450px;font-size: 13px" class="add_b"/>
            </form>
        </div>
    </div>
</div>
<!--Begin Footer Begin -->
<div class="b_btm_bg b_btm_c">
    <div class="b_btm">
        <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
            <tr>
                <td width="72"><img src="/Public/Home/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
            </tr>
        </table>
        <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
            <tr>
                <td width="72"><img src="/Public/Home/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
            </tr>
        </table>
        <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
            <tr>
                <td width="72"><img src="/Public/Home/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
            </tr>
        </table>
        <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
            <tr>
                <td width="72"><img src="/Public/Home/images/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
            </tr>
        </table>
    </div>
</div>
<div class="b_nav">
    <dl>
        <dt><a href="#">新手上路</a></dt>
        <dd><a href="#">售后流程</a></dd>
        <dd><a href="#">购物流程</a></dd>
        <dd><a href="#">订购方式</a></dd>
        <dd><a href="#">隐私声明</a></dd>
        <dd><a href="#">推荐分享说明</a></dd>
    </dl>
    <dl>
        <dt><a href="#">配送与支付</a></dt>
        <dd><a href="#">货到付款区域</a></dd>
        <dd><a href="#">配送支付查询</a></dd>
        <dd><a href="#">支付方式说明</a></dd>
    </dl>
    <dl>
        <dt><a href="#">会员中心</a></dt>
        <dd><a href="#">资金管理</a></dd>
        <dd><a href="#">我的收藏</a></dd>
        <dd><a href="#">我的订单</a></dd>
    </dl>
    <dl>
        <dt><a href="#">服务保证</a></dt>
        <dd><a href="#">退换货原则</a></dd>
        <dd><a href="#">售后服务保证</a></dd>
        <dd><a href="#">产品质量保证</a></dd>
    </dl>
    <dl>
        <dt><a href="#">联系我们</a></dt>
        <dd><a href="#">网站故障报告</a></dd>
        <dd><a href="#">购物咨询</a></dd>
        <dd><a href="#">投诉与建议</a></dd>
    </dl>
    <div class="b_tel_bg">
        <a href="#" class="b_sh1">新浪微博</a>
        <a href="#" class="b_sh2">腾讯微博</a>
        <p>
            服务热线：<br />
            <span>400-123-4567</span>
        </p>
    </div>
    <div class="b_er">
        <div class="b_er_c"><img src="/Public/Home/images/er.gif" width="118" height="118" /></div>
        <img src="/Public/Home/images/ss.png" />
    </div>
</div>
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
        <img src="/Public/Home/images/b_1.gif" width="98" height="33" /><img src="/Public/Home/images/b_2.gif" width="98" height="33" /><img src="/Public/Home/images/b_3.gif" width="98" height="33" /><img src="/Public/Home/images/b_4.gif" width="98" height="33" /><img src="/Public/Home/images/b_5.gif" width="98" height="33" /><img src="/Public/Home/images/b_6.gif" width="98" height="33" />
    </div>
</div>
<!--End Footer End -->
</body>
<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>