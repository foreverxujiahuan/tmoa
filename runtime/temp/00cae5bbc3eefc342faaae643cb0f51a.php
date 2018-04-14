<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/admin\view\\error\index_1.html";i:1522000023;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="bg-dark">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>跳转提示</title>
    <link href="/static/admin/bootstrap-3.3.0-dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/admin/admin.ui/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/static/admin/admin.ui/css/app.css" type="text/css"/>
    <link rel="stylesheet" href="/static/layui/css/layui.css" />
    <script src="/static/layui/lay/modules/jquery.js"></script>
   <script src="/static/layui/lay/modules/layui.js"></script>
  <script src="/static/layui/layui.js"></script>
</head>
<body>

      <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xxl">
      
    </div>
</section>
<!-- footer -->


  <script type="text/javascript">
        (function(){
            var msg1 = '<?php echo(strip_tags($msg));?>';
            var iurl = '<?php echo($url);?>';
            var wait = '<?php echo($wait);?>';
            var $code ='<?php echo($code);?>';

          if($code==0){
            	layui.use('layer', function(){
			  var layer = layui.layer;
			  layer.msg(msg1,{icon: 5,time:wait*2000});
			});   }
           else {
             layui.use('layer',function(){
             	var layer =layui.layer;
             	layer.msg(msg1,{icon: 6,time:wait*2000})
             }); 
         }
            setTimeout(function(){
                location.href=iurl;
            },1000)
        })();
    </script>



</body>
</html>
