<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\PHPTutorial\WWW\open\public/../application/admin\view\level\edit.html";i:1530867503;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>编辑角色</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>编辑角色</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="commentForm" method="post" onsubmit="return toVaild()">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">角色名称：</label>
                            <div class="input-group col-sm-4">
                                <input id="name" type="text" class="form-control" name="name" required=""
                                       aria-required="true" value="<?php echo $role['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group"  >
                            <label class="col-sm-3 control-label">币种:</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" id="sid" name="sid" required="" aria-required="true">
                                    <option value="" >请选择</option>
                                    <?php if(is_array($coin) || $coin instanceof \think\Collection || $coin instanceof \think\Paginator): $i = 0; $__LIST__ = $coin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == $role['sid']): ?>selected="selected" <?php endif; ?>><?php echo $vo['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">一级好友返佣(%):</label>
                            <div class="input-group col-sm-4">
                                <input id="commission1" type="text" class="form-control" name="commission1"
                                       required="" aria-required="true" value="<?php echo $role['commission1']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">二级好友返佣(%):</label>
                            <div class="input-group col-sm-4">
                                <input id="commission2" type="text" class="form-control" name="commission2" required=""
                                       aria-required="true" value="<?php echo $role['commission2']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">一级代理返佣(%):</label>
                            <div class="input-group col-sm-4">
                                <input id="commission5" type="text" class="form-control" name="commission5"
                                       required="" aria-required="true" value="<?php echo $role['commission5']; ?>">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">二级代理返佣(%):</label>
                            <div class="input-group col-sm-4">
                                <input id="commission4" type="text" class="form-control" name="commission4"
                                       required="" aria-required="true" value="<?php echo $role['commission4']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">三级代理返佣(%):</label>
                            <div class="input-group col-sm-4">
                                <input id="commission3" type="text" class="form-control" name="commission3"
                                       required="" aria-required="true" value="<?php echo $role['commission3']; ?>">
                            </div>
                        </div>
                        <input type="hidden" id="id" value="<?php echo $role['id']; ?>" name="id"/>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">可拥有最大代理数量：</label>
                            <div class="input-group col-sm-4">
                                <input id="max_num" type="number" class="form-control" name="max_num" required=""
                                       aria-required="true" value="<?php echo $role['max_num']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">等级：</label>
                            <div class="input-group col-sm-4">
                                <input id="level" type="number" class="form-control" name="level" required="" aria-required="true" value="<?php echo $role['level']; ?>" placeholder="不填默认为1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
                                <!--<input type="button" value="提交" class="btn btn-primary" id="postform"/>-->
                                <button class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="/static/admin/js/jquery.min.js">
</script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/static/admin/js/plugins/validate/jquery.validate.min.js"></script>
<script src="/static/admin/js/plugins/validate/messages_zh.min.js"></script>
<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/static/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="/static/admin/js/plugins/layer/layer.min.js"></script>
<script type="text/javascript">

    //表单提交
    function toVaild(){
        var jz;
        var url = "./edit";
        $.ajax({
            type:"POST",
            url:url,
            data:{'data' : $('#commentForm').serialize()},// 你的formid
            async: false,
            beforeSend:function(){
                jz = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
            },
            error: function(request) {
                layer.close(jz);
                swal("网络错误!", "", "error");
            },
            success: function(data) {
                //关闭加载层
                layer.close(jz);
                if(data.code == 1){
                    swal(data.msg, "", "success");
                }else{
                    swal(data.msg, "", "error");
                }

            }
        });

        return false;
    }

    //表单验证
    $(document).ready(function(){
        $(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",});
    });
    $.validator.setDefaults({
        highlight: function(e) {
            $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
        },
        success: function(e) {
            e.closest(".form-group").removeClass("has-error").addClass("has-success")
        },
        errorElement: "span",
        errorPlacement: function(e, r) {
            e.appendTo(r.is(":radio") || r.is(":checkbox") ? r.parent().parent().parent() : r.parent())
        },
        errorClass: "help-block m-b-none",
        validClass: "help-block m-b-none"
    });
</script>
</body>
</html>
