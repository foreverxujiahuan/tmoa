<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\login\login.html";i:1523070539;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>OA Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link href="/static/user/css/style.css" rel='stylesheet' type='text/css' />
        <!--<link rel="stylesheet" href="css/style.css"> >

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body style="background-image:url(/static/user/image/login_bg.jpg);background-repeat:no-repeat;background-size:100% 100%;height:828px;background-repeat:repeat-x">

        <div class="page-container">
            <h1 style="color:black">OA系统登陆</h1>
            <form action="" method="post">
                <input type="text" name="user_name" class="username" placeholder="Username">
                <input type="password" name="user_password" class="password" placeholder="Password">
                <button type="submit">登陆</button>
            </form>
           <div>
                <button type="submit" onclick="javascript:window.location.href='<?php echo url('user/gest/index'); ?>'">注册</button>
           </div>
        </div>
		
        <!-- Javascript -->
        <script src="js/jquery-1.8.2.min.js"></script>
     
        <script src="js/scripts.js"></script>

    </body>

</html>