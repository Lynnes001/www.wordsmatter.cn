<?php
require_once 'string.func.php';
header("content-type:text/html;charset=utf-8");
//通过GD库做验证码
function verifyimage($sess_name = 'default-verify',$type = 1,$length = 4,$pixel=0,$line=0){

session_start();
$width = 80;
$height = 28;
$image = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 1, 1, $width - 2, $height - 2, $white);

$chars = randomstring($type, $length);

$_SESSION[$sess_name] = $chars;
$fontfiles = array(
    "MSYH.TTC",
    "MSYHBD.TTC",
    "MSYHL.TTC",
    "SIMSUN.TTC",
    "SIMYOU.TTF",
    "STFANGSO.TTF",
    "STHUPO.TTF",
    "STKAITI.TTF",
    "STLITI.TTF"
);

for ($i = 0; $i < $length; $i ++) {
    $size = mt_rand(14, 18);
    $angle = mt_rand(- 15, 15);
    $x = 5 + $i * $size;
    $y = mt_rand(20, 26);
    $color = imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(90, 180));
    $fontfile = "../fonts/" . $fontfiles[mt_rand(0, count($fontfiles) - 1)];
    $text = substr($chars, $i, 1);
    imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
}

if ($pixel) {
    for ($i = 0; $i < $pixel; $i ++) {
        imagesetpixel($image, mt_rand(0, $width - 1), mt_rand(0, $height - 1), $black);
    }
}


if ($line) {
    for ($i = 1; $i < $line; $i ++) {
        $color = imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(90, 180));
        imageline($image, mt_rand(0, $width - 1), mt_rand(0, $height - 1), mt_rand(0, $width - 1), mt_rand(0, $height - 1), $color);
    }
}
header("content-type:image/gif");
imagegif($image);
imagedestroy($image);
}
