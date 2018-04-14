<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/admin\view\entry\index.html";i:1523169321;s:73:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\application\admin\view\base.html";i:1523170447;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>社团后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/static/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/admin/css/site.css" rel="stylesheet">
    <link href="/static/admin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/user/email/css/style.css" rel="stylesheet" type="text/css" media="all" />
   <link rel="stylesheet" href="/static/index/css/gister.css"/>
     <link rel="stylesheet" href="/static/layui/css/layui.css" />
    <script src="/static/layui/lay/modules/jquery.js"></script>
   <script src="/static/layui/lay/modules/layui.js"></script>
  <script src="/static/layui/layui.js"></script>
    <script src="/static/admin/js/jquery.min.js"></script>
    
  
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <style>
        i {
            color: #337ab7;
        }
    </style><script src="/static/admin/bootstrap-3.3.0-dist/dist/js/bootstrap.min.js"></script>
    <script>
        window.hdjs={};
        //组件目录必须绝对路径(在网站根目录时不用设置)
        window.hdjs.base = '/static/node_modules/hdjs';
        //上传文件后台地址
        window.hdjs.uploader = 'test/php/uploader.php?';
        //获取文件列表的后台地址
        window.hdjs.filesLists = 'test/php/filesLists.php?';
    </script>
    
    <script src="/static/node_modules/hdjs/app/util.js"></script>
   <script src="/static/node_modules/hdjs/require.js"></script>
   <script src="/static/node_modules/hdjs/config.js"></script>
   <script>
    window.hdjs={};
    //组件目录必须绝对路径(在网站根目录时不用设置)
    window.hdjs.base = '/static/node_modules/hdjs';
    //上传文件后台地址
    window.hdjs.uploader = 'test/php/uploader.php?';
    //获取文件列表的后台地址
    window.hdjs.filesLists = 'test/php/filesLists.php?';
</script>
<script src="/static/node_modules/hdjs/static/requirejs/require.js"></script>
<script src="/static/node_modules/hdjs/static/requirejs/config.js"></script>
</head>
<body>
<div class="container-fluid admin-top">

    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="index.html" style="color: white;margin-left: -14px">社团后台管理系统</a>
                </h4>
         
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                         <?php echo session('admin.admin_username'); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('admin/entry/pass'); ?>">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo url('admin/entry/logout'); ?>">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="panel panel-default" id="menus">
                <!--部门人员管理-->
                    <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample"
                    style="border-top: 1px solid #ddd;border-radius: 0%">
                   <h4 class="panel-title">部门人员管理</h4>
                   <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                       <i class="fa fa-chevron-circle-down"></i>
                   </a>
               </div>
               <ul class="list-group menus collapse in" id="collapseExample">
                   <a href="<?php echo url('admin/Xzbuser/index'); ?>" class="list-group-item">
                       <i class="fa fa-address-book" aria-hidden="true"></i>
                       <span class="pull-right" href=""></span>
                       行政部
                   </a>
                   <a href="<?php echo url('admin/Dmbuser/index'); ?>" class="list-group-item">
                       <i class="fa fa-address-book" aria-hidden="true"></i>
                       <span class="pull-right" href=""></span>
                       动漫部
                   </a>
                   <a href="<?php echo url('admin/Jsbuser/index'); ?>" class="list-group-item">
                       <i class="fa fa-address-book" aria-hidden="true"></i>
                       <span class="pull-right" href=""></span>
                       技术部
                   </a>
                   <a href="<?php echo url('admin/Wlbuser/index'); ?>" class="list-group-item">
                       <i class="fa fa-address-book" aria-hidden="true"></i>
                       <span class="pull-right" href=""></span>
                       网络部
                   </a>
                   <a href="<?php echo url('admin/Xmbuser/index'); ?>" class="list-group-item">
                       <i class="fa fa-address-book" aria-hidden="true"></i>
                       <span class="pull-right" href=""></span>
                       项目部
                   </a>
               </ul>
               <!-- 前台管理系统 -->
               <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2"
               aria-expanded="false" aria-controls="collapseExample">
              <h4 class="panel-title">前台系统管理</h4>
              <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                  <i class="fa fa-chevron-circle-down"></i>
              </a>
          </div>
          <ul class="list-group menus collapse in" id="collapseExample2">
              <a href="<?php echo url('admin/Sign/index'); ?>" class="list-group-item">
                  <i class="fa fa-list-ol" aria-hidden="true"></i>
                  <span class="pull-right" href=""></span>
                  人员签到信息
              </a>
              <a href="<?php echo url('admin/Info/index'); ?>" class="list-group-item">
                  <i class="fa fa-list-ol" aria-hidden="true"></i>
                  <span class="pull-right" href=""></span>
                  新闻公告发布
              </a>
          </ul>

                <!--学员管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample1"
                     aria-expanded="false" aria-controls="collapseExample"
                     style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">成员信息管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample1" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample1">
                    <a href="<?php echo url('admin/entry/index'); ?>" class="list-group-item">
                        <i class="fa fa-male" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        已注册成员
                    </a>
                   
                </ul>


            <!--     教室申请 -->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample7"
                     aria-expanded="false" aria-controls="collapseExample"
                     style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">教室申请管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample7" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample7">
                    <a href="#" class="list-group-item">
                        <i class="fa fa-male" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        216成员管理
                    </a>
                     
                    <a href="#" class="list-group-item">
                        <i class="fa fa-female" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        108成员管理
                    </a>
                    
                   <a href="#" class="list-group-item">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        流动钥匙管理
                    </a>
                </ul>
                <!--学员管理菜单 end-->

                <!--课程管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample8"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">课程表管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample8" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample8">
                    <a href="<?php echo url('admin/entry/gtable'); ?>" class="list-group-item">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        课表提交人员
                    </a>
                    <a href="<?php echo url('admin/entry/atable'); ?>" class="list-group-item">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                       排课显示
                    </a>
                      <a href="<?php echo url('admin/entry/news'); ?>" class="list-group-item">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        新闻获取
                    </a>
             
                
                </ul>
                <!--课程管理菜单 end-->

                <!--网站配置管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">网站配置菜单</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="" class="list-group-item">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        系统配置
                    </a>
                </ul>
                <!--网站配置管理菜单 end-->
            </div>
        </div>
        <!--右侧主体区域部分 start-->
        <div class="col-xs-12 col-sm-9 col-lg-10">
            

   <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
                <li>
                    <a href="javascript:;"><i class="fa fa-cogs"></i> 注册成员列表</a>
                </li>       
   </ol>


 <table class="layui-hide" id="test"></table>
