<?php
include("./classes/EmailSender.php");
include("./classes/MyEmailServer.php");

$path = "http://localhost/btth3/bai1";

$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$to = 'tuan260202@gmail.com';
$username = 'abcd';
$code_hash = 'def';
$subject = "[Kích hoạt tài khoản]";
$message = "Kích hoạt tài khoản <a href='$path/activate.php?user=$username&code=$code_hash'>Tại đây.</a>";
$active = $emailSender->send($to, $subject, $message);
if ($active) {
    echo "<p style='color:green'>Đã gửi mail kích hoạt, vui lòng vào mail kích hoạt</p>";
} else {
    echo "<p style='color:red'>Gửi mail kích hoạt không thành công</p>";
}
