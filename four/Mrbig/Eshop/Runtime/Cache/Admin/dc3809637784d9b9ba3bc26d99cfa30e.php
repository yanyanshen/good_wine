<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Style/skin.css" />
    <script type="text/javascript" src="/Public/Admin/Js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/Js/echarts.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/layer/layer.js"></script>


    <style type="text/css">

        #cache{
            margin-left: 170px;
            margin-top:-28px ;
        }
        #hp{
            margin-left: 30px;
        }
        #weather{
            position:absolute;
            right:350px;
            margin-top:10px;
        }
        #main{
            position:absolute;
            right:220px;
            margin-top:300px;
        }

        #top{
            position:absolute;
            right:20px;
            margin-top:-50px;
        }
    </style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <!-- 头部开始 -->
    <tr>
        <td width="17" valign="top" background="/Public/Admin/Images/mail_left_bg.gif">
            <img src="/Public/Admin/Images/left_top_right.gif" width="17" height="29" />
        </td>
        <td valign="top" background="/Public/Admin/Images/content_bg.gif">
            <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="/Public/Admin/Images/content_bg.gif">
                <tr><td height="31"><div class="title">欢迎界面</div></td></tr>
            </table>
        </td>
        <td width="16" valign="top" background="/Public/Admin/Images/mail_right_bg.gif"><img src="/Public/Admin/Images/nav_right_bg.gif" width="16" height="29" /></td>
    </tr>
    <!-- 中间部分开始 -->
    <tr>
        <!--第一行左边框-->
        <td valign="middle" background="/Public/Admin/Images/mail_left_bg.gif">&nbsp;</td>
        <!--第一行中间内容-->
        <td valign="top" bgcolor="#F7F8F9">
            <form  id="form1" method="post">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <!-- 空白行-->
                <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>


                <tr>
                    <!--左边内容-->
                    <td colspan="2" valign="top">
                        <h3 style="margin:0 0 10px 10px;">&nbsp;&nbsp;&nbsp;&nbsp;<h style="color:#867bf1"><?php echo (session('aname')); ?></h>&nbsp;&nbsp;&nbsp;&nbsp;欢迎您进入后台管理系统，您的登录IP为<?php echo (session('ipaddress')); ?>！</h3>
                        <img src="/Public/Admin/Images/ts.gif" width="16" height="16" style="margin-left:10px;"> 提示：<br />
                        <p style="text-indent:20px;line-height:25px;margin-left:10px;font-size:15px;">如果状态异常，请点此<a href="<?php echo u('Admin/editAdmin',array('id'=>session('aid')));?>" style="font-size: 15px;color:#867bf1">修改信息</a>！
                            如果您有任何疑问请点<span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=609307843&site=qq&menu=yes" onfocus="this.blur()"><img style="vertical-align:middle;"border="0" src="http://wpa.qq.com/pa?p=2:609307843:41" alt="瑞曼为您服务" title="瑞曼科技"></a> </span>在线客服进行咨询！<br />&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        &nbsp;&nbsp;&nbsp;&nbsp;<p id="hp" style="font-size: 15px">缓存过多，点击清除</p><a href="<?php echo u('clearRuntime');?>" class="btn" style="font-size: 15px"><img src="/Public/Admin/publicimg/cache.png" width="35px" height="35px" id="cache"></a>
                    </td>
                    <!--间隔-->
                    <td width="7%">&nbsp;</td>
                    <!--右边内容-->
                    <iframe   id="weather" allowtransparency="true" frameborder="0" width="412" height="100" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=2&z=1&t=1&v=0&d=2&bd=1&k=000000&f=&q=1&e=1&a=1&c=57083&w=412&h=100&align=right"></iframe>

                    <td width="40%" valign="top">
                        <table width="100%" height="150" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC;margin-left: -1000px;margin-top: 150px;">
                            <tr>
                                <td width="7%" height="27" background="/Public/Admin/Images/news_title_bg.gif">
                                    <img src="/Public/Admin/Images/news_title_bg.gif" width="2" height="27">
                                </td>
                                <td width="93%" background="/Public/Admin/Images/news_title_bg.gif" class="left_bt">最新动态</td>
                            </tr>
                            <tr><td height="5" colspan="2">&nbsp;</td></tr>
                            <tr>
                                <td height="100" valign="top" colspan="2" id="news">


                                      <marquee direction="up"   scrollamount="15"   vspace="30px" width="500px" height="400px" onmouseout="this.start()" onmouseover="this.stop()">
                                            <ul>
                                               <?php if(is_array($newslist)): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="font-size: 25px;color:#0780a9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["title"]); ?></li><br>
                                                  <div style="font-size: 15px;color:#a9816f"><?php echo htmlspecialchars_decode($vo[content]);?></div><br><br><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                      </marquee>


                                </td>
                            </tr>
                            <tr>

                                <td height="5" colspan="2">&nbsp;</td></tr>
                        </table>
                    </td>

                <tr>


                <div id="main" style="width: 600px;height:400px;"></div>



                    <td width="2%">&nbsp;</td>
                    <td width="51%" class="left_txt"><br>
                        <br>
                        <br>
                        <img src="/Public/Admin/Images/icon_mail.gif" width="16" height="11"> 客户服务邮箱：rainman@foxmail.com<br />
                        <img src="/Public/Admin/Images/icon_phone.gif" width="17" height="14"> 官方网站：<a href="http://www.rain-man.cn">http://www.rain-man.cn</a>
                    </td>
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>
            </table>
                </form>
        </td>
        <td background="/Public/Admin/Images/mail_right_bg.gif">&nbsp;</td>
    </tr>
    <!-- 底部部分 -->
    <tr>
        <td valign="bottom" background="/Public/Admin/Images/mail_left_bg.gif">
            <img src="/Public/Admin/Images/buttom_left.gif" width="17" height="17" />
        </td>
        <td background="/Public/Admin/Images/buttom_bgs.gif">
            <img src="/Public/Admin/Images/buttom_bgs.gif" width="17" height="17">
        </td>
        <td valign="bottom" background="/Public/Admin/Images/mail_right_bg.gif">
            <img src="/Public/Admin/Images/buttom_right.gif" width="16" height="17" />
        </td>
    </tr>
