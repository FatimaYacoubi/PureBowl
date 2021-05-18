<?php

//check_code.php recuper le code et tester si correspon au captcha

session_start();

$code = $_POST['code'];

if($code == $_SESSION['captcha_code']) // on veut recuper une value de 2 different fichier php
{
    echo 'code_valid';
}
