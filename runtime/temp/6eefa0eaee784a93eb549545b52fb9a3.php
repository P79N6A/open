<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\PHPTutorial\WWW\open\public/../application/admin\view\coin\index.html";i:1532598583;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台发币记录列表</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>后台发币记录列表</h5>
        </div>
        <div class="ibox-content">
            <div class="form-group clearfix col-sm-1">
                <a href="./add"><button class="btn btn-outline btn-primary" type="button">添加</button></a>
            </div>
            <!--搜索框开始-->
            <form id='commentForm' role="form" method="post" class="form-inline"  >
                <div class="content clearfix m-b">
                    <div class="form-group" style="margin-left:30px;">
                        <label>会员手机号(或会员名称)：</label>
                        <input type="text" class="form-control" id="rolename" name="rolename">
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>糖果类别：</label>
                       <select id="level" name="level">
                           <option value="">请选择</option>
                           <?php if(is_array($level) || $level instanceof \think\Collection || $level instanceof \think\Paginator): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                           <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                       </select>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>发放状态：</label>
                        <select id="status" name="status">
                            <option value="">请选择</option>
                            <option value="0" >暂未开始</option>
                            <option value="2" >发放中</option>
                            <option value="3" >停止发放</option>
                            <option value="1" >发放完毕</option>

                        </select>
                    </div>
                    <div class="form-group" style="margin-left: 30px;" >
                        <button class="btn btn-primary" type="button" style="margin-top:5px" id="search"><strong>搜 索</strong>
                        </button>
                    </div>
                </div>
            </form>
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>

            <div class="example-wrap">
                <div class="example">
                    <table id="cusTable" data-height="550">
                        <thead>
                        <th data-field="username">会员名</th>
                        <th data-field="phone">会员手机</th>
                        <th data-field="levelname">糖果类别</th>
                        <th data-field="timing">发放天数</th>
                        <th data-field="amount">总发放金额</th>
                        <th data-field="cash_amount">已发放金额</th>
                        <th data-field="no_amount">未发放金额</th>
                        <th data-field="is_instant">发放类型</th>
                        <th data-field="typename">认购类型</th>
                        <th data-field="status">状态</th>
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
<!-- 会员代理分配 -->
<div class="zTreeDemoBackground left" style="display: none" id="role">
    <input type="hidden" id="nodeid">
    <div class="form-group">
        <div class="col-sm-5 col-sm-offset-2">
            <ul id="treeType" class="ztree"></ul>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-4" style="margin-bottom: 15px">
            <input type="button" value="确认分配" class="btn btn-primary" id="postform"/>
        </div>
    </div>
</div>
<script type="text/javascript">
    zNodes = '';
</script>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/admin/js/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="/static/admin/js/plugins/layer/layer.min.js"></script>
<link rel="stylesheet" href="/static/admin/js/plugins/zTree/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="/static/admin/js/plugins/zTree/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript" src="/static/admin/js/plugins/zTree/jquery.ztree.excheck-3.5.js"></script>
<script type="text/javascript" src="/static/admin/js/plugins/zTree/jquery.ztree.exedit-3.5.js"></script>
<script type="text/javascript">

    function up_status(id,status) {
        $.post('./up_status', {'status' : status, 'id' : id}, function(res){
            if(res.code == 1){
                initTable();
            }else{
                layer.alert(res.msg);
            }

        }, 'json')
    }

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
                    pageNumber: params.pageNumber,
                    pageSize: params.pageSize,
                    searchText:$('#rolename').val(),
                    sid:$('#level').val(),
                    status:$('#status').val()
                    
                };
                return param;
            },
            onLoadSuccess: function(res){  //加载成功时执行

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

    function coinDel(id){

        layer.confirm('确认删除此发糖果数据?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.post('./delete', {'id' : id}, function(res){
                if(res.code == 1){
                    layer.alert('删除成功', function(){
                        initTable();
                    });
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
