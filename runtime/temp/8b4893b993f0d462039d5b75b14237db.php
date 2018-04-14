<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\diary\write.html";i:1523023563;s:72:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\application\user\view\base.html";i:1523171858;}*/ ?>

<!DOCTYPE html>
<html>
<head>
  <title>OAtest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"  >
  <!--<link href="/static/admin/css/site.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="/static/user/css/bootstrap.css">
  <link href="/static/user/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="/static/user/css/font-awesome.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="/static/user/css/xjhtest.css">
   <link rel="stylesheet" href="/static/user/css/nav.css">
    <link rel="stylesheet" href="/static/user/css/timetable.css">
    <link href="/static/user/css/daily.css" rel="stylesheet">
     <link rel="stylesheet" href="/static/user/css/car.css"><link rel="icon" type="image/png" href="logo.jpg">
     <link rel="stylesheet" href="/static/layui/css/layui.css" />
     <link rel="stylesheet" href="/static/user/css/por.css">
     
     <link rel="stylesheet" href="/static/user/css/person.css">
  <link rel="stylesheet" href="/static/user/css/por.css">
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js "></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js "></script>
  <script src="/static/user/js/personinfo.js"></script>
    <script src="/static/layui/lay/modules/jquery.js"></script>
   <script src="/static/layui/lay/modules/layui.js"></script>
  <script src="/static/layui/layui.js"></script>
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js "></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js "></script>
  <script src="/static/user/js/bootstrap.min.js "></script>
  <script src="/static/user/js/xjh.js"></script>
   <script>
        window.hdjs={};
        //组件目录必须绝对路径(在网站根目录时不用设置)
        window.hdjs.base = '/static/node_modules/hdjs';
        //上传文件后台地址
        window.hdjs.uploader = 'test/php/uploader.php?';
        //获取文件列表的后台地址
        window.hdjs.filesLists = 'test/php/filesLists.php?';
    </script>
    <script src="/static/admin/bootstrap-3.3.0-dist/dist/js/bootstrap.min.js"></script>
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
<style>
    .submit {
margin-right:11px;
background:#0091e6;
border: none;
outline: none;
padding:8px 30px;
cursor: pointer;
color: #FFF;
font-size: 0.9em;
border-radius: .3em;
-webkit-border-radius: .3em;
-moz-border-radius: .3em;
-o-border-radius: .3em;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
font-weight: 600;
margin-left:30%;
margin-top:5rem;
}
.button1{
margin-right:11px;
background:#0091e6;
border: none;
outline: none;
padding:8px 30px;
cursor: pointer;
color: #FFF;
font-size: 0.9em;
border-radius: .3em;
-webkit-border-radius: .3em;
-moz-border-radius: .3em;
-o-border-radius: .3em;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
font-weight: 600;
margin-left:40%;

}
.portrait{
     border-radius: 50px;
 }
 .portrait_form{
  background-image:url(/static/user/image/po_form_bg.jpg);
  background-repeat:no-repeat;
  background-size:100% 100%;
  height:300px;
  background-repeat:repeat-x;
 }
 .first_p{
     margin-left:4rem;
     padding-top:2rem;
     font-size:1rem;
 }
 .second_p{
     margin-top:0rem;
     margin-left:3rem;
 }
 .third_p{
     margin-top:-3.3rem;
     margin-left:10rem;
 }
 .php_p1{
     margin-left:4rem;
     margin-top:-8rem;
 }
 .php_p2{
     margin-left:4rem;
     
 }
 .portrait1{
     width:80px;
     height:80px;
     float:left;
     border-radius: 50px;
 }
