<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>列表页</title>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/select.css" rel="stylesheet" type="text/css" />
    <!--<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>-->
    <script type="text/javascript" src="/Public/Admin/js/jQuery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/select-ui.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/layer/layer.js"></script>
    <!--对layer.open弹层很重要-->
    <style type="text/css">
        body .demo-class .layui-layer-title{background:#ccc; color:gray; border: none;}
        body .demo-class .layui-layer-content{background:#ccc; color:white; border: none;}

        div.pagin{height:30px;float: right}
        div.pagin span{height: 30px;text-align: center;background-color:gray;line-height: 30px;width: 30px;display: inline-block}
        div.pagin a{height: 30px;text-align: center;background-color:orange;line-height: 30px;width: 30px;display: inline-block}
    </style>
    <!--对layer.open弹层很重要-->
<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
</head>
<body>
	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">系统设置</a></li>
    </ul>
    </div>
    <div class="formbody">
    <div id="usual1" class="usual">
  	<div id="tab2" class="tabson">
    <form action="<?php echo U('NewsComment/comment');?>" method="post" id="myform">
    <ul class="seachform">
    <li><label>综合查询</label><input name="keywords" type="text" class="scinput" /></li>
    <li><label>&nbsp;</label><input name="" type="submit" class="scbtn" value="查询"/></li>
    </ul>
    </form>
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号<i class="sort"><img src="/Public/Admin/images/px.gif" /></i></th>
        <th>用户名</th>
        <th>新闻标题</th>
        <th>是否回复</th>
        <th>评论时间</th>
        <th>是否显示</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($k % 2 );++$k;?><tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td><?php echo ($k+$firstRow); ?></td>
        <td><?php echo ($val['member_name']); ?></td>
        <td><?php echo ($val['title']); ?></td>
            <?php if($val['isreply'] == 1): ?><td>已回复</td>
                <?php else: ?>
                <td>未回复</td><?php endif; ?>
        <td><?php echo date("Y-m-d H:i:s",$val['addtime']);?></td>
            <?php if($val['isshow'] == 1): ?><td>显示</td>
                <?php else: ?>
                <td>隐藏</td><?php endif; ?>
        <td>
            <a href="<?php echo U('NewsComment/commentDetail',array('id'=>$val['id']));?>" class="tablelink">查看详情</a>
            <!--<a href="javascript:commentDetail(<?php echo ($val['id']); ?>)" class="tablelink">查看详情</a>-->
            <?php if($val['isreply'] == 0): ?><a href="javascript:reply(<?php echo ($val['id']); ?>)" class="tablelink">回复</a><?php endif; ?>
            <a href="javascript:commentDel(<?php echo ($val['id']); ?>)" class="tablelink"> 删除</a>
            <?php if($val['isshow'] == 1): ?><a href="javascript:commentHide(<?php echo ($val['id']); ?>)" class="tablelink">隐藏</a>
                <?php else: ?>
                <a href="javascript:commentShow(<?php echo ($val['id']); ?>)" class="tablelink">显示</a><?php endif; ?>
        </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

       <div class="pagin">
        <!--<div class="message">共<i class="blue">1256</i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>-->
       <?php echo ($page); ?>
       </div>
    </div>
	</div>
	<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
    </div>
</body>
<script type="text/javascript">
    //回复
    function reply(cid){
        layer.open({
            type:2,
           title:"回复",
            skin:'demo-class',
            area:["400px","35%"],
            shadeClose: true,
            shade: 0.8,
            content:"<?php echo U('replyNews');?>?id="+cid
        })
    }
    //评论删除
    function commentDel(cid){
        layer.confirm("你确定要删除我吗？",{icon:3,title:'提示',btn:['确定','取消']},function(){
            $.get("<?php echo U('NewsComment/commentDel');?>","id="+cid,function(res){
                if(res.status=='ok'){
                    layer.msg(res.msg,{icon:1,time:1000},function(){
                        window.location.href="<?php echo U('NewsComment/comment');?>";
                    })
                }else {layer.msg(res.msg,{icon:2,time:1000})}
            },'json')
        });
    }
    //评论显示
    function commentShow(cid){
        $.get("<?php echo U('NewsComment/commentShow');?>","id="+cid,function(res){
            if(res.status=='ok'){
                layer.msg(res.msg,{icon:1,time:1000},function(){
                    window.location.href="<?php echo U('NewsComment/comment');?>";
                })
            }else {layer.msg(res.msg,{icon:2,time:1000})}
        },'json')
    }
    //评论隐藏
    function commentHide(cid){
            $.get("<?php echo U('NewsComment/commentHide');?>","id="+cid,function(res){
                if(res.status=='ok'){
                    layer.msg(res.msg,{icon:1,time:1000},function(){
                        window.location.href="<?php echo U('NewsComment/comment');?>";
                    })
                }else {layer.msg(res.msg,{icon:2,time:1000})}
            },'json')
    }
</script>
</html>