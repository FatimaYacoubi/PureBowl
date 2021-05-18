<?php

//créer une image code en php

//demarrer la session
session_start(); //  pour stocker des donnes

//générer un code aléatoire (random)
$random_alpha = md5(rand());

//utiliser 6 caratéres
$captcha_code = substr($random_alpha, 0, 6);

//stocker le code dans une variable session
$_SESSION['captcha_code'] = $captcha_code;

header('Content-Type: image/png');

//Configuerer le style de l'image : background ,color .. + importer le fichier arial.ttf pour la font text

$image = imagecreatetruecolor(200, 38);
$background_color = imagecolorallocate($image, 0, 80, 0);
$text_color = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

$font = dirname(__FILE__) . '/arial.ttf';

imagettftext($image, 20, 0, 60, 28, $text_color, $font, $captcha_code);
imagepng($image);
imagedestroy($image);

