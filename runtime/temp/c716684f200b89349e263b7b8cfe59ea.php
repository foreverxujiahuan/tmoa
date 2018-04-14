<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"E:\phpstudy\phpStudy_2016.11.03\WWW\tmoa\public/../application/user\view\gest\index.html";i:1523070259;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>OA注册</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/static/user/css/bootstrap.css">
    <link href="/static/user/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/static/user/css/awesome-bootstrap-checkbox.css"/>   
     <link href="/static/user/css/bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="/static/user/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/static/user/css/gest.css">
    <script src="/static/user/js/gest.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
      
    <![endif]-->
    <style>
    .error{
      color:red;
    }
    .success{
      color:green;
    }
    .default{
       color:#999;
    }
    </style>
    <script type="text/javascript"> 
      function checkForm(){ 
       var nametip = checkUserName(); 
       var passtip = checkPassword();  
       //var conpasstip = ConfirmPassword(); 
       var phonetip = checkPhone();
       var emailtip = checkEmail();
       var realnametip = checkRealName();
       return nametip && passtip && conpasstip && phonetip &&realnametip; 
       } 
       //验证用户名   
       function checkUserName(){ 
       var username = document.getElementById('userName'); 
       var errname = document.getElementById('nameErr'); 
       var pattern = /^\w{3,}$/;  //用户名格式正则表达式：用户名要至少三位
       if(username.value.length == 0){ 
         errname.innerHTML="用户名不能为空"
         errname.className="error"
         return false; 
         } 
       if(!pattern.test(username.value)){ 
         errname.innerHTML="用户名不合规范"
         errname.className="error"
         return false; 
         } 
        else{ 
          errname.innerHTML="OK"
          errname.className="success"; 
          return true; 
          } 
       } 
       function checkRealName(){
        var realname = document.getElementById('realName'); 
        var errname = document.getElementById('realnameErr'); 
        var pattern = /^[\u4E00-\u9FA5]{1,5}$/;  //用户名格式正则表达式：用户名要至少两位 
        if(realname.value.length == 0){ 
          errname.innerHTML="用户名不能为空"
          errname.className="error"
          return false; 
          } 
        if(!pattern.test(realname.value)){ 
          errname.innerHTML="用户名不合规范"
          errname.className="error"
          return false; 
          } 
         else{ 
           errname.innerHTML="OK"
           errname.className="success"; 
           return true; 
           } 
       }
       function checkEmail(){
         var email = document.getElementById('email').value;
         var erremail = document.getElementById('emailErr');
         var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
         isok = reg.test(email);
         if(!isok){
           erremail.innerHTML="邮箱格式不正确";
           erremail.className="error";
           return false;
         }
         else{
           erremail.innerHTML="OK";
           erremail.className="success";
           return true;
         }
       }
       //验证密码   
     function checkPassword(){ 
       var userpasswd = document.getElementById('userPasword'); 
       var errPasswd = document.getElementById('passwordErr'); 
       var pattern = /^\w{4,8}$/; //密码要在4-8位 
       if(!pattern.test(userpasswd.value)){ 
         errPasswd.innerHTML="密码不合规范"
         errPasswd.className="error"
         return false; 
         } 
        else{ 
          errPasswd.innerHTML="OK"
          errPasswd.className="success"; 
          return true; 
          } 
       } 
       //确认密码 
       function ConfirmPassword(){ 
       var userpasswd = document.getElementById('userPasword'); 
       var userConPassword = document.getElementById('userConfirmPasword'); 
       var errConPasswd = document.getElementById('conPasswordErr'); 
       if((userpasswd.value)!=(userConPassword.value) || userConPassword.value.length == 0){ 
         errConPasswd.innerHTML="上下密码不一致"
         errConPasswd.className="error"
         return false; 
         } 
        else{ 
          errConPasswd.innerHTML="OK"
          errConPasswd.className="success"; 
          return true; 
          }    
       } 
     //验证手机号 
       function checkPhone(){ 
       var userphone = document.getElementById('userPhone'); 
       var phonrErr = document.getElementById('phoneErr'); 
       var pattern = /^1[34578]\d{9}$/; //验证手机号正则表达式 
       if(!pattern.test(userphone.value)){ 
         phonrErr.innerHTML="手机号码不合规范"
         phonrErr.className="error"
         return false; 
         } 
        else{ 
          phonrErr.innerHTML="OK"
          phonrErr.className="success"; 
          return true; 
          } 
       } 
     </script>
  </head>
  <body>
    <form action="" method="post" onSubmit="return checkForm()">
    <div class="container px-2 py-5 ">
         <div class="div ml-2" style="overflow:hidden;">
          <div id="up"></div>
          <div class="row" style="border-bottom: 1px solid #33333329;" >
            <div class="col-md-2  d-none d-sm-block ">
              <div class="left-1  "  style="height: 200px;text-align: center;line-height: 40px;">
                <span class="">账户信息</span>
              </div>
            </div>
          
            <div class=" col-md-7 col-xs-7  offset-md-2 " >
              <div class="group_1" id="form-itemGroup">
                <label for="userName">
                  用户名
                </label>  
                <input type="text"   name="user_name" id="userName" class="userName mr-5" onBlur="checkUserName()" oninput="checkUserName()" placeholder="请输入至少3位英文的用户名">
                <span class="  offset-md-1 col-xs-7  " id="nameErr"></span> 
              </div>
             <div class="group_2">
                <label for="">
                 密码
                </label>  
                <input type="text" id="userPasword" class="userName mr-5" name="user_password" onBlur="checkPassword()" oninput="checkPassword()" placeholder="请输入4到8位的密码">
                <span class="default" id="passwordErr"></span> 
              </div>
               <div class="group_3 mb-3" >
                <label for="">
                 手机号
                </label>  
                <input type="text" name="user_phone" id="userPhone" class="userName mr-5" onBlur="checkPhone()" oninput="checkPhone()" placeholder="请输入11位手机号码">
                <span class="default" id="phoneErr"></span> 
              </div>
            </div>
          </div>
           <div class="row" style="border-bottom: 1px solid #33333329">
            <div class="col-md-2  d-none d-sm-block ">
              <div class="left-2" style="height: 250px;text-align: center;line-height: 80px;">
                <span>个人信息</span>
              </div>
            </div>
          
            <div class="col-md-6 col-xs-6 offset-md-2" >
              <div class="group_1">
                <label for="">
                  姓名
                </label>  
                <input type="text" name="user_realname" id="realName" class="userName mr-5" onBlur="checkRealName()" oninput="checkRealName()" placeholder="请输入真实姓名">
                <span class="default" id="realnameErr"></span> 
              </div>
               <div class="group_2">
                <label for="">
                 邮箱
                </label>  
                <input type="text" name="user_email" id="email" class="username mr-5" onBlur="checkEmail()" oninput="checkEmail()" placeholder="请输入邮箱">
                <span class="default" id="emailErr"></span> 
              </div>
              
              <div class="group_4" style="float: left; margin-right: 50px;">
                <label>性别
                   </label>
                </div>
                  <div class="radio radio-info" style="margin-top: 20px; " >
                    
                      <input type="radio" name="user_sex" id="radio3" value="男" style="border-radius: 50px;outline: none;">
                      <label for="radio3" style="margin-right: 15px;outline: none;">
                          男
                      </label>
                       <input  type="radio" name="user_sex" id="radio4" value="女">
                      <label for="radio4">
                          女
                      </label>
                  </div>
                   <div class="group_3 mb-3">
                    <label for="">
                     生日
                    </label>  
                    <input type="date" placeholder="请输入出生年月" name="user_birthday">
                  </div>
            </div>
          </div>
          <div class="row" style="letter-spacing: 2px;border-bottom: 1px solid #33333329">
             <div class="col-md-2 d-none d-sm-block">
              <div class="left-3" style="width:200px;text-align: center;line-height: 60px;">
                <span>注册</span>
              </div>
              </div>   
               <div class="col-md-5 offset-md-2 my-3 col-sm-5 ">
                 
                <input type="submit" value="立即注册"  class="btn btn-primary " style="padding: 10px;">
               </div>
         </div>
         
  </div>
  </div>
    </form>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
