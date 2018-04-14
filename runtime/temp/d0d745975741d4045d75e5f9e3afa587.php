<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\personpic\pass.html";i:1523176426;}*/ ?>
<?php
 $conn = mysqli_connect("localhost","root","root","tmoa");
 $res = mysqli_select_db($conn,"lo_user");
 $user_name = $_POST['user_name'];
 $user_phone = $_POST['user_phone'];
 $user_email = $_POST['user_email'];
 $user_realname = $_POST['user_realname'];
 $ID=session('user.user_id') ;
 $sql = "UPDATE lo_user SET user_name='$user_name',user_phone='$user_phone',user_realname='$user_realname',user_email='$user_email' where user_id=$ID";
 $res2 = mysqli_query($conn,$sql);
 if($res2)
 { 
   echo "<script>alert('修改成功')</script>";  
   echo "<script>window.location.href='index'</script>";
 }else
 {
   echo "<script>alert('修改失败')</script>";
   echo "<script>window.location.href='index'</script>";
 }
 ?>