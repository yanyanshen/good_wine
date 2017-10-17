<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加管理员</title>
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    <link rel="stylesheet" href="/Public/Admin/css/main.css">
    <script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/colResizable-1.3.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript" src="/Public/Home/js/layer.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.form.js"></script>
    <script type="text/javascript" src="/Public/Home/js/dist/jquery.validator.min.js?local=zh_CN"></script>
    <script type="text/javascript" src="/Public/Admin/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/Public/Admin/ckfinder/ckfinder.js"></script>

    <script type="text/javascript">
        $(function(){
            $(".list_table").colResizable({
                liveDrag:true,
                gripInnerHtml:"<div class='grip'></div>",
                draggingClass:"dragging",
                minWidth:30
            });

            $("form").validator({
                fields:{
                    username:"管理员账号:required;remote[chkUser]",
                    passwd:"密码:required",
                    repasswd:"确认密码:required;match(passwd)"
                },
                valid:function(form){
                    $(form).ajaxSubmit(function(res){
                        var me=this;
                        if(res=='添加成功'){
                            layer.msg(res+',正在跳转到管理员列表',{
                                icon:1,
                                time:2000
                            },function(){
                                location.href="<?php echo u('adminList');?>";
                            })
                        }else{
                            layer.msg(res,{
                                icon:2,
                                time:2000
                            },function(){
                                location.reload();
                            })
                        }
                    })
                }
            })
        });

    </script>
</head>
<body>
<div id="forms" class="mt10">
    <div class="box">
        <div class="box_border">
            <div class="box_top"><b class="pl15">添加管理员</b></div>
            <div class="box_center">
                <form action="<?php echo u('saveAdmin');?>" class="jqtransform" method="post">
                    <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="td_right">账号：</td>
                            <td class=""><input type="text" name="username" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="td_right">密码：</td>
                            <td class=""><input type="text" name="passwd" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="td_right">确认密码：</td>
                            <td class=""><input type="text" name="repasswd" class="input-text lh30" size="40"></td>
                        </tr>
                        <tr>
                            <td class="td_right">&nbsp;</td>
                            <td class="">
                                <input type="submit" class="btn btn82 btn_save2" value="保存">
                                <!--<input type="reset" class="btn btn82 btn_res" value="重置">-->
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>