<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Mrbig/Public/Home/skins/all.css" rel="stylesheet" type="text/css" />
<link href="/Mrbig/Public/Home/css/common.css" rel="stylesheet" type="text/css" />
<link href="/Mrbig/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        #form1 table tr{
            height: 50px;
            font-size: 15px;
        }
    </style>

<script src="/Mrbig/Public/Home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/Mrbig/Public/Home/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="/Mrbig/Public/Home/js/common_js.js" type="text/javascript"></script>
<script src="/Mrbig/Public/Home/js/footer.js" type="text/javascript"></script>
<script src="/Mrbig/Public/Home/layer/layer.js" type="text/javascript"></script>
<script src="/Mrbig/Public/Home/address/js/distpicker.data.js"></script>
<script src="/Mrbig/Public/Home/address/js/distpicker.js"></script>
<script src="/Mrbig/Public/Home/address/js/main.js"></script>
<script src="/Mrbig/Public/Home/js/jquery.form.js"></script>

<title>订单详情</title>
</head>


<link href="/Mrbig/Public/Home/Login/css/login.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Mrbig/Public/Home/layer/layer.js"></script>
<head>
        <div id="top">
            <div class="Inside_pages">
                <?php if($mrid > 0): ?><div class="Collection1">
                        <span>
                            Mr.Big欢迎您,<span style="font-size: 20px;color:red"><?php echo ($username); ?></span>
                            <a href="javascript:logout()">安全退出</a>
                        </span>
                    </div>
                    <?php else: ?>
                    <b><?php echo ($mrid); ?></b>
                    <div class="Collection2" >
                        <a href="javascript:login()" class="green">请登录</a>
                        <a href="<?php echo U('Home/Login/index');?>" class="green">免费注册</a>
                    </div><?php endif; ?>
                <div class="hd_top_manu clearfix" style="margin-top: -31px">
                    <ul class="clearfix">
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="javascript:user()">用户中心</a> </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="header"  class="header page_style" >
            <div class="logo"><a href="<?php echo U('Home/Index/index');?>"><img src="/Mrbig/Public/Home/images/logo.png" /></a></div>
            <!--&lt;!&ndash;结束图层&ndash;&gt;-->
            <div class="Search">
                <div class="search_list">
                    <ul>
                        <li class="current"><a href="#">产品</a></li>
                    </ul>
                </div>
                <form action="<?php echo U('Home/Search/search');?>" method="get" class="clear search_cur" id="search">
                    <input name="keywords" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
                    <input type="submit" value="搜 索"  class="Search_btn"/>
                </form>
            </div>
            <!--&lt;!&ndash;购物车样式&ndash;&gt;-->


        </div>
        <!--&lt;!&ndash;菜单栏&ndash;&gt;-->
        <div class="Navigation" id="Navigation">
            <ul class="Navigation_name">
                <li><a href="">首页</a></li>
                <li class="hour"><span class="bg_muen"></span><a href="">半小时生活圈</a></li>
                <li><a href="<?php echo u('Goods/goodsList',array('cid'=>1));?>">现代家具</a></li>
                <li><a href="<?php echo u('Goods/goodsList',array('cid'=>2));?>">布艺软饰</a><em class="hot_icon"></em></li>
                <li><a href="<?php echo u('Goods/goodsList',array('cid'=>3));?>">家纺</a></li>
                <li><a href="<?php echo u('Goods/goodsList',array('cid'=>16));?>">家用电器</a></li>
                <li><a href="<?php echo u('Goods/goodsList',array('cid'=>18));?>">数码产品</a></li>
            </ul>
        </div>
        <script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
    </div>
</head>
<script type="text/javascript">
    function login(){

        layer.open({
            type: 1,
            title:'登录',
            area: ['400px','700px'],
            shadeClose: true,
            content:$('#log')
        });
    }
    function logout(){
        layer.alert('hi');
        $.ajax({
            type:"post",
            url:"<?php echo u('Home/Login/logout');?>",
            success:function(data){
                alert(data.status);
                if(data.status=='ok'){
                    location.reload();
                }
            }
        })
    }
    function user(){
        $.post("<?php echo U('Home/User/user');?>",function(res){
            if(res.status=='no'){
                alert(res.msg);
            }else{
                location.href="<?php echo U('Home/User/user');?>";
            }
        })
    }
</script>



