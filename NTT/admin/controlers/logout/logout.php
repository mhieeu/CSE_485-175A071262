<?php
	$_SESSION['LOGIN_SUCCESS'] = '';
    session_destroy();
    
    if(strlen($_SESSION['LOGIN_SUCCESS']) === 0){
		$app->redir($baseUrl."admin/?m=login&a=login");
	}