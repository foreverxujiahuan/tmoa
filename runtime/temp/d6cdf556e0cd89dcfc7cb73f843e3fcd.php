<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:97:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\personinfo\portrait.html";i:1523175345;}*/ ?>
<?php header("content-type:text/html;charset=utf-8");  
// 连接数据库  
$conn=@mysql_connect("localhost","root","root")  or die(mysql_error());  
@mysql_select_db('tmoa',$conn) or die(mysql_error()); 
// 判断action  
$action = isset($_REQUEST['action'])? $_REQUEST['action'] : ''; 
$ID = session('user.user_id');
// 上传图片  
//test
$id = isset($_GET['user_id'])? intval($_GET['user_id']) : 0;  
$sqlstr = "select * from lo_user where user_id=$id";  
$query = mysql_query($sqlstr) or die(mysql_error());  
$thread = mysql_fetch_assoc($query);  
if($thread){  
    header('content-type:'.$thread['type']);  
    echo $thread['binarydata'];  
    exit();  
} 
// --test
if($action=='add'){  
    $image = mysql_real_escape_string(file_get_contents($_FILES['photo']['tmp_name']));  
    $type = $_FILES['photo']['type'];  
    //$sqlstr = "insert into lo_user(type,binarydata) values('".$type."','".$image."')";  
    $sqlstr ="update lo_user set type='$type',binarydata='$image' where user_id=$ID";
    @mysql_query($sqlstr) or die(mysql_error());
    echo "<script>
     alert('修改头像成功');
     window.location.href='index.html'; 
    </script>";  
    //header('location:portrait.html');  
    exit();  
// 显示图片  
}elseif($action=='show'){  
    $id = isset($_GET['user_id'])? intval($_GET['user_id']) : 0;  
    $sqlstr = "select * from lo_user where user_id=$id";  
    $query = mysql_query($sqlstr) or die(mysql_error());  
    $thread = mysql_fetch_assoc($query);  
    if($thread){  
        header('content-type:'.$thread['type']);  
        echo $thread['binarydata'];  
        exit();  
    }  
}else{  
// 显示图片列表及上传表单  
?>  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
 <head>  
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="/static/user/css/bootstrap.min.css">  
  <title> upload image to db demo </title>  
  <style>
       .portrait{
           border-radius: 50px;
       }
       .main{
           width:35rem;
           height:25rem;
           margin-left:20%;
           margin-top:15rem;
           background-image:url(/static/user/image/po_form_bg.jpg);
           background-repeat:no-repeat;
           background-size:100% 100%;
           background-repeat:repeat-x;
       }
       .portrait_form{
           border:2px;
       }
       .first_p{
           margin-left:3rem;
           padding-top:2rem;
           font-size:1rem;
       }
       .second_p{
           margin-top:2rem;
           margin-left:2rem;
       }
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
    margin-left:18rem;
    margin-top:10rem;
}
.php_p1{
    margin-left:3rem;
    margin-top:-14rem;
    font-size:2rem;
}
.php_p2{
    margin-left:4rem;
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
    margin-left:18rem;
    margin-top:-1rem;
}
      </style>
      <script>
    function fun1()
    {
        window.location.href="<?php echo url('user/personinfo/index'); ?>";
    }
          </script>
 </head>  
  
 <body style="background-image:url(/static/user/image/portrait_bg.jpg);background-repeat:no-repeat;background-size:100% 100%;height:1020px;background-repeat:repeat-x"> 
     <div class="main"> 
    <form name="form1" method="post" action="portrait.html" enctype="multipart/form-data" class="portrait_form">  
  <p class="first_p">上传头像：<input type="file" name="photo" class="file"></p>  
  <p class="second_p"><input type="hidden" name="action" value="add"><input type="submit" name="b1" value="提交" class="submit"></p> 
  <p class="second_p"><input type="hidden" name="action" value="add"><input type="button" name="b1" value="返回" class="button1" onclick="fun1()"></p> 
  </form>  

<?php  
    /*$sqlstr = "select * from lo_user order by user_id desc";  
    $query = mysql_query($sqlstr) or die(mysql_error()); 
    $result = array();  
    while($thread=mysql_fetch_assoc($query)){  
        $result[] = $thread;  
    } */ 
       //echo $id;
      
        echo '<p class="php_p1">当前头像</p>';
        echo '<p class="php_p2"><img src="portrait.html?action=show&user_id='.session('user.user_id').'" width="80" class="portrait"></p>';  
        //echo session('user.user_id');
      
?>  
</div>
</body>  
</html>  
<?php  
}  
?>