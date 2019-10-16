<?php
    error_reporting(E_ALL); //check lỗi
    include("app.class.php");
    include("XTemplate.class.php");
    include("Model.class.php");
    
    $user = "root";
    $password = "";
    $baseUrl = "http://".$_SERVER['HTTP_HOST'].'/NTT/';
    // $dsn = "mysql:host=localhost;port=3306;dbname=ntt";
	// $usr = 'root';
	// $pwd ='';

	// $db 	= new Model($dsn,$usr,$pwd);
    // $app = new app;