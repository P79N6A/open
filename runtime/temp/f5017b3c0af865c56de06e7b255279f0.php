<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\PHPTutorial\WWW\open\public/../application/admin\view\share\shareadd.html";i:1532672519;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加模板</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/bootstrap-fileinput.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- 颜色选择器 -->    
    <script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/admin/js/plugins/colpick/colpick.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/static/admin/css/plugins/colpick/colpick.css" type="text/css"/>

    <style>
        .checkbox-group input{display:none;opacity:0;}
        .checkbox-group input[type=checkbox]+label, .checkbox-group input[type=radio]+label {
            line-height: 1;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            /*cursor: pointer;*/
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin:2px;
        }
        .checkbox-group input[type=checkbox]+label:before, .checkbox-group input[type=radio]+label:before {
            line-height: 20px;
            display: inline-block;
            width: 28px;
            height: 18px;
            margin-right: 8px;
            margin-top: 8px;
            content: '';
            color: #fff;
            border: 1px solid #dce4e6;
            background-color: #f3f6f8;
            border-radius: 3px;
        }
        .checkbox-group input[type=checkbox]:checked+label:before,.checkbox-group input[type=radio]:checked+label:before{
            /*content:'\2022';圆点*/
            content:'\2713';
            color:#fff;
            background-color: #31b968;
            border-radius: 5px;
            font-size:16px;
            text-align: center;
            border-color: #31b968;
        }
        .color-box {
            display: inline-block;
            width:20px;
            height:20px;
            margin-bottom: -5px;
            border: 1px solid #000;
        }  
        .number{
            width: 60px;
        }      
       
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>添加模板</h5>
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
                    <div class="row">
                        <div class="col-sm-9">
                            <form class="form-horizontal m-t row" id="commentForm" method="post">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">选择币种：</label>
                                    <div class="input-group col-sm-4">
                                        <select name="sid">
                                            <?php if(is_array($soretype) || $soretype instanceof \think\Collection || $soretype instanceof \think\Paginator): $i = 0; $__LIST__ = $soretype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">模板名称：</label>
                                    <div class="input-group col-sm-4">
                                        <input id="title" type="text" class="form-control" name="title" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">上传图片：</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="/static/admin/images/upload.jpg" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">选择文件</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pic1" id="picID" accept="image/gif,image/jpeg,image/x-png"  />
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning" onclick="uploadImg()">提交</a>
                                        </div>
                                    </div>
                                    
                                    <!-- 图片地址 -->
                                    <input type="hidden" name="pic" value="" id="pic">
                                </div>
                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">邀请码：</label>
                                    <div class="input-group col-sm-4">  
                                        <input type="text" class="form-control" name="text1" value="123456" readonly="readonly"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">属性调整：</label>
                                    <div class="input-group col-sm-6">
                                        大小：<input id="size1" type="number" class="number" name="size1" />px 
                                        颜色: <span class="color-box" ></span><input type="hidden" id="color1" name="color1"/> 
                                        左：<input id="left1" type="number" class="number" name="left1" />px  
                                        上：<input id="top_1" type="number" class="number" name="top1" />px
                                    </div>
                                </div>                                

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">二维码调整：</label>
                                    <div class="input-group col-sm-6">
                                        大小：<input id="size" type="number" class="number" name="size" />px  
                                        左：<input id="left" type="number" class="number" name="left" />px  
                                        上：<input id="top" type="number" class="number" name="top" />px
                                    </div>
                                </div> 
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文本2：</label>
                                    <div class="input-group col-sm-4">  
                                        <input type="text" class="form-control" name="text2" value=""/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">属性调整：</label>
                                    <div class="input-group col-sm-6">
                                        大小：<input id="size2" type="number" class="number" name="size2" />px 
                                        颜色: <span class="color-box" ></span><input type="hidden" id="color2" name="color2"/> 
                                        左：<input id="left2" type="number" class="number" name="left2" />px  
                                        上：<input id="top2" type="number" class="number" name="top2" />px
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文本3：</label>
                                    <div class="input-group col-sm-4">  
                                        <input type="text" class="form-control" name="text3" value=""/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">属性调整：</label>
                                    <div class="input-group col-sm-6">
                                        大小：<input id="size3" type="number" class="number" name="size3" />px 
                                        颜色: <span class="color-box" ></span><input type="hidden" id="color3" name="color3"/> 
                                        左：<input id="left3" type="number" class="number" name="left3" />px  
                                        上：<input id="top3" type="number" class="number" name="top3" />px
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文本4：</label>
                                    <div class="input-group col-sm-4">  
                                        <input type="text" class="form-control" name="text4" value=""/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">属性调整：</label>
                                    <div class="input-group col-sm-6">
                                        大小：<input id="size4" type="number" class="number" name="size4" />px 
                                        颜色: <span class="color-box" ></span><input type="hidden" id="color4" name="color4"/> 
                                        左：<input id="left4" type="number" class="number" name="left4" />px  
                                        上：<input id="top4" type="number" class="number" name="top4" />px
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">文本5：</label>
                                    <div class="input-group col-sm-4">  
                                        <input type="text" class="form-control" name="text5" value=""/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">属性调整：</label>
                                    <div class="input-group col-sm-6">
                                        大小：<input id="size5" type="number" class="number" name="size5" />px 
                                        颜色: <span class="color-box" ></span><input type="hidden" id="color5" name="color5"/> 
                                        左：<input id="left5" type="number" class="number" name="left5" />px  
                                        上：<input id="top5" type="number" class="number" name="top5" />px
                                    </div>
                                </div>                                                                                                 

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">状态：</label>
                                    <div class="input-group col-sm-6">
                                        <select name="status" id="status">
                                            <option value="1">启用</option>
                                            <option value="0">禁用</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-3">
                                        <a href="javascript:;" class="btn btn-warning" onclick ="return toVaild(2)">预览</a>
                                        <button class="btn btn-primary" onclick ="return toVaild(1)">提交</button>
                                    </div>
                                </div>
                            </form>                              
                        </div>

                         <div class="col-sm-3">
                            <img id="show" src="" style="width: 100%;" />
                         </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>