</style>
</head>
<body>

  <nav class="navbar sticky-top  navbar-expand-lg  bg-dark " style="padding: 0;">
    <div class="container" >
     
         <a class="navbar-brand ml-4"  style="color: #fff;font-family:华文新魏;font-size:24px;" href="<?php echo url('user/index/index'); ?>"><div style="background-image: url(/static/user/image/daily_1.jpg);background-repeat: no-repeat;background-size: 100% 100%;border-radius: 20px; height: 40px;width: 40px;" class="pl-5 pt-2">科技创业中心</div></a>
  
     <button class="navbar-toggler navbar-dark"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="  navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon" ></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto ">
              <ul id="d">
               <li  onmouseout = "func1()"  onmouseover = "func()" class='nav__menu nav-item dropdown nav-3'>
                   <a class="nav-item " id="a" href=""   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="text-decoration: none;" >首页</a>
                  <ul   class='nav__menu-lists nav__menu--5-lists  ' aria-labelledby="a" >
                  <li   class='nav__menu-items '>个人门户</li>
                  <li class='nav__menu-items'>办公门户</li>
                 
                 </ul>
               </li> 
             </ul> 
             <ul>
            <li class="nav-item nav-2">
              <a class="nav-link " href="<?php echo url('user/email/index'); ?>">邮件</a>
            </li>
          </ul>
          <ul>
            <li class="nav-item nav-2">
              <a class="nav-link " href="<?php echo url('user/index/timetable'); ?>">课程</a>
            </li>
          </ul>
                <ul>
               <li  onmouseout = "func2()"  onmouseover = "func_2()" class='nav__menu nav-item mx-3 nav-4'><a id="b" href="" style="text-decoration: none;">个人办公</a>
                 <ul class='nav__menu-lists nav__menu--5-lists'>
                  <li class='nav__menu-items' ><a href="<?php echo url('user/diary/index'); ?>">日志</a></li>
                  <li class='nav__menu-items'><a href="<?php echo url('user/summary/index'); ?>">总结</a></li>
                 <li class='nav__menu-items'><a href="<?php echo url('user/personinfo/index'); ?>">个人中心</a></li>
                 <li class='nav__menu-items' ><a href="<?php echo url('user/personpic/index'); ?>">个人资料</a></li>
                 </ul>
               </li> 
             </ul>
               <ul>
               <li  onmouseout = "func3()"  onmouseover = "func_3()"  class='nav__menu nav-item nav-4 mx-3'><a id="c" href="" style="text-decoration: none;">综合办公</a>
                 <ul class='nav__menu-lists nav__menu--5-lists'>
                  <li class='nav__menu-items'>公告</li>
                  <li class='nav__menu-items'>信心中心</li>                
                 </ul>
               </li> 
             </ul>     

         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li class="por">
                <?php  
                             // 连接数据库  
                             $conn = mysqli_connect("localhost","root","root","tmoa");
                             $sql = "SELECT*FROM lo_user";  
                             $result = mysqli_query($conn,$sql);
                             $por = array();
                             $i = 1;
                             while($row = mysqli_fetch_array($result))
                               {
                                 $por[$i] = $row['binarydata'];
                                 $i=$i+1;
                               }
                              if($por[session('user.user_id')] == null){
                                echo '<p><img src="/static/user/image/po.png" class="portrait"></p>';
                              }else{
                               echo '<p><img src="../personinfo/portrait.html?user_id='.session('user.user_id').'" class="portrait"></p>';
                              }  
                             ?>  
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle new_style" data-toggle="dropdown" role="button" style="color:#9d9d9d" >
                        
                        <?php echo session('user.user_name'); ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu new_style_next">
                        <li><a href="<?php echo url('user/entry/pass'); ?>">修改密码</a></li>
                        <li><a href="<?php echo url('user/personinfo/index'); ?>">个人中心</a></li>
                        <li><a href="<?php echo url('user/login/logout'); ?>">退出</a></li>
                    </ul>
                </li>
            </ul>

              <!-- <i class="  fa fa-mortar-board " style="font-size:30px;color: #fff"></i> -->
              <!-- <i class="fa fa-pencil-square-o mr-5" style="font-size:24px"></i> -->


           <span class='glyphicon glyphicon-user' aria-hidden='true'></span>
          </div>
   </div>
</nav>    
  
    


