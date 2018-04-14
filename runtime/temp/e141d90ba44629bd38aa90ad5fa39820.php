<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/admin\view\entry\atable.html";i:1522437494;s:73:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\application\admin\view\base.html";i:1523015783;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>后台管理</title>
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
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="index.html" style="color: white;margin-left: -14px">后台管理系统</a>
                </h4>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://www.kancloud.cn/manual/thinkphp5/118003" target="_blank"><i class="fa fa-w fa-file-code-o"></i>
                                在线文档</a>
                        </li>
                        <li>
                            <a href="http://fontawesome.dashgame.com/" target="_blank"><i
                                    class="fa fa-w fa-hand-o-right"></i> 图标库</a>
                        </li>
                        <li>
                            <a href="http://bbs.houdunwang.com" target="_blank"><i class="fa fa-w fa-forumbee"></i> 后盾网论坛</a>
                        </li>
                    </ul>
                </div>
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
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample"
                     aria-expanded="false" aria-controls="collapseExample"
                     style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">教室申请管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample">
                    <a href="<?php echo url('admin/entry/ap'); ?>" class="list-group-item">
                        <i class="fa fa-male" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        216成员管理
                    </a>
                     
                    <a href="<?php echo url('admin/entry/bp'); ?>" class="list-group-item">
                        <i class="fa fa-female" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        108成员管理
                    </a>
                    
                   <a href="<?php echo url('admin/Entry/key'); ?>" class="list-group-item">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        流动钥匙管理
                    </a>
                </ul>
                <!--学员管理菜单 end-->

                <!--课程管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2"
                     aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">课程表管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample2">
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
                    <a href="" class="list-group-item">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                       网络部
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
            
