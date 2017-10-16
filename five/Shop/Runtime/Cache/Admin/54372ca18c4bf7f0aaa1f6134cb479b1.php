<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Admin/css/select.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/jQuery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/select-ui.min.js"></script>
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


    <!--单选框  -->
    <style type="text/css">
        .imagBox{width:180px;height: 130px;border: 1px #8c8c8c solid ;margin-left: 85px }
        .imgsml{width:160px; height:110px;margin: 10px;border: 1px #8c8c8c solid;}
    </style>




</head>

<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">广告管理</a></li>
    </ul>
</div>
<div class="formbody">
    <div id="usual1" class="usual">
        <div id="tab1" class="tabson">
            <ul class="forminfo">
                <form id="myForm" action="<?php echo U('Admin/Ads/edictlist');?>" method="post"  enctype="multipart/form-data">
                     <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($k % 2 );++$k;?><li><input value="<?php echo ($val["id"]); ?>" name="id" type="hidden" class="dfinput"  style="width:150px;" /></li>
                        <li><label>广告标题<b>*</b></label><input value="<?php echo ($val["adname"]); ?>" name="adname" type="text" class="dfinput" placeholder="请填写广告标题"  style="width:350px;"/></li>
                        <li>
                            <label>广告图片<b>*</b></label>
                            <div class="imagBox ">
                                <div class="imgsml">
                                    <img id="img0"  src="/Public/Admin/Uploads/ads/<?php echo ($val["adlogo"]); ?>" alt="" width="150px" height="100px"/>
                                </div>
                            </div>
                            <input id="file0" style="margin-left: 85px;margin-top: 10px;  " type="file" name="pic"/>
                        </li>
                        <li><label>广告位置<b>*</b></label>
                            <div class="vocation">
                                <select name="adposition" class="select1" >
                                    <option <?php echo ($val['adposition']==0?"selected":''); ?> value="0">首页轮播</option>
                                    <option <?php echo ($val['adposition']==1?"selected":''); ?> value="1">1F</option>
                                    <option <?php echo ($val['adposition']==2?"selected":''); ?> value="2">2F</option>
                                    <option <?php echo ($val['adposition']==3?"selected":''); ?> value="3">3F</option>
                                    <option <?php echo ($val['adposition']==4?"selected":''); ?> value="4">4F</option>
                                    <option <?php echo ($val['adposition']==5?"selected":''); ?> value="5">活动</option>
                                    <option <?php echo ($val['adposition']==6?"selected":''); ?> value="6">兑换</option>
                                    <option <?php echo ($val['adposition']==7?"selected":''); ?> value="7">其它</option>
                                </select>
                            </div>
                        </li>
                        <li><label>是否置顶<b>*</b></label>
                            <div style="line-height: 35px;">
                                <label><input <?php echo ($val['top']<>0?'checked':''); ?>  type="radio" name="top"   value="1"/>&nbsp;&nbsp;置顶</label>
                                <label><input <?php echo ($val['top']==0?'checked':''); ?>  type="radio" name="top"   value="0"/>&nbsp;&nbsp;隐藏</label>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <li><div></div></li>
                    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="马上发布"/></li>
                </form>
            </ul>
        </div>
    </div>
</div>


</body>


<script>
    $("#file0").change(function(){
        var objUrl = getObjectURL(this.files[0]) ;
        console.log("objUrl = "+objUrl) ;
        if (objUrl) {
            $("#img0").attr("src", objUrl) ;
        }
    }) ;
    //建立一個可存取到該file的url
    function getObjectURL(file) {
        var url = null ;
        if (window.createObjectURL!=undefined) { // basic
            url = window.createObjectURL(file) ;
        } else if (window.URL!=undefined) { // mozilla(firefox)
            url = window.URL.createObjectURL(file) ;
        } else if (window.webkitURL!=undefined) { // webkit or chrome
            url = window.webkitURL.createObjectURL(file) ;
        }
        return url ;
    }
</script>
<script type="text/javascript">
    $(function(){
        $('#myForm').submit(function(){
            $(this).ajaxSubmit(function(res){
                if(res.status=="ok"){
                    layer.msg(res.msg,{icon:1,time:1000},function(){
                        window.location.href="<?php echo U('Ads/showlist');?>";
                    });
                }else{
                    /*layer.confirm(res.msg,{icon:3,btn:['确定','取消']},function(){
                        window.location.href="<?php echo U('Ads/edictlist');?>";
                    },function(){
                        window.location.href="<?php echo U('Ads/showlist');?>";
                    });*/
                    layer.msg(res.msg,{icon:2,time:1000},function(){
                    });
                }

            });
            return false;
        });

    })
</script>


</html>