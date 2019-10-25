<?php
    if($_SESSION['LOGIN_SUCCESS'] == ''){
        $app->redir($baseUrl."admin/?m=login&a=login");
    }
    $xtpd = new XTemplate("views/delete.html");
    $id = $_POST['id'];
    if(isset($id)){
        $conn = mysqli_connect('localhost','root','','ntt');
        if(!$conn){
            die("Xảy ra lỗi");
        }
        
        $sql = "DELETE FROM hoptac WHERE ID = $id";
        $result = mysqli_query($conn,$sql);
        
        //$app->redir($baseUrl."admin/?m=delete&a=delete");
        echo "Xóa thành công";
    }

    $xtpd->parse("DELETE1");
    $error = $xtpd->text("DELETE1");