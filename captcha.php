<?php
session_start();

// 创建图片
$image = imagecreate(90, 20);
$background_color = imagecolorallocate($image, 230, 111, 111);
$text_color = imagecolorallocate($image, 55, 200, 200); // 渐变颜色


// 生成随机验证码
$captcha_code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789"), 0, 6);
$_SESSION['captcha'] = $captcha_code;

// 将验证码写到图片上 

imagestring($image, 5, 17, 2, $captcha_code, $text_color); 


// 设置图片头部
header("Content-Type: image/png");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: -1");
imagepng($image);
imagedestroy($image);

?>