<div style="display: none" id="log">
<div class="container" style="border: 0;margin: 0">
        <div class="loginbox">
            <ul class="hd font18">
                <li class="w241 login cur" >账户登录&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="w241 register">免费注册</li>
            </ul>
            <div class="bd">
                <form id="login" method="post" action="" style="text-align: center">
                    <div  class="username tbox " style="text-align: center">
                        <label ></label>
                        <input type="text" class="logtext" value="Admin" name="username" onFocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;">
                    </div>
                    <div  class="pwd tbox" style="text-align: center">
                        <label ></label>
                        <input type="password" class="logtext" value="密码" name="password" onFocus="if (this.value==this.defaultValue) this.value='';" onblur="if (this.value=='') this.value=this.defaultValue;">
                    </div>
                    <input type="button" class="dl" value="登录" style="margin-top: 40px ">
                    <ul class="partner">
                        <li><a href=""><i class="pq"></i>QQ账号</a></li>
                        <li><a href=""><i class="px"></i>新浪微博</a></li>
                        <li><a href=""><i class="pw"></i>微信</a></li>
                        <li><a href=""><i class="pm"></i>蘑菇街</a></li>
                        <div class="clear"></div>
                    </ul>
                </form>
                <form id="register" action="" method="post">
                    <dl>
                        <dt for="username">用户名：</dt>
                        <dd><input type="text"  name="username" id="username"></dd>
                    </dl>
                    <dl class="">
                        <dt for="password">设置密码：</dt>
                        <dd><input type="password"  name="password" id="password"></dd>
                    </dl>
                    <dl class="">
                        <dt for="confirm_password">确认密码：</dt>
                        <dd><input type="password" value="" id="confirm_password" name="rePassword"></dd>
                    </dl>
                    <dl class="">
                        <dt for="email">邮箱：</dt>
                        <dd><input vtype="email" value="" id="email" name="email" ></dd>
                    </dl>
                    <dl class="">
                        <dt >验证码：</dt>
                        <dd><input type="text" value="" name="verify"></dd>
                        <dd>
                            <img src="<?php echo U('Home/Login/verify');?>" onclick="this.src='<?php echo u('Home/Login/verify',array('id'=>mt_rand()));?>'" style=" border:#cccbc8 solid 1px ; margin-top:10px; margin-left: 90px"></dd>
                    </dl>
                    <input type="submit" value="注册" class="zc">
                </form>
            </div>
        </div>
    </div>

</div>
<script src="/Mrbig/Public/Home/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript">
    //登录注册页面切换
    $(function(){
        $("#register").hide();
        $(".hd li").click(function(){
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".bd form").hide().eq($(this).index()).show();
        });
    });
    $('.dl').click(function(){
        $.ajax({
         type:"post",
         url:"<?php echo U('Home/Login/login');?>",
         data:$("#login").serialize(),
         success:function(data){
             if(data.status=='ok'){
             layer.alert(data.msg);
             location.href=window.location.href;
         }else{
             layer.alert(data.msg);
             location.href="<?php echo ($_SERVER['HTTP_REFERER']); ?>"
         }

         }
         })
    })
    $(function(){
        var validate=$("#register").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 2,
                    remote:{
                        url:'<?php echo U("Home/Login/chkUsername");?>',
                        type:'post'
                    }
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    debug:true,
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email:true
                },
                verify:{
                    required: true,
                    remote:{
                        url:'<?php echo U("Home/Login/chkVerify");?>',
                        type:'post'
                    }
                }
            },
            messages: {
                username: {
                    required: "请输入用户名",
                    minlength: "您的用户名必须包含至少2个字符",
                    remote: "用户名存在请重新添加"
                },
                password: {
                    required: "请输入密码",
                    minlength: "密码必须大于5个字符"
                },
                confirm_password: {
                    required: "请输入确认密码",
                    minlength: "密码必须大于5个字符",
                    equalTo: "两次输入的密码要一致"
                },
                email: "请输入正确的邮箱格式",
                verify: "请输入正确验证码"
            }
        });
        jQuery.validator.onfocus=true;
        $('.zc').click(function(){
            $("#register").submit(false);
            $.ajax({
                type:"post",
                url:"<?php echo u('register');?>",
                data:$("#register").serialize(),
                success:function(data){
                    layer.alert(data.msg);
                    //location.href="<?php echo U('login');?>"
                }
            })
        });

    });


</script>
</div>
<body>
<!--发货管理样式-->
<div class="Inside_pages clearfix">
<div class="left_style">
  <!--列表-->
