<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\PHPTutorial\WWW\open\public/../application/admin\view\coin\add_coin.html";i:1530254597;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加币</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__CSS__/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__CSS__/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
    <link href="__CSS__/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__CSS__/style.min.css?v=4.1.0" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="__CSS__/plugins/sweetalert/sweetalert.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加币</h5>
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
                            <label class="col-sm-3 control-label">发放金额:</label>
                            <div class="input-group col-sm-4">
                                <input id="amount" type="number" class="form-control" name="amount" required="" aria-required="true">
                            </div>
                        </div>
                        <input type="hidden" name="uid" value="<?php echo $uid; ?>" />
                        <div class="form-group">
                            <label class="col-sm-3 control-label">糖果种类:</label>
                            <div class="input-group col-sm-4">
                            <select id="sid" class="form-control" name="sid" required="" aria-required="true">
                                <option value="">请选择</option>
                                <?php if(is_array($level) || $level instanceof \think\Collection): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">认购类型:</label>
                            <div class="input-group col-sm-4">
                                <select id="typeid" class="form-control" name="typeid" required="" aria-required="true">
                                    <option value="">请选择</option>
                                    <?php if(is_array($type) || $type instanceof \think\Collection): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">发币方式：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" id="is_instant" name="is_instant" required="" aria-required="true">
                                    <option value="1" >即时到账</option>
                                    <option value="2" >定时发放</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">发放人群：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" id="is_employees" name="is_employees" required="" aria-required="true">
                                    <option value="0" >普通客户</option>
                                    <option value="1" >内部员工</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" id="tian" style="display: none">
                            <label class="col-sm-3 control-label">发放天数:</label>
                            <div class="input-group col-sm-4">
                                <input id="timing" type="number" class="form-control" name="timing" >
                            </div>
                        </div>

                        <div class="form-group"  >
                            <label class="col-sm-3 control-label">发放状态:</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" id="status" name="status" required="" aria-required="true">
                                    <option value="0" >暂未开始</option>
                                    <option value="1" >发放中</option>
                                    <option value="2" >停止发放</option>
                                    <option value="3" >发放完毕</option>

                                </select>
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
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/validate/jquery.validate.min.js"></script>
<script src="__JS__/plugins/validate/messages_zh.min.js"></script>
<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
<script src="__JS__/plugins/sweetalert/sweetalert.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="__JS__/plugins/layer/layer.min.js"></script>
<script type="text/javascript">
    $('#is_instant').change(function () {
        if($(this).val()==2){
            $('#tian').show();
        }else{
            $('#tian').hide();
        }
    })

    //表单提交
    function toVaild(){
        var jz;
        var url = "./add_coin";
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
