<?php  
session_start();
require("libs/class.phpmailer.php"); 
include("libs/class.smtp.php");    
function smtp_mail( $sendto_email, $subject, $body, $extra_hdrs, $user_name){     
$mail = new PHPMailer();     
$mail->IsSMTP();                  // send via SMTP     
$mail->Host = "123.125.50.134";   // SMTP servers     
$mail->SMTPAuth = true;           // turn on SMTP authentication     
$mail->Username = "nygxk88";     // SMTP username  注意：普通邮件认证不需要加 @域名     
$mail->Password = "38485413#*"; // SMTP password     
$mail->From = "nygxk88@163.com";      // 发件人邮箱     
$mail->FromName =  "管理员";  // 发件人       
 $mail->CharSet = "GB2312";   // 这里指定字符集！     
$mail->Encoding = "base64";     
$mail->AddAddress($sendto_email,"username");  // 收件人邮箱和姓名     
$mail->AddReplyTo("yourmail@yourdomain.com","yourdomain.com");
$mail->AddAttachment('../gaoxy/1.jpg','xx.jpg');     
//$mail->WordWrap = 50; // set word wrap 换行字数     
 //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件     
 //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");     
$mail->IsHTML(true);  // send as HTML     
// 邮件主题     
$mail->Subject = $subject;     
// 邮件内容  
$body= "<html><head></head><body><b>".$_SESSION['username'].",欢迎使用北京市计算中心高血压健康平台。<b/></body></html>";  
$mail->Body =$body;                                                                           
$mail->AltBody ="text/html";     
 if(!$mail->Send())     
{     
 echo "邮件发送有误 <p>";     
 echo "邮件错误信息: " . $mail->ErrorInfo;     
   exit;     
  }     
 else {     
    echo "$user_name 邮件发送成功!<br />";     
  }     
}     
// 参数说明(发送到, 邮件主题, 邮件内容, 附加信息, 用户名)     
//smtp_mail("xxgxk88@163.com", "欢迎使用phpmailer！", "NULL", "yourdomain.com", "username");     
?>   
