<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\sign\index.html";i:1523076153;}*/ ?>
<?php
header("content-type:text/html;charset=utf-8");
//error_reporting(0);

session_start();
//首先链接数据库
$dbIp = '127.0.0.1';
$dbUser ='root';
$dbPwd = 'root';
$dbNm ='tmoa';
$dbUserTbl = 'lo_user';
$dbChkinTbl = 'lo_checkin';
$link = mysqli_connect($dbIp, $dbUser, $dbPwd);
if (!$link) {
    die('连接数据库失败。'.mysql_error());
}
$db_selected = mysqli_select_db($link,$dbNm);
if (!$db_selected){
    die('选择数据库失败。'.mysql_error());
}
date_default_timezone_set("PRC");
//获取今天的时间
$time = date("Y-m-d H:i:s");
//第一条sql语句，向lo_sign数据库中添加签到信息
$sql = "INSERT INTO lo_sign (userId,checkinTime) VALUES ('" . session('user.user_username')."','$time')";
//第二条sql语句，从数据库中选择userId为该用户的签到信息
$sql2="select * from lo_sign where userId='" . session('user.user_username')."'";
$result2=$link->query($sql2);
//获取今天的时间
$totaltime = date('y-m-d',time());
//获取sql2语句下的读取到的数据中的checkinTime数据
$count = 0;
$SignTime = null;
while($row=$result2->fetch_assoc()){
    $signTime = $row['checkinTime'];
    $SignTime = date('y-m-d',strtotime($signTime));
    
}
//将读取到的数据进行格式转变
//判断读取到的数据与今天的日期是否一样,一样则跳转到签到失败页面
if( $SignTime == $totaltime){
    header("Location:loginout.html");
    exit;
}
//执行往数据库中插入数据
$result_flag = mysqli_query($link,$sql);
if (!$result_flag) {
    die('签到数据插入失败，请联系管理员。<br>');
}
//跳转到登陆成功页面
    header("Location: loginsuccess.html");
    exit;
    //关闭数据库
$close_flag = mysql_close($link);
?>
