<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\PHPTutorial\WWW\open\public/../application/admin\view\c2cbuy\index.html";i:1532314661;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C2C回购</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <style>
        .testswitch {
            position: relative;
            float: left;
            width: 90px;
            margin: 0;
            -webkit-user-select:none;
            -moz-user-select:none;
            -ms-user-select: none;
        }

        .testswitch-checkbox {
            display: none;
        }

        .testswitch-label {
            display: block;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid #999999;
            border-radius: 20px;
        }

        .testswitch-inner {
            display: block;
            width: 200%;
            margin-left: -100%;
            transition: margin 0.3s ease-in 0s;
        }

        .testswitch-inner::before, .testswitch-inner::after {
            display: block;
            float: right;
            width: 50%;
            height: 30px;
            padding: 0;
            line-height: 30px;
            font-size: 14px;
            color: white;
            font-family:
                    Trebuchet, Arial, sans-serif;
            font-weight: bold;
            box-sizing: border-box;
        }

        .testswitch-inner::after {
            content: attr(data-on);
            padding-left: 10px;
            background-color: #00e500;
            color: #FFFFFF;
        }

        .testswitch-inner::before {
            content: attr(data-off);
            padding-right: 10px;
            background-color: #EEEEEE;
            color: #999999;
            text-align: right;
        }

        .testswitch-switch {
            position: absolute;
            display: block;
            width: 22px;
            height: 22px;
            margin: 4px;
            background: #FFFFFF;
            top: 0;
            bottom: 0;
            right: 56px;
            border: 2px solid #999999;
            border-radius: 20px;
            transition: all 0.3s ease-in 0s;
        }

        .testswitch-checkbox:checked + .testswitch-label .testswitch-inner {
            margin-left: 0;
        }

        .testswitch-checkbox:checked + .testswitch-label .testswitch-switch {
            right: 0px;
        }

    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>C2C回购</h5>
        </div>
        <div class="ibox-content">
            <div class="form-group clearfix col-sm-6">

                <div class="col-sm-2">C2C回购配置</div>
                <div class="testswitch ">
                    <input class="testswitch-checkbox" id="onoffswitch" type="checkbox" <?php if($config['status'] == 1): ?> checked <?php endif; ?> >
                    <label class="testswitch-label" for="onoffswitch">
                        <span class="testswitch-inner" data-on="开启" data-off="关闭"></span>
                        <span class="testswitch-switch"></span>
                    </label>
                </div>
                <!-- <a href="./ordersAdd"><button class="btn btn-outline btn-primary" type="button">添加订单</button></a> -->
            </div>
            <!--搜索框开始-->
            <!--<form id='commentForm' role="form" method="post" class="form-inline">-->
                <!--<div class="content clearfix m-b">-->
                    <!--<div class="form-group" style="margin-left: 30px;">-->
                        <!--<label>订单号/用户ID：</label>-->
                        <!--<input type="text" class="form-control" id="goodsname" name="goodsname">-->
                    <!--</div>-->
                    <!--<div class="form-group" style="margin-left:30px;">-->
                        <!--<label>糖果类别：</label>-->
                        <!--<select id="level" name="level">-->
                            <!--<option value="">请选择</option>-->
                        <!--</select>-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                        <!--<button class="btn btn-primary" type="button" style="margin-top:5px" id="search"><strong>搜 索</strong>-->
                        <!--</button>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</form>-->
            <!--搜索框结束-->

            <div class="example-wrap">
                <div class="example">
                    <table id="cusTable" data-height="550">
                        <thead>
                        <th data-field="id">序号</th>
                        <th data-field="cid">订单号</th>
                        <th data-field="uid">发起者</th>
                        <th data-field="sid">币种</th>
                        <th data-field="num">数量</th>
                        <th data-field="money">单价</th>
                        <th data-field="total_money">合计</th>
                        <th data-field="type">类型</th>
                        <th data-field="payid">接单者</th>
                        <th data-field="status">订单状态</th>
                        <th data-field="create_time">创建时间</th>
                        <th data-field="update_time">过期时间</th>
                        <th data-field="operate">操作</th>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- End Example Pagination -->
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/admin/js/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="/static/admin/js/plugins/layer/layer.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $("#onoffswitch").on('click', function(){
            clickSwitch()
        });

        var clickSwitch = function() {
            if ($("#onoffswitch").is(':checked')) {
                console.log("在ON的状态下");
                $.getJSON("<?php echo url('c2cbuy/config'); ?>", {'status':1}, function(res){
                    if(res.code == 1){
                        layer.alert(res.msg);
                    }else{
                        layer.alert(res.msg);
                    }
                });
            } else {
                console.log("在OFF的状态下");
                $.getJSON("<?php echo url('c2cbuy/config'); ?>", {'status':0}, function(res){
                    if(res.code == 1){
                        layer.alert(res.msg);
                    }else{
                        layer.alert(res.msg);
                    }
                });
            }
        };
    });

</script>


<script type="text/javascript">
    function initTable() {
        //先销毁表格
        $('#cusTable').bootstrapTable('destroy');
        //初始化表格,动态从服务器加载数据
        $("#cusTable").bootstrapTable({
            method: "get",  //使用get请求到服务器获取数据
            url: "./index", //获取数据的地址
            striped: true,  //表格显示条纹
            pagination: true, //启动分页
            pageSize: 10,  //每页显示的记录数
            pageNumber:1, //当前第几页
            pageList: [5, 10, 15, 20, 25],  //记录数可选列表
            sidePagination: "server", //表示服务端请求
            //设置为undefined可以获取pageNumber，pageSize，searchText，sortName，sortOrder
            //设置为limit可以获取limit, offset, search, sort, order
            queryParamsType : "undefined",
            queryParams: function queryParams(params) {   //设置查询参数
                var param = {
                    type:$('#type').val(),
                    pageNumber: params.pageNumber,
                    pageSize: params.pageSize,
                    searchText:$('#goodsname').val(),
                    sid:$('#level').val(),

                };
                return param;
            },
            onLoadSuccess: function(data){  //加载成功时执行

                layer.msg("加载成功", {time : 1000});
            },
            onLoadError: function(){  //加载失败时执行
                layer.msg("加载数据失败");
            }
        });
    }

    $(document).ready(function () {
        //调用函数，初始化表格
        initTable();

        //当点击查询按钮的时候执行
        $("#search").bind("click", initTable);
    });

    function pass(id){
        layer.confirm('确认回购此订单?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON("<?php echo url('c2cbuy/edit'); ?>", {'id' : id,'status':1}, function(res){
                if(res.code == 1){
                    layer.alert(res.msg);
                    initTable();
                }else{
                    layer.alert(res.msg);
                }
            });

            layer.close(index);
        })

    }

    function notpass(id){
        layer.confirm('确认取消此订单?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON("<?php echo url('c2cbuy/edit'); ?>", {'id' : id,'status':0}, function(res){
                if(res.code == 1){
                    layer.alert(res.msg);
                    initTable();
                }else{
                    layer.alert(res.msg);
                }
            });

            layer.close(index);
        })

    }

</script>
</body>
</html>
