<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>信息回复</title>
    <style type="text/css">
        textarea{
            border: 2px solid gray;
        }
        input{
            height: 40px;
            width: 60px;
            background-color:#999;
            color: white;
            cursor: pointer;
            margin-top: 10px;;
        }
    </style>
    <script type="text/javascript" src="/Public/Admin/js/jQuery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/layer/layer.js"></script>
</head>
<body>
<form action="<?php echo U('NewsComment/replyNews');?>" method="post" id="form1">
    <input name="id" type="hidden" value="<?php echo ($id); ?>">
    <textarea rows="10" cols="50" name="replycontent"></textarea>
    <input id="btn" type="button" value="确定">
</form>
</body>
<script>
   $(function(){
       $("#btn").click(function(){
           $.post("<?php echo U('NewsComment/replyNews');?>",$("#form1").serialize(),function(res){
               if(res.status=="ok"){
                   layer.msg(res.msg,{icon:1,time:1000},function(){
                       parent.location.href="<?php echo U('NewsComment/comment');?>";
                   })
               }else {
                   layer.msg(res.msg,{icon:2,time:1000});
               }
           })
       })
   })
</script>
</html>