<div class="layui-container">  


 <div class="wrap" style="font-size:18px;text-decoration: none;text-align: center;" >
          <table border="3" text-align="center" cellpadding="19" cellspacing="14" height="500px" >
              <caption class="pp " style="text-align: center;"><h1>排课表显示<i class="layui-icon" style="font-size: 30px; color: #1E9FFF;">&#xe60c;</i> </h1></caption>
                  <tr >
                      <th colspan="2"> &nbsp;</th>
                      <th style="text-align: center;">星期一</th>
                      <th style="text-align: center;">星期二</th>
                      <th style="text-align: center;">星期三</th>
                      <th style="text-align: center;">星期四</th>
                      <th style="text-align: center;">星期五</th>
                  </tr>
                  <tr>
                      <th rowspan="2">上午</th>
                      <th>一</th>
                   <td style="text-align: center;">  <?php if(is_array($data[0]) || $data[0] instanceof \think\Collection || $data[0] instanceof \think\Paginator): if( count($data[0])==0 ) : echo "" ;else: foreach($data[0] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?>  </td>
                 <td style="text-align: center;"><?php if(is_array($data[5]) || $data[5] instanceof \think\Collection || $data[5] instanceof \think\Paginator): if( count($data[5])==0 ) : echo "" ;else: foreach($data[5] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                 <td style="text-align: center;"><?php if(is_array($data[10]) || $data[10] instanceof \think\Collection || $data[10] instanceof \think\Paginator): if( count($data[10])==0 ) : echo "" ;else: foreach($data[10] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                 <td style="text-align: center;"><?php if(is_array($data[3]) || $data[3] instanceof \think\Collection || $data[3] instanceof \think\Paginator): if( count($data[3])==0 ) : echo "" ;else: foreach($data[3] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                 <td style="text-align: center;"><?php if(is_array($data[4]) || $data[4] instanceof \think\Collection || $data[4] instanceof \think\Paginator): if( count($data[4])==0 ) : echo "" ;else: foreach($data[4] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                  </tr>
                  <tr>
                      <th>二</th>
                      <td style="text-align: center;"><?php if(is_array($data[1]) || $data[1] instanceof \think\Collection || $data[1] instanceof \think\Paginator): if( count($data[1])==0 ) : echo "" ;else: foreach($data[1] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[6]) || $data[6] instanceof \think\Collection || $data[6] instanceof \think\Paginator): if( count($data[6])==0 ) : echo "" ;else: foreach($data[6] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[11]) || $data[11] instanceof \think\Collection || $data[11] instanceof \think\Paginator): if( count($data[11])==0 ) : echo "" ;else: foreach($data[11] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[16]) || $data[16] instanceof \think\Collection || $data[16] instanceof \think\Paginator): if( count($data[16])==0 ) : echo "" ;else: foreach($data[16] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[17]) || $data[17] instanceof \think\Collection || $data[17] instanceof \think\Paginator): if( count($data[17])==0 ) : echo "" ;else: foreach($data[17] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                  </tr>
                  <tr>
                      <th rowspan="2">下午</th>
                      <th>三</th>
                      <td style="text-align: center;"><?php if(is_array($data[2]) || $data[2] instanceof \think\Collection || $data[2] instanceof \think\Paginator): if( count($data[2])==0 ) : echo "" ;else: foreach($data[2] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[7]) || $data[7] instanceof \think\Collection || $data[7] instanceof \think\Paginator): if( count($data[7])==0 ) : echo "" ;else: foreach($data[7] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[12]) || $data[12] instanceof \think\Collection || $data[12] instanceof \think\Paginator): if( count($data[12])==0 ) : echo "" ;else: foreach($data[12] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[17]) || $data[17] instanceof \think\Collection || $data[17] instanceof \think\Paginator): if( count($data[17])==0 ) : echo "" ;else: foreach($data[17] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[22]) || $data[22] instanceof \think\Collection || $data[22] instanceof \think\Paginator): if( count($data[22])==0 ) : echo "" ;else: foreach($data[22] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                  </tr>
                  <tr>
                      <th>四</th>
                      <td style="text-align: center;"><?php if(is_array($data[3]) || $data[3] instanceof \think\Collection || $data[3] instanceof \think\Paginator): if( count($data[3])==0 ) : echo "" ;else: foreach($data[3] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[8]) || $data[8] instanceof \think\Collection || $data[8] instanceof \think\Paginator): if( count($data[8])==0 ) : echo "" ;else: foreach($data[8] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[13]) || $data[13] instanceof \think\Collection || $data[13] instanceof \think\Paginator): if( count($data[13])==0 ) : echo "" ;else: foreach($data[13] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[18]) || $data[18] instanceof \think\Collection || $data[18] instanceof \think\Paginator): if( count($data[18])==0 ) : echo "" ;else: foreach($data[18] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[23]) || $data[23] instanceof \think\Collection || $data[23] instanceof \think\Paginator): if( count($data[23])==0 ) : echo "" ;else: foreach($data[23] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                  </tr>
                  <tr >
                      <th height="60" colspan="2">晚上</th>
                      <td style="text-align: center;"><?php if(is_array($data[4]) || $data[4] instanceof \think\Collection || $data[4] instanceof \think\Paginator): if( count($data[4])==0 ) : echo "" ;else: foreach($data[4] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[9]) || $data[9] instanceof \think\Collection || $data[9] instanceof \think\Paginator): if( count($data[9])==0 ) : echo "" ;else: foreach($data[9] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[14]) || $data[14] instanceof \think\Collection || $data[14] instanceof \think\Paginator): if( count($data[14])==0 ) : echo "" ;else: foreach($data[14] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[19]) || $data[19] instanceof \think\Collection || $data[19] instanceof \think\Paginator): if( count($data[19])==0 ) : echo "" ;else: foreach($data[19] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                      <td style="text-align: center;"><?php if(is_array($data[24]) || $data[24] instanceof \think\Collection || $data[24] instanceof \think\Paginator): if( count($data[24])==0 ) : echo "" ;else: foreach($data[24] as $k=>$vo): ?>
                       <?php echo $vo['table_username']; ?>,
                 <?php endforeach; endif; else: echo "" ;endif; ?></td>
                  </tr>
          </table>
          <div class="p1">
                 <font>
              <em>注释:</em>2016-2017学期班级课表。
              </font>
          </div>
      </div> 



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
