<?php  
session_start();
require("libs/class.phpmailer.php"); 
include("libs/class.smtp.php");    
function smtp_mail( $sendto_email, $subject, $body, $extra_hdrs, $user_name){     
$mail = new PHPMailer();     
$mail->IsSMTP();                  // send via SMTP     
$mail->Host = "123.125.50.134";   // SMTP servers     
$mail->SMTPAuth = true;           // turn on SMTP authentication     
$mail->Username = "nygxk88";     // SMTP username  ע�⣺��ͨ�ʼ���֤����Ҫ�� @����     
$mail->Password = "38485413#*"; // SMTP password     
$mail->From = "nygxk88@163.com";      // ����������     
$mail->FromName =  "����Ա";  // ������       
 $mail->CharSet = "GB2312";   // ����ָ���ַ�����     
$mail->Encoding = "base64";     
$mail->AddAddress($sendto_email,"username");  // �ռ������������     
$mail->AddReplyTo("yourmail@yourdomain.com","yourdomain.com");
$mail->AddAttachment('../gaoxy/1.jpg','xx.jpg');     
//$mail->WordWrap = 50; // set word wrap ��������     
 //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment ����     
 //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");     
$mail->IsHTML(true);  // send as HTML     
// �ʼ�����     
$mail->Subject = $subject;     
// �ʼ�����  
$body= "<html><head></head><body><b>".$_SESSION['username'].",��ӭʹ�ñ����м������ĸ�Ѫѹ����ƽ̨��<b/></body></html>";  
$mail->Body =$body;                                                                           
$mail->AltBody ="text/html";     
 if(!$mail->Send())     
{     
 echo "�ʼ��������� <p>";     
 echo "�ʼ�������Ϣ: " . $mail->ErrorInfo;     
   exit;     
  }     
 else {     
    echo "$user_name �ʼ����ͳɹ�!<br />";     
  }     
}     
// ����˵��(���͵�, �ʼ�����, �ʼ�����, ������Ϣ, �û���)     
//smtp_mail("xxgxk88@163.com", "��ӭʹ��phpmailer��", "NULL", "yourdomain.com", "username");     
?>   