<div class="container" >
           <div class="row py-3 pl-3"  style="letter-spacing: 2px;" >
                   <h5 class ="col-md-3">我的工作日志</h5>
                   <span class=" offset-md-7 " id="timeP"></span> 
                
           </div>
          
          <div class="D_content  mr-5" style="background-color: #fff;letter-spacing: 2px;"> 
             <div class="row" class="D_left" style="height: 100%; ">
                <div class="col-3 " style="padding-right: 0px;border-right: 1px solid #000;">            
                        <div class="d-flex flex-column text-dark">
                        <div class="p-2 "><i class="fa fa-street-view mr-2" style="font-size:24px"></i>个人</div>
                        <hr>
                          <div class="p-2 list  " data-toggle="modal" data-target="#exampleModalCenter" >
                         <i class="fa fa-calendar"  style="font-size:24px"></i> 日历
                          </div>
                          
                          <div class="p-2 list "><i class="fa fa-check-square-o mr-2" style="font-size:24px"></i>评阅</div>
                       
                          <div class="p-2 list "><i class="fa fa-star-o mr-2"  style="font-size:24px"></i>共享日志</div>
                          <div class="p-2 list "><i class="fa fa-star mr-2" style="font-size:24px"></i>已关注日志</div>
                         
                        </div>
                </div>
                <div class="col-9" style="padding-left: 0px;">     
               
                  <div class="p-3 text-white" style="background-color: #b2c0d1;"><h5>超级管理员</h5></div>
               
                    
           <div class="layui-form-item mt-3 ">
                <div class="layui-inline">
              <label class="layui-form-label">标题</label>
              <div class="layui-input-inline">
                <input type="text" name="number" lay-verify="required|number" autocomplete="off" class="layui-input">
              </div>
            </div>
            <div class="layui-inline">
              <label class="layui-form-label">日期</label>
              <div class="layui-input-inline">
                <input type="text" class="layui-input" id="test1">
              </div>
            </div>
               <div class="layui-inline">
               <label class="layui-form-label">方位图</label>
       
               <i class="layui-icon" onclick="showmap()" style="font-size: 16px; color: red;">&#xe715;</i>  
            
            </div>
          </div>
                 <textarea class="mx-auto" id="container1" style="height:300px;width:96%;"></textarea>
                   <div class="layui-form-item">
                  <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                  </div>
                </div>

          <!--        <fieldset class="site-demo-button" style="margin-top: 10px;">
            
             <div>
               
               <button class="layui-btn layui-btn-normal">百搭按钮</button>
               <button class="layui-btn layui-btn-normal">百搭按钮</button>
               <button class="layui-btn layui-btn-normal">百搭按钮</button>
               
             </div>
                            </fieldset>   -->  
               </div>

             
         </div>
       </div>  
          <script>
              layui.use('laydate', function(){
                var laydate = layui.laydate;
                
                //执行一个laydate实例
                laydate.render({
                  elem: '#test1' //指定元素
                });
              });
              </script>
               <script>
                      require(['hdjs'], function (hdjs) {
                         hdjs.ueditor('container1', {hash: 2, data: 'hd'}, function (editor) {
                              console.log(editor)
                          });
                      })
                  </script>

<script>
    require(['hdjs'])
    function showmap() {
        require(['hdjs'], function (hdjs) {
            hdjs.map({lng:121.480237,lat:31.236305}, function (res) {
                //返回值是数组
                console.log("地址:" + res.address + ";经度" + res.lng + ";纬度:" + res.lat);
            });
        });
    }
</script>
       <script>
    require(['hdjs']);
    //上传图片
    function upImagePc() {
        require(['hdjs'], function (hdjs) {
            var options = {
                multiple: false,//是否允许多图上传
                //data是向后台服务器提交的POST数据
                data: {name: '后盾人', year: 2099},
            };
            hdjs.image(function (images) {
                //上传成功的图片，数组类型
                $("[name='thumb']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
            }, options)
        });
    }

    //移除图片
    function removeImg(obj) {
        $(obj).prev('img').attr('src', '../dist/static/image/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
</script>
  
      <footer>
        <div class="container" style="padding: 0px; font-weight:normal;">
             <span class="d-block p-2 btn-secondary  text-white mt-5 border border-dark" >
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
  
          <span><a href="#" style="color:black">首页</a></span>
          </ol>
        </nav>
        </span>
        <span class="d-block p-2 btn-secondary  text-white"><a href="#" style="color:white">OA 帮助</a><span class="mx-3">|</span><a href="#" style="color:white">意见反馈</a><span class="mx-3">|</span><a href="#" style="color:white">联系我们</a><span class="float-md-right">Powered by TMOA 2018.3.3</span></span>

        </div>
      </footer>
</body>
</html>

