<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/Public/Admin/css/mine.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/Admin/js/jQuery-1.8.2.min.js"></script>
        <script type="application/javascript" src="/Public/Admin/js/layer.js"></script>
        <script type="application/javascript" src="/Public/Admin/js/jquery.form.js"></script>
        <script type="text/javascript" src="/Public/Admin/js/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $(function(){

                $("select[name='province']").change(function(){
                    $("#s2").css("display","inline-block");
                })
                $("select[name='city']").change(function(){
                    $("#s3").css("display","inline-block");
                })
                //添加管理员
                $("input[name='submit']").click(function(){
                    $.post("<?php echo U('Role/add_role');?>",$("#form1").serialize(),function(res){
                        if(res.status==1){
                            layer.msg("添加成功",{icon:1,time:1500},function(){
                                location.href="<?php echo U('Role/roleList');?>";
                            });
                        }else{
                            layer.msg("添加失败，请重新添加",{icon:2,time:1500},function(){
                                location.href="<?php echo U('Role/add_role');?>";
                            });
                        }
                    })
                })

            })
        </script>
        <style>
            .button {
                background-color: #3b95c8;
                display: inline-block;
                outline: none;
                cursor: pointer;
                color:#fff;
                border: 0px;
                text-align: center;
                text-decoration: none;
                font: 14px/100% Arial, Helvetica, sans-serif;
                padding: .5em 1.5em .55em;
                text-shadow: 0 1px 1px rgba(0,0,0,.5);
                -webkit-border-radius: .5em;
                -moz-border-radius: .5em;
                border-radius: .3em;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
                box-shadow: 0 1px 2px rgba(0,0,0,.2);
            }
            .button:hover {
                text-decoration: none;
            }
            .button:active {
                position: relative;
                top: 1px;
            }
        </style>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理->添加管理员</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo U('Role/roleList');?>">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo U('Role/add_role');?>" method="post" enctype="multipart/form-data" id="form1">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td style="text-align: right;width: 120px">* 账号：</td>
                    <td><input type="text" name="username" value=""/></td>
                </tr>
                <tr>
                    <td style="text-align: right;width: 120px">* 密码：</td>
                    <td><input type="password" name="password1" value="" /></td>
                </tr>
                <tr>
                    <td style="text-align: right;width: 120px">* 确认密码：</td>
                    <td><input type="password" name="password2" value="" /></td>
                </tr>
                <tr>
                    <td style="text-align: right;width: 120px">* 等级：</td>
                    <td>
<!--                        <select name="level">
                            <option value="">请选择</option>
                            <option value="普通管理员">普通管理员</option>
                            <option value="超级管理员">超级管理员</option>
                        </select>-->
                        <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><input type="checkbox" value="<?php echo ($v['id']); ?>" id="key<?php echo ($v['id']); ?>" name="gid[]"/>
                        <label for="key<?php echo ($v['id']); ?>"><?php echo ($v["title"]); ?></label>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>


                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" value="添加" name="submit" style="padding-left: 20px;cursor: pointer;" class="button"/>
                        <input type="reset" value="重置" name="" style="cursor: pointer;" class="button"/>
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>