<?php

namespace app\user\controller;
use phpmailer\phpmailer;
use think\Controller;

class Email extends Controller
{
    //
    public function email()  
    {  
        $c_email = $_POST['c_email'];
        $c_name = $_POST['c_name'];
        $c_title = $_POST['c_title'];
        $c_text = $_POST['c_text'];
        $user_name = session('user.user_username');
        $toemail = $c_email;//定义收件人的邮箱  
        $mail = new PHPMailer();  
        $mail->isSMTP();// 使用SMTP服务  
        $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码  
        $mail->Host = "smtp.qq.com";// 发送方的SMTP服务器地址  
        $mail->SMTPAuth = true;// 是否使用身份验证  
        $mail->Username = "2710279722@qq.com";;// 发送方的163邮箱用户名，就是你申请163的SMTP服务使用的163邮箱</span><span style="color:#333333;">  
        $mail->Password = "lisqhenwphhzdhce
        ";// 发送方的邮箱密码，注意用163邮箱这里填写的是“客户端授权密码”而不是邮箱的登录密码！</span><span style="color:#333333;">  
        $mail->SMTPSecure = "ssl";// 使用ssl协议方式</span><span style="color:#333333;">  
        $mail->Port = 465;// 163邮箱的ssl协议方式端口号是465/994  
       //以上内容没错
        $mail->setFrom("2710279722@qq.com",$user_name);// 设置发件人信息，如邮件格式说明中的发件人，这里会显示为Mailer(xxxx@163.com），Mailer是当做名字显示  
        $mail->addAddress($toemail,$c_name);// 设置收件人信息，如邮件格式说明中的收件人，这里会显示为Liang(yyyy@163.com)  
        $mail->addReplyTo("2710279722@qq.com","Reply");// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址  
        //$mail->addCC("xxx@163.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)  
        //$mail->addBCC("xxx@163.com");// 设置秘密抄送人(这个人也能收到邮件)  
        //$mail->addAttachment("bug0.jpg");// 添加附件  
        $mail->Subject = $c_text;// 邮件标题  
        $mail->Body = $c_text;// 邮件正文  
        //$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用  
        if(!$mail->send()){// 发送邮件  
            //echo "Message could not be sent.";  
            //header("Location: {:url('user/email/sendfail')}");
            //echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息  
            return $this->fetch('sendfail');
        }else{  
            //echo '发送成功';
            //header("Location: {:url('user/email/sendsuc')}");
            //echo "<script>setTimeout('window.location.href='index'',5000)</script>";
            return $this->fetch('sendsuc');
        }  
    }
    public function index()
    {
        return $this->fetch();
    }  
    public function sendsuc(){
        return $this->fetch();
    }
    public function sendfail(){
        return $this->fetch();
    }
}