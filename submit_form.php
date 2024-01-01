<?php  
$to = 'y2160299434@163.com';  // 收件人邮箱  
$name = $_POST['name'];  // 获取表单中提交的姓名  
$email = $_POST['email'];  // 获取表单中提交的邮箱  
  
// 设置SMTP参数  
$host = 'smtp.163.com';  // 163邮箱SMTP服务器地址  
$port = 465;  // 163邮箱SMTP服务器端口  
$username = 'y2160299434@163.com';  // 您的163邮箱用户名（不是邮箱地址）  
$password = 'Yhc20120210';  // 您的163邮箱密码（不是邮箱地址）  
$secure = true;  // 是否启用加密连接，此处选择true启用加密连接  
  
// 创建PHPMailer实例并设置参数...（此处省略具体代码）  
// ...  
// 发送邮件  
if ($mail->send()) {  
    echo '邮件发送成功！';  
} else {  
    echo '邮件发送失败！错误信息：' . $mail->ErrorInfo;  
}  
?>