</div>
<div class="right_style" style="width: 100%">
  <!--内容详细-->
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><div class="title_style"><em></em> 订单号:<?php echo ($res["oid"]); ?> &nbsp;&nbsp;下单时间:<?php echo ($res["time"]); ?>  </div>

        <table>
            <th >
                <td style="width: 20%">商品</td>
                <td  style="width: 15%">单价(元)</td>
                <td  style="width: 15%">数量</td>


                <td  style="width: 20%">操作</td>
            </th>

            <tr>
                <td>
                    <a href="#" class="product_img"><img src="/Mrbig/upload/n0/<?php echo (array_shift(explode(',',$res["pic"]))); ?>" width="80px" height="80px"></a>
                    <a href="3"><?php echo ($res["name"]); ?></a>
                </td>
                <td></td>
                <td><?php echo ($res["price"]); ?></td>
                <td><?php echo ($res["pnum"]); ?></td>
                <td></td>
            </tr>

        </table><?php endforeach; endif; else: echo "" ;endif; ?>
   <div class="content_style">
     <!--发货管理-->
     <div class="Delivery_style">
       <div class="hd">
        <ul>
         <li>发货地址</li>
        </ul>
       </div>
       <div class="bd">
        <ul>
          <div class="add_address_style">
             <table class="display_address">
             <thead>
              <tr class="label_name">

               <td class="label_2" width="60px">联系人</td>
               <td class="label_3" width="180px">所在地区</td>
               <td class="label_4" width="180px">街道地址</td>
               <td class="label_5" width="100px">邮政编码</td>

               <td class="label_7" width="100px">手机号码</td>
               <td class="label_8" width="100px">备注</td>
               </tr>
             </thead>
              
             <tbody>
             <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                  <td><?php echo ($vo["addname"]); ?></td>
                  <td><?php echo ($vo["address"]); ?></td>
                  <td><?php echo ($vo["town"]); ?></td>
                  <td><?php echo ($vo["yid"]); ?></td>
                  <td><?php echo ($vo["mobile"]); ?></td>
                  <td></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>

             </tbody>
             </table>
             <script type="text/javascript">
                 function del($id){
                     $.ajax({
                         url:"<?php echo U('Home/Address/del');?>",
                         type:'get',
                         data:{'id':$id},
                         success:function(res){
                             if(res.status=='ok'){
                                 layer.alert(res.msg);
                             }else{
                                 layer.alert(res.msg);
                             }
                         }
                     })
                 }
             </script>

          </div>
        </ul>

       </div>
     </div>
       <div>

       </div>
       <div>
           <ul>
               <li><div style="width: 150px;height: 50px;background-color: #A40000;font: bold 20px/1.5em '新宋体';text-align: center;line-height: 50px;margin-top: 20px" id="buy">提交订单</div></li>
           </ul>
       </div>
       <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><form action="<?php echo U('order');?>" method="post" id="form2" style="display: none;margin: 50px 40px;">
        <div style="line-height: 30px;">
         <h1 style="color: red">确认提交订单吗？</h1>
            <div style="font-size: 20px">
            <span>订单编号:</span><input type="text" value="<?php echo ($val["oid"]); ?>" name="oid" style="width: 250px">
            <span>下单时间:</span><input type="text" value="<?php echo ($val["time"]); ?>" name="time" style="width: 250px">
            </div>
            <table>
                <th >
                <td></td>
                <td style="width: 20%">商品</td>
                <td style="width: 15%">单价(元)</td>
                <td style="width: 15%">数量</td>

                </th>
                <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><tr>
                        <td><label><input name="pid[<?php echo ($res["id"]); ?>]" type="checkbox"  value="<?php echo ($res["payNum"]); ?>"  checked="checked" /></label></td>
                        <td>
                            <a href="#" class="product_img"><img src="/Mrbig/upload/n0/<?php echo (array_shift(explode(',',$res["pic"]))); ?>" width="80px" height="80px"></a>
                            <a href="3"><?php echo ($res["name"]); ?></a>
                        </td>
                        <td></td>
                        <td><?php echo ($val["price"]); ?></td>
                        <td><?php echo ($val["pnum"]); ?></td>

                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                <div style="text-align: center;line-height: 50px;">
                    <tr class="label_name">
                        <td class="label_1" width="60px">地址</td>
                        <td class="label_2" width="60px">联系人</td>
                        <td class="label_3" width="180px">所在地区</td>
                        <td class="label_4" width="180px">街道地址</td>
                        <td class="label_5" width="100px">邮政编码</td>
                        <td class="label_7" width="100px">手机号码</td>
                        <td class="label_8" width="100px">备注</td>

                    </tr>
                    <tbody>


                        <tr>
                            <td><label><input name="aid" type="radio" checked="checked" value="<?php echo ($vo["id"]); ?>"  /></label></td>
                            <td><?php echo ($val["addname"]); ?></td>
                            <td><?php echo ($val["address"]); ?></td>
                            <td><?php echo ($val["town"]); ?></td>
                            <td><?php echo ($val["yid"]); ?></td>
                            <td><?php echo ($val["mobile"]); ?></td>
                            <td></td>
                        </tr>

                </div>
                    </tbody>

            </table>
            <h1 style="color: red"><重要提醒></重要提醒>:请选择收货地址(如果没有请选择添加)</h1>
            <span style="font-size: 25px">总价:￥<input type="text" name="count" value="<?php echo ($val["pmoney"]); ?>" style="width: 200px"/> </span>
            <span style="font-size: 25px">选择快递</span>
            <select name="wlname" style="width: 160px;height: 40px;font-size: 20px">
                <option value="中通快递" selected="selected">中通快递</option>
                <option value="圆通快递" selected="selected">圆通快递</option>
                <option value="顺丰快递" selected="selected">顺丰快递</option>
                <option value="申通快递" selected="selected">申通快递</option>
            </select>
        <br/>
        <input type="submit" value="提交订单" style="width: 100px;height: 40px;font-size: 20px" id="button"/>
        </div>
        <script type="text/javascript">
        </script>
    </form><?php endforeach; endif; else: echo "" ;endif; ?>
     <script type="text/javascript">
         jQuery(".Delivery_style").slide({trigger:"click"});
         $('#newAddress').click(function(){
             layer.open({
                 type: 1,
                 title:'增加地址',
                 area: ['500px','500px'],
                 shadeClose: true,
                 content: $('#form1')
             });
         })
         $('#bc').click(function(){
             $.ajax({
                 url:"<?php echo U('Address/address');?>",
                 data:$('#form1').serialize(),
                 type:'get',
                 success:function(res){
                     if(res.status=='ok'){
                         layer.alert(res.msg);
                     }else{
                         layer.alert(res.msg);
                     }
                 }
             })
         })
         $('#button').click(function(){
             $("#form2").submit(false);
             $.post("<?php echo U('order');?>",$('#form2').serialize(),function(res){
                 if(res.status=='re'){
                     layer.alert(res.msg);
                 }else{
                     //$.post("<?php echo U('order');?>",$('#form2').serialize());
                     //$('#button').type='submit';
                 }
             })
         })
         $('#buy').click(function(){
             layer.open({
                 type: 1,
                 title:'提交订单',
                 area: ['1200px','900px'],
                 shadeClose: true,
                 content: $('#form2')
             })

         })


     </script>

   </div>
  </div>

