<?php
    error_reporting(E_ALL); //check lỗi
    include("app.class.php");
    include("XTemplate.class.php");
    
    $user = "root";
    $password = "";
    $baseUrl = "http://".$_SERVER['HTTP_HOST'].'/NTT/';
    $app = new app;
    $salt = sha1("123456");