<?php
    include("libs/bootstrap.php");
    $xtp = new XTemplate("views/index.html");

    $m = (isset($_GET['m']))?$_GET['m']:'content';
    $a = (isset($_GET['a']))?$_GET['a']:'content';

    if($m!=''&&$a!=''){
        if(file_exists("controlers/{$m}/{$a}.php")){
            include("controlers/{$m}/{$a}.php");
        }else{
            $error = '404 Not Found!';    
        }
        $xtp->assign('error',$error);
    }

    $xtp->assign('baseUrl',$baseUrl);
    $xtp->parse('HOMEPAGE');
    $xtp->out('HOMEPAGE');