<script>
layui.use('table', function(){
  var table = layui.table;
  
  table.render({
    elem: '#test'
    ,url:'memeber'
    ,cols: [[
      {field:'user_id', title: 'ID', align: 'center',sort: true}
      ,{field:'user_name', title: '昵称',align: 'center'}
       ,{field:'user_realname',  title: '真实姓名',align: 'center'}
      ,{field:'user_sex', title: '性别', align: 'center', sort: true}
      ,{field:'user_phone',  title: '手机号',align: 'center'}
      ,{field:'user_date',  title: '加入时间',align: 'center',sort: true}
      ,{fixed: 'right',  title: '功能操作',align: 'center',toolbar: '#barDemo'}
    ]]
    ,page: true
  });
});
</script>
<script type="text/html" id="barDemo">
  
 <i class="layui-icon" style="font-size: 30px; color: #1E9FFF; cursor: pointer;"  lay-event="del">  &#xe640;</i>  
</script>
<script>
layui.use('table', function(){
  var table = layui.table;
  //监听表格复选框选择
  table.on('checkbox(demo)', function(obj){
    console.log(obj)
  });
  //监听工具条
  table.on('tool(demo)', function(obj){
    var data = obj.data;
    if(obj.event === 'detail'){
      layer.msg('ID：'+ data.id + ' 的查看操作');
    } else if(obj.event === 'del'){
         util.confirm('确认删除么',function(){
           location.href="<?php echo url('del'); ?>"+'?user_id='+data.user_id;
     })
    } else if(obj.event === 'edit'){
      layer.alert('编辑行：<br>'+ JSON.stringify(data))
    }
  });
  
  var $ = layui.$, active = {
    getCheckData: function(){ //获取选中数据
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.alert(JSON.stringify(data));
    }
    ,getCheckLength: function(){ //获取选中数目
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.msg('选中了：'+ data.length + ' 个');
    }
    ,isAll: function(){ //验证是否全选
      var checkStatus = table.checkStatus('idTest');
      layer.msg(checkStatus.isAll ? '全选': '未全选')
    }
  };
  
  $('.demoTable .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
});
</script>   -->
 <table class="layui-hide" id="test" lay-filter="demo"></table>
<script>
layui.use('table', function(){
  var table = layui.table;
  
  table.render({
    elem: '#test'
    ,url:'memeber'
     ,cellMinWidth: 90
    ,cols: [[
    
      {field:'user_id', title: 'ID', align: 'center',sort: true}
      ,{field:'user_username', title: '昵称',align: 'center'}
       ,{field:'user_name',  title: '真实姓名',align: 'center'}
      ,{field:'user_sex', title: '性别', align: 'center', sort: true}
      ,{field:'user_phone',  title: '手机号',align: 'center'}
      ,{field:'user_date',  title: '加入时间',align: 'center',sort: true}
      ,{fixed: 'right',  title: '功能操作',align: 'center',toolbar: '#barDemo'}
    ]]
    ,page: true
  
  });
    var $ = layui.$, active = {
    reload: function(){
      var demoReload = $('#demoReload');
   
      //执行重载
      table.reload('#test', {
        page: {
          curr: 1 //重新从第 1 页开始
        }
        ,where: {
          key: {
            id: demoReload.val()
          }
        }
      });
    }
  };
  
  $('.demoTable .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
});


</script>
<script type="text/html" id="barDemo">
  
 <i class="layui-icon" style="font-size: 30px; color: #1E9FFF; cursor: pointer;"  lay-event="del">  &#xe640;</i>  
</script>
<script>
layui.use('table', function(){
  var table = layui.table;
  //监听表格复选框选择
  table.on('checkbox(demo)', function(obj){
    console.log(obj)
  });
  //监听工具条
  table.on('tool(demo)', function(obj){
    var data = obj.data;
    if(obj.event === 'detail'){
      layer.msg('ID：'+ data.id + ' 的查看操作');
    } else if(obj.event === 'del'){
         util.confirm('确认删除么',function(){
           location.href="<?php echo url('del'); ?>"+'?user_id='+data.user_id;
     })
    } else if(obj.event === 'edit'){
      layer.alert('编辑行：<br>'+ JSON.stringify(data))
    }
  });
  
  var $ = layui.$, active = {
    getCheckData: function(){ //获取选中数据
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.alert(JSON.stringify(data));
    }
    ,getCheckLength: function(){ //获取选中数目
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.msg('选中了：'+ data.length + ' 个');
    }
    ,isAll: function(){ //验证是否全选
      var checkStatus = table.checkStatus('idTest');
      layer.msg(checkStatus.isAll ? '全选': '未全选')
    }
  };
  
  $('.demoTable .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
});
</script>  


<!-- <table class="layui-table" lay-data="{width: 100%, height:332, url:'memeber', page:true, id:'idTest'}" lay-filter="demo">
  <thead>
    <tr>
     
      <th lay-data="{field:'user_id', width:80, sort: true, fixed: true}">ID</th>
      <th lay-data="{field:'user_username', width:80}">用户名</th>
      <th lay-data="{field:'user_name', width:80}">真实姓名</th>
      <th lay-data="{field:'user_sex', width:80, sort: true}">性别</th>
      <th lay-data="{field:'city', width:80}">城市</th>
      <th lay-data="{field:'sign', width:160}">签名</th>
      <th lay-data="{field:'experience', width:80, sort: true}">积分</th>
      
      
     
      <th lay-data="{fixed: '', width:178, align:'center', toolbar: '#barDemo'}">操作功能</th>
    </tr>
  </thead>
</table>
 
<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>
  <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
               
          

注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的
<script>
layui.use('table', function(){
  var table = layui.table;
  //监听表格复选框选择
  table.on('checkbox(demo)', function(obj){
    console.log(obj)
  });
  //监听工具条
  table.on('tool(demo)', function(obj){
    var data = obj.data;
    if(obj.event === 'detail'){
      layer.msg('ID：'+ data.id + ' 的查看操作');
    } else if(obj.event === 'del'){
         util.confirm('确认删除么',function(){
           location.href="<?php echo url('del'); ?>"+'?user_id='+data.user_id;
     })
    } else if(obj.event === 'edit'){
      layer.alert('编辑行：<br>'+ JSON.stringify(data))
    }
  });
  
  var $ = layui.$, active = {
    getCheckData: function(){ //获取选中数据
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.alert(JSON.stringify(data));
    }
    ,getCheckLength: function(){ //获取选中数目
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.msg('选中了：'+ data.length + ' 个');
    }
    ,isAll: function(){ //验证是否全选
      var checkStatus = table.checkStatus('idTest');
      layer.msg(checkStatus.isAll ? '全选': '未全选')
    }
  };
  
  $('.demoTable .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
});
</script>  -->


        </div>
    </div>
    <!--右侧主体区域部分结束 end-->
</div>
</div>
<div class="master-footer" style="margin-top: 150px">
    <a href="http://www.baidu.com">高端大气</a>
    <a href="http://www.baidu.com">上档次</a>
    <a href="http://www.baidu.com">百度一下</a>
    <br>
    Powered by hdphp v2.0 © 2016-2022 www.hdphp.com
</div>

</body>
</html>
