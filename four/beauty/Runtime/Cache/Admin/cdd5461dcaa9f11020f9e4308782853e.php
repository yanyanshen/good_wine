<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Admin/js/jquery.min.1.8.2.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/select-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/editor/kindeditor.js"></script>
<script type="text/javascript" src="/Public/Admin/js/layer/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.form.js"></script>
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
    <script>
        $(function(){
            $('.btn').click(function(){
                $('#form').ajaxSubmit(function(res){
                    if(res.status==1){
                        layer.msg('广告编辑成功',function(){
                            location="<?php echo U('Advertise/index');?>";
                        });
                    }else{
                        layer.msg('广告编辑失败',function(){
                            location="<?php echo U('Advertise/index');?>";
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
    <li><a href="#">广告管理</a></li>
    <li><a href="#">广告编辑</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    <div id="usual1" class="usual"> 
  	<div id="tab1" class="tabson">
 
    <form action="<?php echo U('Advertise/editChange');?>" method="post" enctype="multipart/form-data" id="form">
    <ul class="forminfo">
        <li style="display: none"><label>广告编号<b>*</b></label><input name="id" value="<?php echo ($id); ?>" type="text" /></li>
    <li><label>广告标题<b>*</b></label><input name="title" value="<?php echo ($title); ?>" type="text" class="dfinput" placeholder="请填写广告标题"  /></li>
   
    <li><label>广告位置<b>*</b></label>
    

    <div class="vocation">
       <?php switch($position): case "1": ?><select name="position" class="select1">
                   <option value="1">轮播广告</option>
                   <option value="2">一楼广告</option>
                   <option value="3">二楼广告</option>
                   <option value="4">三楼广告</option>
                   <option value="5">手机广告</option>
                   <option value="6">其他广告</option>
               </select><?php break;?>
           <?php case "2": ?><select name="position" class="select1">
                   <option value="2">一楼广告</option>
                   <option value="1">轮播广告</option>
                   <option value="3">二楼广告</option>
                   <option value="4">三楼广告</option>
                   <option value="5">手机广告</option>
                   <option value="6">其他广告</option>
               </select><?php break;?>
           <?php case "3": ?><select name="position" class="select1">
                   <option value="3">二楼广告</option>
                   <option value="1">轮播广告</option>
                   <option value="2">一楼广告</option>
                   <option value="4">三楼广告</option>
                   <option value="5">手机广告</option>
                   <option value="6">其他广告</option>
               </select><?php break;?>
           <?php case "4": ?><select name="position" class="select1">
                   <option value="4">三楼广告</option>
                   <option value="1">轮播广告</option>
                   <option value="2">一楼广告</option>
                   <option value="3">二楼广告</option>
                   <option value="5">手机广告</option>
                   <option value="6">其他广告</option>
               </select><?php break;?>
           <?php case "5": ?><select name="position" class="select1">
                   <option value="5">手机广告</option>
                   <option value="1">轮播广告</option>
                   <option value="2">一楼广告</option>
                   <option value="3">二楼广告</option>
                   <option value="4">三楼广告</option>
                   <option value="6">其他广告</option>
               </select><?php break;?>
           <?php case "6": ?><select name="position" class="select1">
                   <option value="6">其他广告</option>
                   <option value="1">轮播广告</option>
                   <option value="2">一楼广告</option>
                   <option value="3">二楼广告</option>
                   <option value="4">三楼广告</option>
                   <option value="5">手机广告</option>
               </select><?php break; endswitch;?>


    </div>
    
    </li>
    
    <!--<li ><label style="margin-top:20px;margin-bottom: 20px">广告图片<b>*</b></label>
        <input name="pic" type="file" style="width:345px;margin-top:30px;margin-bottom: 30px"/>
    </li>-->
        <li style="margin-top: 80px;margin-bottom: 500px">
            <label>广告图片<b>*</b></label>
            <div class="usercity" style="border:3px dashed #e6e6e6;width:500px;height:300px;position: relative">
                <p id="preview0" ><img width="300" id="imghead0"  border=0 src='/Uploads/Advertises/<?php echo ($picurl); echo ($picname); ?>'></p><span></span>
                <input type="file" id="image0" name="pic" onchange="previewImage(this,'preview0','imghead0',300,300)" style="display:none;" >
                <label for="image0"  style="margin:0;top:0;position:absolute;background:rgba(0,0,0,0.4);color:#fff;font-size:12px;text-align:center;border-radius:4px;width:60px;height:20px;line-height:20px;padding:3px 3px;cursor:pointer;box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);">修改图片</label>
            </div>
        </li>
    <li><label>广告描述<b>*</b></label>
    

<!--
    <textarea id="content7" name="content" style="width:700px;height:250px;visibility:hidden;"></textarea>
-->
    <textarea name="content" style="width:500px;height:200px;border: 1px solid #716f64;font-size: 16px"><?php echo ($detail); ?></textarea>
    </li>
    <li><label>&nbsp;</label><input type="button" class="btn"  value="确定修改"/></li>
    </ul>
    </form>
    </div>
	</div>
    </div>


</body>
<script>
    //图片上传预览    IE是用了滤镜。
    function previewImage(file,pre,imag,width,height)
    {
        var MAXWIDTH  = width;
        var MAXHEIGHT = height;
        var div = document.getElementById(pre);
        if( !file.value.match( /.jpg|.gif|.png|.bmp/i ) ){
            //$(this).prev('span').text('图片格式无效！');
            $('#'+pre).next('span').css({"color":"red","font-weight":"bold"}).text('图片类型无效！');
            return false;
        }else{
            $('#'+pre).next('span').css({"color":"green","font-weight":"bold"}).text('');
        }
        if (file.files && file.files[0])
        {
            div.innerHTML ='<img id='+imag+'>';
            var img = document.getElementById(imag);
            img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
            }
            var reader = new FileReader();
            reader.onload = function(evt){img.src = evt.target.result;}
            reader.readAsDataURL(file.files[0]);
        }
        else //兼容IE
        {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            file.blur();
            var src = document.selection.createRange().text;
            div.innerHTML ='<img id='+imag+'>';
            var img = document.getElementById(imag);
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
        }

        $(file).next('label').css({margin:0,top:0,position:'absolute',background:'rgba(0,0,0,0.5)',color:'#fff'}).html('重新选择');
        // $(file).parent().append('<span class="update()" style="margin:0;top:30px;position:absolute;background:rgba(0,0,0,0.9);color:#ff0;text-align:center;border-radius:4px;width:60px;height:20px;line-height:20px;padding:3px 3px;cursor:pointer;box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);">确定更新</span>');
    }
    function clacImgZoomParam( maxWidth, maxHeight, width, height ){
        var param = {top:0, left:0, width:width, height:height};
        if( width>maxWidth || height>maxHeight )
        {
            rateWidth = width / maxWidth;
            rateHeight = height / maxHeight;

            if( rateWidth > rateHeight )
            {
                param.width =  maxWidth;
                param.height = Math.round(height / rateWidth);
            }else
            {
                param.width = Math.round(width / rateHeight);
                param.height = maxHeight;
            }
        }

        param.left = Math.round((maxWidth - param.width) / 2);
        param.top = Math.round((maxHeight - param.height) / 2);
        return param;
    }
</script>


</html>