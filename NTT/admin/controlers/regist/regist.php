<?php
    if($_SESSION['LOGIN_SUCCESS'] == ''){
        $app->redir($baseUrl."admin/?m=login&a=login");
    }
    $xtpr = new XTemplate("views/regist.html");

    if($_POST){
        $conn = mysqli_connect('localhost','root','','ntt');
        // $conn = mysqli_connect('localhost','id11138816_hieu','123456','id11138816_ntt');
        $username = $_POST['txtHoTen'];
        $useremail = $_POST['txtEmail'];
        $userpass = $_POST['txtMatkhau'];
        // $usercpass = $_POST['cmatkhau'];
        $phanQuyen = 0;
        if(!$conn){
            die("Xảy ra lỗi");
        }

        $enpass1 = sha1($userpass).$salt;
        $sql = "INSERT INTO users(userName,userEmail,userPassword,phanQuyen) VALUES ('$username','$useremail','$enpass1','$phanQuyen')";
        $result = mysqli_query($conn,$sql);
        mysqli_set_charset($conn,"UTF8");
        $app->redir($baseUrl."admin/?m=login&a=login");
    }

    $xtpr->parse("REGIST");
    $error = $xtpr->text("REGIST");