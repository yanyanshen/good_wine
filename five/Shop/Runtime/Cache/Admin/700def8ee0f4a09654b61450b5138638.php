<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        #btn{width:70px;height: 35px;font-size: 20px;font-weight: bolder;font-family: '微软雅黑';border-radius: 10px;background: #2b2b2d;color: #fff;}
        #btn:hover{background: #80808f;}
    </style>
    <script type="text/javascript" src="/Public/Admin/js/jQuery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/layer/layer.js"></script>
</head>
<body>
<form action="<?php echo U('GoodsComment/answer');?>" method="post" id="form1">
    <input name="id" type="hidden" value="<?php echo ($id); ?>"/>
    <textarea cols="45" rows="13" name="replycontent"></textarea>
    <input type="button" id="btn" value="提交">
</form>
</body>
<script>
    $(function(){
        $("#btn").click(function(){
            $.post("<?php echo U('GoodsComment/answer');?>",$("#form1").serialize(),function(res){ //将form1中数据提交到后台
                if(res.status=="ok"){
                    layer.msg(res.msg,{icon:1,time:1000},function(){
                        parent.location.href="<?php echo U('GoodsComment/comment');?>";
                    })
                }else {
                    layer.msg(res.msg,{icon:2,time:1000});
                }
            })
        })
    })
</script>
</html>