<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>search</title>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loaders.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Mobile/css/style.css"/>
    <!--<script src="/Public/Mobile/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>-->
    <script src="/Public/Mobile/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    	$(window).load(function(){
    		$(".loading").addClass("loader-chanage")
    		$(".loading").fadeOut(300)
    	})
    </script>
    <style type="text/css">
        .contaniner .list .wall{position: relative; display: block; width: 100%; overflow: hidden; z-index: 0;}
        .contaniner .list .wall .pic{ width:46%;margin: 2%; margin-bottom: 1%; float: left; background-color: #fff; padding-bottom: 3%;}

        .contaniner .list .wall .pic a{ width: 100%; display: block;}
        .contaniner .list .wall .pic img{ width: 100%;}
        .contaniner .list .wall .pic p{ font-size: 1.45em; width: 90%; margin: 2% 5%; text-align: justify; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color: #333;}
        .contaniner .list .wall .pic b{ color: #FC605A; font-size: 1.7em; font-weight: normal; margin-right: 4%; margin-left: 4%; }
        .contaniner .list .wall .pic del{ color: #999; font-size: 1.169em; }
    </style>
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
	<header class="top-header fixed-header">
		<a class="icona" href="javascript:history.go(-1)">
				<img src="/Public/Mobile/images/left.png"/>
			</a>
		<h3>搜索</h3>
			<a class="iconb" href="shopcar.html">
				<img src="/Public/Mobile/images/shopbar.png"/>
			</a>
	</header>
	
	<div class="contaniner fixed-conta">
		<section class="list">
			<figure><img src="/Public/Mobile/images/list-ban01.png"/></figure>
                <div class="search">
                    <input type="text" id="search" value="<?php echo ($search); ?>" placeholder="甜品零食" />
                    <a href="javascript:void(0);" id="searchsubmit"><label><img src="/Public/Mobile/images/list-search.png"/></label></a>
                </div>
			<ul class="wall" id="goodsDisplay">
                <?php if(is_array($goodslist)): $i = 0; $__LIST__ = $goodslist;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$val1): $mod = ($i % 2 );++$i;?><li class="pic">
                        <a href="detail.html">
                            <!--<img src="/Public/Admin/Uploads/goods/<?php echo ($val1["pic"]); ?>"/>-->
                            <img src="/Public/Admin/Uploads/goods/<?php echo ($val1["pic"]); ?>"/>
                            <p><?php echo ($val1["goodsname"]); ?></p>
                            <b>￥<?php echo ($val1["price"]); ?></b><del>￥<?php echo ($val1["marketprice"]); ?></del>
                        </a>
                    </li><?php endforeach; endif; else: echo "$empty" ;endif; ?>
			</ul>
		</section>
	</div>
</body>
</html>
<script type="text/javascript">
    $(function(){
        $("#searchsubmit").click(function(){
            var words=$('#search').val();
            $.post("<?php echo U('Mobile/ProductList/searchList');?>",{'search':words},function(res) {
                if(res.status=='error'){
                    $('#goodsDisplay').html('<span style="color: #c2ccd1;font-size: 32px;margin:0 auto;">没有数据^^</span>');
                }else {
                    var str = "";
                    for (var i in res) {
                        str += '<li class="pic">';
                        str += '<a href="detail.html">';
                        str += '<img src="/Public/Admin/Uploads/goods/' + res[i]['pic'] + '"/>';
                        str += '<p>' + res[i]['goodsname'] + '</p>';
                        str += '<b>￥' + res[i]['price'] + '</b>';
                        str += '<del>￥' + res[i]['marketprice'] + '</del>';
                        str += '</a></li>';
                    }
                    $('#goodsDisplay').html(str);
                }
            },'json')


        })
    })
</script>