</div>
</div>
<!--网站地图-->
<div class="fri-link-bg clearfix" style="width: 100%">
    <div class="fri-link">
        <div class="logo left margin-r20"><img src="/Mrbig/Public/Home/images/fo-logo.jpg" width="152" height="81" /></div>
        <div class="left"><img src="/Mrbig/Public/Home/images/qd.jpg" width="90"  height="90" />
            <p>扫描下载APP</p>
        </div>
    <div class="">
    <dl>
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
	</dl>
     <dl>
	 <dt>帮助中心</dt>
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
	</dl>	   
   </div>
    </div>
</div>
<!--网站地图END-->
<!--网站页脚-->
<div class="copyright">
    <div class="copyright-bg">
        <div class="hotline">为生活充电在线 <span>招商热线：****-********</span> 客服热线：400-******</div>
        <div class="hotline co-ph">
            <p>版权所有Copyright ©***************</p>
            <p>*ICP备***************号 不良信息举报</p>
            <p>总机电话：****-*********/194/195/196 客服电话：4000****** 传 真：********
                
                E-mail:****@****.gov.cn</p>
        </div>
    </div>
</div>





</body>
<script type="text/javascript">
    function old(){
        layer.open({

        })
    }
    function logout(){
        $.ajax({
            type:"post",
            url:"<?php echo u('Home/Login/logout');?>",
            data:'',
            success:function(data){
                alert(data.status);
                if(data.status=='ok'){
                    location.reload();
                }
            }
        })

    }
    function user(){
        $.post("<?php echo U('Home/User/user');?>",function(res){
            if(res.status=='no'){
                layer.alert(res.msg);
            }else{
                location.href="<?php echo U('Home/User/user');?>";
            }
        })
    }
</script>
</html>