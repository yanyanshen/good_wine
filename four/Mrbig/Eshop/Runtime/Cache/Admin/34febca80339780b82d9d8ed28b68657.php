<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品列表</title>
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    <link rel="stylesheet" href="/Public/Admin/css/main.css">
    <script type="text/javascript" src="/Public/Admin/cjyy/jQuery-1.8.2.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/colResizable-1.3.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript" src="/Public/Admin/cjyy/jquery.validate.js"></script>
    <script type="text/javascript" src="/Public/Admin/cjyy/layer/layer.js"></script>

    <style>
        #page a{
            display: inline-block;
            width: 18px;
            height:18px;
            padding:5px;
            margin: 2px;
            text-decoration: none;
            text-align: center;
            line-height: 18px;
            border: 1px solid #c2ccd1;
            background: #f0ead8;
            color:#08c;
        }
        #page a:hover{
            background: #333;
            color:#fff;
        }
        #page span.current{
            display: inline-block;
            width: 18px;
            height:18px;
            padding:5px;
            margin: 2px;
            text-decoration: none;
            text-align: center;
            line-height: 18px;
            border: 1px solid #c2ccd1;
            background: #00A9E8;
            color:#fff;
            font-weight: bold;
        }
        #addGoods{
            float:right;
            margin-right: 30px;
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
            <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background=".//Public/Admin/Images/content_bg.gif">
                <tr><td height="31"><div class="title">商品列表</div></td></tr>
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
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <!-- 空白行-->
                <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                <tr>
                    <td colspan="4">
                        <table>
                            <tr>
                                <td width="100" align="center"><img src="/Public/Admin/Images/mime.gif" /></td>
                                <td valign="bottom"><h3 style="letter-spacing:1px;">MrBig,改变空间，改变生活！</h3></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 一条线 -->

                <tr>
                    <td height="40" colspan="4">
                        <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                            <tr><td></td></tr>
                        </table>
                    </td>
                </tr>
                <!-- 产品列表开始 -->
                <tr>
                    <td width="2%">&nbsp;</td>
                    <td width="96%">
                        <div class="box_center pt10 pb10">
                            <form action="<?php echo u('userList');?>" method="post">
                                <table class="form_table" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>账户名称:</td>
                                        <td><input type="text" name="username" class="input-text lh25" size="10">
                                            &nbsp;&nbsp;<input type="submit" value="查询" class="ext_btn ext_btn_submit" id="55"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <table width="100%">
                            <tr>
                                <td colspan="2">
                                    <form action="" method="" id="form1">
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                                            <tr style="background-color:#E7F1FE">

                                                <th width="20%">用户名</th>
                                                <th width="25%">邮箱</th>
                                                <th width="20%">注册时间</th>
                                                <th width="10%">账户状态</th>
                                                <th width="20%">操作</th>
                                            </tr>
                                            <?php if(is_array($userList)): $k = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr class="tr">
                                                    <td><?php echo (mb_substr($vo["username"],0,20,'UTF-8')); ?></td>
                                                    <td><?php echo ($vo["email"]); ?></td>
                                                    <td><?php echo date("Y-m-d H:i:s",$vo['time']);?></td>
                                                    <td><?php echo ($vo['status']?'激活':'禁用'); ?></td>
                                                    <td>
                                                        <div class="ext_btn ext_btn_submit" href="#" id="cut(<?php echo ($vo['id']); ?>)" onclick="cut(<?php echo ($vo['id']); ?>)"><?php echo ($vo['status']?'禁&nbsp;&nbsp;用':'激&nbsp;&nbsp;活'); ?></div>
                                                    </td>
                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </table>
                                        <div id="page">
                                            <?php echo ($page); ?>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="2%">&nbsp;</td>
                </tr>
                <!-- 产品列表结束 -->
                <tr>
                    <td height="40" colspan="4">
                        <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                            <tr><td></td></tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="2%">&nbsp;</td>
                    <td width="51%" class="left_txt">
                        <img src="/Public/Admin/Images/icon_mail.gif" width="16" height="11"> 客户服务邮箱：rainman@foxmail.com<br />
                        <img src="/Public/Admin/Images/icon_phone.gif" width="17" height="14"> 官方网站：<a href="http://www.rain-man.cn">http://www.rain-man.cn</a>
                    </td>
                    <td>&nbsp;</td><td>&nbsp;</td>
                </tr>
            </table>
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
<script>
    function cut(id) {
        $.post("<?php echo U('/Admin/User/usestatus');?>", {'id': id}, function (res) {
            if (res.status == 'ok') {
                layer.msg(res.msg,{time:1000},function(){
                    location.href = "<?php echo U('/Admin/User/userList');?>";
                });
            }
        })
    }
    function del(id) {
        layer.confirm('确定要删除这个商品吗？', {
            btn: ['删除', '取消']
        }, function () {
            $.post("<?php echo U('/Admin/Goods/delGoods');?>", {'id': id}, function (res) {
                if (res.status == 'ok') {
                    layer.msg(res.msg,{time:2000},function(){
                        location.href = "<?php echo U('/Admin/Goods/glist');?>";
                    });
                }else{layer.msg(res.msg,{time:2000});}
            })
        })
    }

</script>
</body>
</html>