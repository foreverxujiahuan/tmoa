<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:95:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\information\index.html";i:1522080839;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <title>info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"  >

  <link rel="stylesheet" href="/static/user/css/bootstrap.css"> 
  <link rel="stylesheet" href="/static/user/css/information.css">
   <link rel="stylesheet" href="/static/user/css/bootstrap.min.css">
   <link href="/static/user/css/daily.css" rel="stylesheet">
   <link rel="stylesheet" href="/static/user/css/font-awesome.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/static/user/css/xjhtest.css">
   <link rel="icon" type="image/png" href="logo.jpg">
   <link rel="stylesheet" href="/static/user/css/nav.css">
     <link rel="stylesheet" href="/static/user/css/car.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js "></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js "></script>
  <script src="/static/user/js/bootstrap.min.js "></script>
  <script src="/static/user/js/xjh.js"></script>

</head>

<body>
  <nav class="navbar sticky-top  navbar-expand-lg  bg-dark " style="padding: 0;">
    <div class="container" >
     
         <a class="navbar-brand ml-4"  style="color: #fff;" href="<?php echo url('user/entry/index'); ?>"><div style="background-image: url(/static/user/image/daily_1.jpg);background-repeat: no-repeat;background-size: 100% 100%;border-radius: 20px; height: 40px;width: 40px;"></div></a>
  
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
              <a class="nav-link " href="#">邮件</a>
            </li>
          </ul>
          <ul>
            <li class="nav-item nav-2">
              <a class="nav-link " href="#">短信</a>
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle new_style" data-toggle="dropdown" role="button" style="color:#9d9d9d" >
                        <i class="fa fa-w fa-user"></i>
                        <?php echo session('user.user_username'); ?>
                        
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu new_style_next">
                        <li><a href="<?php echo url('user/personpas/index'); ?>">修改密码</a></li>
                        <li><a href="<?php echo url('user/personinfo/index'); ?>">个人中心</a></li>
                        <li><a href="<?php echo url('user/login/index'); ?>">退出</a></li>
                    </ul>
                </li>
            </ul>

              <!-- <i class="  fa fa-mortar-board " style="font-size:30px;color: #fff"></i> -->
              <!-- <i class="fa fa-pencil-square-o mr-5" style="font-size:24px"></i> -->


           <span class='glyphicon glyphicon-user' aria-hidden='true'></span>
          </div>
   </div>
</nav>    
      <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row py-3 pl-3"  style="letter-spacing: 2px;" >
                            <h5 class ="col-lg-10 col-md-10 col-sm-10 col-xs-10 white_text">信息中心</h5>
                            <span class="white_text" id="timeP"></span>  
                    </div>
             </div>
         </div>
      </div>
      <div class="container" >
             <div class="D_content  mr-5" style="background-color: #fff;letter-spacing: 2px;"> 
                <div class="row" class="D_left" style="height: 100%; ">
                   <div class="col-3 " style="padding-right: 0px;border-right: 1px solid #000;">            
                           <div class="d-flex flex-column text-dark">
                           <div class="p-2 "><button class="btn btn-warning col-lg-4 col-md-4 col-sm-4 col-xs-4" id="info_btn">发布信息</button></div>
                           <hr>
                             <div class="p-2 list" data-toggle="modal" data-target="#exampleModalCenter" >
                            <i class="fa fa-book" aria-hidden="true" style="font-size:24px"></i>我的投稿
                             </div>
                             
                             <div class="p-2 list"><i class="fa fa-clock-o" style="font-size:24px"></i>我的审核</div>
                          
                             <div class="p-2 list"><i class="fa fa-newspaper-o"  style="font-size:24px"></i>信息中心</div>
                           </div>
                   </div>
                   <div class="col-9" style="padding-left: 0px;">     
                  
                     <div class="p-3 text-white" style="background-color: #b2c0d1;">
                       <ul>
                          <a href="#" class="info_menu"><li class="li_float info_menu">未读</li></a>
                          <a href="#" class="info_menu"><li class="li_float info_menu">已读</li></a>
                       </ul>
                    </div>
                      <div class="p-3 text-white " style="border-bottom: 1px solid #000"><button type="button" class="btn btn-primary mr-3">全部已读</button>
                      <form class="form-inline my-2 my-lg-0 float-md-right float-none">
                       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                     </div>
   
                             
                  </div>
            </div>
          </div>  
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
   </div> 
       </div>
</body>
</html>