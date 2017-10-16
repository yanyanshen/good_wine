<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/style.css"/>
      <script src="/Public/Mobile/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/Public/Mobile/js/layer_mobile/layer.js" type="text/javascript"></script>
    <script type="text/javascript">
    	$(window).load(function(){
    		$(".loading").addClass("loader-chanage")
    		$(".loading").fadeOut(300)
    	})
    </script>
</head>
<!--loading页开始-->
<div class="loading">
	<div class="loader">
        <div class="loader-inner pacman">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
	</div>
</div>
<!--loading页结束-->
<body>
	<!--<header class="self-header">
		<figure><img src="/Public/Mobile/images/self-tou.png"/></figure>
		<dl>
			<dt>瑾晨</dt>
			<dd>
				<img src="/Public/Mobile/images/self-header.png"/>
				<span>5684</span>
				<span>炒饭大湿</span>
			</dd>
		</dl>
		<button>签到</button>
	</header>-->

	<div class="p-top  clearfloat">
		<?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><a href="#">
			<div class="tu">
				<?php if($v['pic'] == 0): ?><img  src="/Public/Home/images/people.png"/>
					<?php else: ?>
					<img  src="/Public/Admin/Uploads/member/thumb100/100_<?php echo ($v['pic']); ?>" style="width: 100%;height: 100px"/><?php endif; ?>
			</div>
			<p class="name"><?php echo ($v['username']); ?></p>
		</a><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="p-bottom p-bottom1 clearfloat">
			<ul class="clearfloat">
				<a href="fx-center1.html">
					<li class="box-s">
						<span class="opa6"></span>
						<p class="bt">我的佣金</p>
						<p class="price"><?php echo ($v['money']); ?></p>
					</li>
				</a>
				<a href="#">
					<li class="box-s">
						<span class="opa6"></span>
						<p class="bt">我的积分</p>
						<p class="price"><?php echo ($v['credit']); ?></p>
					</li>
				</a>
				<a href="#">
					<li class="box-s">
						<span class="opa6"></span>
						<p class="bt">我的花费</p>
						<p class="price"><?php echo ($v['costs']); ?></p>
					</li>
				</a>
			</ul>
		</div>
	</div>
	
	<div class="contaniner fixed-contb">
		<section class="self">
			<dl>
				<dt>
					<a href="<?php echo U('Personal/order');?>">
						<img src="/Public/Mobile/images/self-icon.png"/>
						<b>我的订单(<?php echo ($orderNum["suoyou"]); ?>)</b>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</dt>
                <dt>
                    <a href="<?php echo U('Personal/order',array('order_status'=>5));?>">
                        <img src="/Public/Mobile/images/self-icon.png"/>
                        <b>已完成订单(<?php echo ($orderNum["ywc"]); ?>)</b>
                        <span><img src="/Public/Mobile/images/right.png"/></span>
                    </a>
                </dt>
				<dd>
						<ul>
                            <li>
                                <a href="<?php echo U('Personal/order',array('order_status'=>1));?>">
                                    <img src="/Public/Mobile/images/order-icon03.png"/>
                                    <p>待付款(<?php echo ($orderNum["dfk"]); ?>)</p>
                                </a>
                            </li>
							<li>
								<a href="<?php echo U('Personal/order',array('order_status'=>2));?>">
									<img src="/Public/Mobile/images/order-icon01.png"/>
									<p>待发货(<?php echo ($orderNum["dfh"]); ?>)</p>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Personal/order',array('order_status'=>3));?>">
									<img src="/Public/Mobile/images/order-icon02.png"/>
									<p>待收货(<?php echo ($orderNum["dsh"]); ?>)</p>
								</a>
							</li>
							<li>
								<a href="<?php echo U('Personal/order',array('order_status'=>4));?>">
									<img src="/Public/Mobile/images/order-icon04.png"/>
									<p>待评价(<?php echo ($orderNum["dpj"]); ?>)</p>
								</a>
							</li>
						</ul>
				</dd>
			</dl>
			
			<ul class="self-icon">
				<li>
					<a href="<?php echo U('Personal/myData');?>">
						<img src="/Public/Mobile/images/self-icon01.png"/>
						<p>个人信息</p>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Personal/mycollect');?>">
						<img src="/Public/Mobile/images/self-icon02.png"/>
						<p>我的收藏</p>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</li>
				<!--<li>
					<a href="<?php echo U('Personal/balance');?>">
						<img src="/Public/Mobile/images/self-icon012.png"/>
						<p>消费记录</p>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</li>-->
				<li>
					<a href="<?php echo U('Personal/address');?>">
						<img src="/Public/Mobile/images/self-icon04.png"/>
						<p>地址管理</p>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</li>
			</ul>
			<ul class="self-icon">
				<li>
					<a href="<?php echo U('Personal/foot');?>">
						<img src="/Public/Mobile/images/self-icon05.png"/>
						<p>我的足迹</p>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Personal/changePwd');?>">
						<img src="/Public/Mobile/images/self-icon011.png"/>
						<p>修改密码</p>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</li>
				<li>
					<a href="<?php echo U('Personal/accountAdd');?>">
						<img src="/Public/Mobile/images/self-icon013.png"/>
						<p>账号管理</p>
						<span><img src="/Public/Mobile/images/right.png"/></span>
					</a>
				</li>
                <li>
                    <a href="<?php echo U('Personal/editPayPwd');?>">
                        <img src="/Public/Mobile/images/self-icon011.png"/>
                        <p>设置支付密码</p>
                        <span><img src="/Public/Mobile/images/right.png"/></span>
                    </a>
                </li>
			</ul>
			<a href="javascript:logout()"><input type="button" value="退出" /></a>
			
		</section>
		
		
	</div>
	
	<footer class="page-footer fixed-footer">
		<ul>
			<li>
				<a href="<?php echo U('Mobile/Index/index');?>">
					<img src="/Public/Mobile/images/footer001.png"/>
					<p>首页</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('Mobile/Category/cateList');?>">
					<img src="/Public/Mobile/images/footer002.png"/>
					<p>分类</p>
				</a>
			</li>
			<li>
				<a href="<?php echo U('Mobile/Cart/cartList');?>">
					<img src="/Public/Mobile/images/footer003.png"/>
					<p>购物车</p>
				</a>
			</li>
			<li class="active">
				<a href="<?php echo U('Mobile/Personal/personalList');?>">
					<img src="/Public/Mobile/images/footer04.png"/>
					<p>个人中心</p>
				</a>
			</li>
		</ul>
	</footer>
</body>
<script>
    function logout(){
        layer.open({
            content: '您确定要退出吗？'
            ,btn: ['确定', '不要']
            ,yes: function(index){
                $.get("<?php echo U('Personal/logout');?>",function(res){
                    if(res.status=="ok"){
                        //信息框
                        layer.open({
                            content:res.msg
                            ,btn: '我知道了'
                            ,yes:function(index){
                                location.href="<?php echo U('Index/index');?>"
                                layer.close(index);
                            }
                        });
                    }else{
                        //信息框
                        layer.open({
                            content:res.msg
                            ,btn: '我知道了'
                        });
                    }
                })
                layer.close(index);
            }
        });
    }
</script>
</html>