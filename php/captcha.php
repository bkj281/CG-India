<?php 
	session_start(); 
	$text = rand(10000, 99999); 
	$_SESSION["verify"] = $text; 
  $height = 36; 
	$width = 72;
	$image_p = imagecreate($width, $height); 
	$black = imagecolorallocate($image_p, 0, 0, 0); 
	$red = imagecolorallocate($image_p, 255, 0, 0); 
	$font_size = 30;
	imagestring($image_p, $font_size, 14, 10, $text, $red); 
	imagejpeg($image_p, null, 80); 
?>