</table>
</body>
<script>
    // 基于准备好的dom，初始化echarts实例
  /*  var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        color: ['#3398DB'],
        title: {
            text: '交易统计表'
        },
        tooltip: {},
        legend: {
            data:['状态量','月状态量']
        },
        xAxis: {
            data: ["未付款","已付款","已发货","确认收货","退货订单"]
        },
        yAxis: {},
        series: [
            {
            name: '状态量',
            type: 'bar',
            data: [<?php echo ($c1); ?>, <?php echo ($c2); ?>, <?php echo ($c3); ?>, <?php echo ($c4); ?>, <?php echo ($c5); ?>]
        },
            [
                {
                    name: '月状态量',
                    type: 'bar',
                    data: [<?php echo ($c1); ?>, <?php echo ($c2); ?>, <?php echo ($c3); ?>, <?php echo ($c4); ?>, <?php echo ($c5); ?>]
                },
        ]


    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);*/

    var myChart = echarts.init(document.getElementById('main'));
    var  option = {
        color: ['#3398DB'],
        title : {
            text: '交易统计表',
            subtext: '数据为王'
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['状态量',]
        },
        toolbox: {
            show : true,
            feature : {
                dataView : {show: true, readOnly: false},
                magicType : {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                data : ["未付款","已付款","已发货","确认收货","退货订单"]
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'状态量',
                type:'bar',
                data:[<?php echo ($c1); ?>, <?php echo ($c2); ?>, <?php echo ($c3); ?>, <?php echo ($c4); ?>, <?php echo ($c5); ?>]
                /*markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name: '平均值'}
                    ]
                }*/
            }


        ]
    };

    myChart.setOption(option);


    function logout(){
        $.ajax({
            type:"post",
            url:"<?php echo u('Admin/Login/loginout');?>",
            data:'',
            success:function(data){
                alert(data.status);
                if(data.status=='ok'){
                    location.href="<?php echo U('/Admin/Login/index');?>";

                }
            }
        })

    }
</script>
</html>