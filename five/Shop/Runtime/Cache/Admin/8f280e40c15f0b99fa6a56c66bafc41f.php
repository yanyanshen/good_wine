<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/select.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>-->
    <script type="text/javascript" src="/Public/Admin/js/jQuery-1.8.2.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/select-ui.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/layer/layer.js"></script>
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
  	<div id="tab1" class="tabson">
        <form action="<?php echo U('Article/addlist');?>" method="post" id="form1">
            <ul class="forminfo">
            <li><label>文档标题<b>*</b></label><input name="title" type="text" class="dfinput" placeholder="请填写文档标题"  style="width:200px;"/></li>
            <li><label>文档作者<b>*</b></label><input name="author" type="text" class="dfinput" placeholder="请填写作者名称"  style="width:200px;"/></li>
            <li><label>文档分类<b>*</b></label><input name="cate" type="text" class="dfinput" placeholder="请填写文档分类"  style="width:200px;"/></li>
            <li><label>文档内容<b>*</b></label><textarea name="content" rows="10" cols="50" style="border: 1px solid lightblue"></textarea></li>
            <li><label>&nbsp;</label><input name="" type="button" class="btn" value="发布"/></li>
            </ul>
        </form>
    </div>
	</div>
    </div>
</body>
<script>
    $(function(){
        $(".btn").click(function(){
            $.post("<?php echo U('Article/addlist');?>",$("#form1").serialize(),function(res){
                if(res.status==1){
                    layer.confirm(res.msg,{icon:1,btn:["继续","算了"]},function(){
                        window.location.href="<?php echo U('Article/addlist');?>";
                    },function(){
                        window.location.href="<?php echo U('Article/showlist');?>";
                    })
                }else {
                    layer.msg(res.msg,{icon:2})
                }
            },'json');
        })
    })
</script>
</html>