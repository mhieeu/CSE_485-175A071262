<?php
    $xtpl = new XTemplate("views/login.html");
    $mess = 'Vui lòng thử lại';
    
    if($_POST){
        //$conn = mysqli_connect('localhost','root','','ntt');
        $conn = mysqli_connect('localhost','id11138816_hieu','123456','id11138816_ntt');
        $username = $_POST['txtUserName'];
        $userpass = $_POST['txtUserPass'];

        if(!$conn){
            die("Xảy ra lỗi");
        }

        $sql = "SELECT * FROM users";
        mysqli_set_charset($conn,"UTF8");
        $result = mysqli_query($conn,$sql);
        while($userAr = mysqli_fetch_assoc($result)){
            if($username == $userAr['userName'] && $userpass == $userAr['userPassword']){
                $app->redir($baseUrl."?m=content&a=content");
            }else {
                $xtpl->assign("login_mess",$mess);
            }
        }
    }

    $xtpl->parse("LOGIN");
    $error = $xtpl->text("LOGIN");