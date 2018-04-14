<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/admin\view\login\login.html";i:1523021871;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href=''>
    <link href="/static/admin/css/login.css" rel='stylesheet' type='text/css' />
    <link href="/static/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body  style="background-image:url(/static/admin/img/admin_bg.jpg);background-repeat:no-repeat;background-size:100% 100%;height:828px;background-repeat:repeat-x;height:920px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 login_main">
                <form class="form-horizontal" method="post" action="">
                    <span class="heading">OA人员管理系统登陆</span>
                    <div class="form-group">
                        <input class="form-control" id="inputEmail3" placeholder="用户名" name="admin_username">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group help">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="密　码" name="admin_password">
                        <i class="fa fa-lock"></i>
                        <a href="#" class="fa fa-question-circle"></a>
                    </div>
                    <div class="form-group">
                        <div class="main-checkbox">
                            <input type="checkbox" value="None" id="checkbox1" name="check"/>
                            <label for="checkbox1"></label>
                        </div>
                        <span class="text">Remember me</span>
                        <input type="submit" class="btn btn-default" value="登陆" >
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>