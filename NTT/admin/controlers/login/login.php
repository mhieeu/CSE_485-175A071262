<?php
    $xtpl = new XTemplate("views/login.html");
    $mess = 'Vui lòng thử lại';
    
    if($_POST){
        // $conn = mysqli_connect('localhost','id11138816_hieu','123456','id11138816_ntt');
        $conn = mysqli_connect('localhost','root','','ntt');
        $flag = 0;
        $_SESSION['LOGIN_SUCCESS'] = '';
        $username = $_POST['txtUserName'];
        $userpass = $_POST['txtUserPass'];

        if(!$conn){
            die("Xảy ra lỗi");
        }

        $sql = "SELECT * FROM users";
        mysqli_set_charset($conn,"UTF8");
        $result = mysqli_query($conn,$sql);
        
        $enpass = sha1($userpass).$salt;
        while($userAr = mysqli_fetch_assoc($result)){
            if(($username == $userAr['userName'] ||$username == $userAr['userEmail']) && $enpass == $userAr['userPassword']){
                $_SESSION['LOGIN_SUCCESS'] = $userAr['userName'];
                $flag = 1;
            }
        }

        if($flag==1){
            $app->redir($baseUrl."admin/?m=home&a=home");
        }

        if($flag==0){
            $xtpl->assign("login_mess",$mess);
        }
        
        // if($_SESSION['LOGIN_SUCCESS'] == ''){
        //     $app->redir($baseUrl."admin/?m=login&a=login");
        // }
    }

    $xtpl->parse("LOGIN");
    $error = $xtpl->text("LOGIN");