<script src="/static/admin/js/bootstrap-fileinput.js"></script>
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
    function toVaild(type){

        var jz;
        var url = "<?php echo url('share/shareAdd'); ?>";
        var form = document.getElementById('commentForm');  
        var formFile = new FormData(form);
        formFile.append('type',type);
        var data = formFile;
        
        $.ajax({
            type:"POST",
            url:url,
            data:data,// 你的formid
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                jz = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
            },
            error: function(request) {
                layer.close(jz);
                swal("网络错误!", "", "error");
            },
            success: function(data) {
                console.log(data);
                if(type==1){

                    //关闭加载层
                    layer.close(jz);
                    if(data.code == 1){
                        swal(data.msg, "", "success");
                    }else{
                        swal(data.msg, "", "error");
                    }
                }else{
                   //关闭加载层
                    layer.close(jz);
                    if(data.code==1){
                        //更新图片
                        $('#show').attr('src','/uploads/share/'+data.data);
                    } else{
                        swal(data.msg, "", "error");
                    }

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

    //图片上传
    function uploadImg(){
        var jz;
        var url = "<?php echo url('share/uploadImg'); ?>";

        var fileObj = document.getElementById("picID").files[0]; // js 获取文件对象
        if (typeof (fileObj) == "undefined" || fileObj.size <= 0) {
            alert("请选择图片");
            return;
        }
        var formFile = new FormData();
        var data = formFile;

 
        formFile.append("file", fileObj); //加入文件对象
        $.ajax({
            type:"POST",
            url:url,
            data:data,// 你的formid
            async: false,
            cache: false,
            contentType: false,
            processData: false,
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
                    $('#pic').val(data.data);//给表单赋值
                    $('#show').attr('src','/uploads/share/'+data.data);
                    swal(data.msg, "", "success");
                }else{
                    swal(data.msg, "", "error");
                }

            }
        });

        return false;
    }

//颜色选择
$('.color-box').colpick({

    colorScheme:'dark',

    layout:'rgbhex',

    color:'ff8800',

    onSubmit:function(hsb,hex,rgb,el) {

        $(el).css('background-color', '#'+hex);

        $(el).colpickHide();

        //设置表单
        $(el).next().val(hex);

    }

})
.css('background-color', '#fff') 

</script>
</body>
</html>
