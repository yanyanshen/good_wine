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
<!--新增加-->
<script type="text/javascript" src="/Public/Admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="/Public/Admin/js/layer/layer.js"></script>
<!--新增加结束-->
<!--<script type="text/javascript" src="editor/kindeditor.js"></script>-->


  
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
    <script type="text/javascript">
        $(function(){
            $("#addBtn").click(function(){
                $.post("<?php echo U('Admin/Admin/addlist');?>",$("#form1").serialize(),function(res){
                    if(res.status=="ok"){
                        layer.confirm(res.msg,{icon:1,title:"提示",btn:['好的','算了']},function(){
                            //好的
                            window.location.href="<?php echo U('Admin/Admin/addlist');?>";
                        },function(){
                            //算了
                            window.location.href="<?php echo U('Admin/Admin/showlist');?>";
                        });
                    }else{
                        layer.confirm(res.msg,{icon:2,title:"提示",btn:['好的','算了']},function(){
                            //好的
                            window.location.href="<?php echo U('Admin/Admin/addlist');?>";
                        },function(){
                            //算了
                            window.location.href="<?php echo U('Admin/Admin/showlist');?>";
                        });
                    }
                })
            })
        })
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
 
    <form action="<?php echo U('Admin/Admin/addlist');?>" method="post" id="form1">
    <ul class="forminfo">
        <li>
            <label for="<?php echo ($val['title']); ?>">所属角色<b>*</b></label>
            <?php if(is_array($groupList)): $i = 0; $__LIST__ = $groupList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><label for="<?php echo ($val['title']); ?>" style="width: 70px"><?php echo ($val['title']); ?></label>
            <span style="float:left;margin-right: 25px;">
                <input name="group_id[]" id="<?php echo ($val['title']); ?>" value="<?php echo ($val['id']); ?>" type="checkbox" class="dfinput" style="width:18px;"/>
            </span><?php endforeach; endif; else: echo "" ;endif; ?>
        </li>
    <li><label>管理员账号<b>*</b></label><input name="adminname" type="text" class="dfinput" placeholder="请填写账号"  style="width:200px;"/></li>
    <li><label>性别<b>*</b></label>
        <div class="vocation">
            <select name="gender" class="select2">
                <option selected value="0">男</option>
                <option value="1">女</option>
                <option value="2">保密</option>
            </select>
        </div>
    </li>
    <li><label>管理员密码<b>*</b></label><input name="password" type="password" class="dfinput" placeholder="请填写密码"  style="width:200px;"/></li>
    <li><label>确认密码<b>*</b></label><input name="repassword" type="password" class="dfinput" placeholder="请填写确认密码"  style="width:200px;"/></li>
   <!-- <li><label>职位名称<b>*</b></label>
    <div class="vocation">
    <select class="select1">
    <option>UI设计师</option>
    <option>交互设计师</option>
    <option>前端设计师</option>
    <option>网页设计师</option>
    <option>Flash动画</option>
    <option>视觉设计师</option>
    <option>插画设计师</option>
    <option>美工</option>
    <option>其他</option>
    </select>
    </div>
    </li>-->

    <li><label>&nbsp;</label><input id="addBtn"  type="button" class="btn" value="添加管理员"/></li>
    </ul>
    </form>
    </div> 
    
    
  	
       
	</div> 
 
	
    
    
    
    
    
    </div>


</body>

</html>