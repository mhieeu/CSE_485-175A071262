<?php
    if($_SESSION['LOGIN_SUCCESS'] == ''){
        $app->redir($baseUrl."admin/?m=login&a=login");
    }
    $xtpu = new XTemplate("views/update.html");

    $file = $_FILES["img"];
    $f = 1;
    print_r($file);

    if(strlen($file['name']) > 0){
        $fName = $file['name']; //tên file và đuôi
        $tmpName = $file['tmp_name'];
        $typeName = $file['type'];
        $arExt = array('png','jpg','bmp','gif'); //chuỗi đuôi ảnh
        $ext = getExt($fName);
        $urlServerFile = "../images/";
        $urlServerFile1 = "./images/";
        if(!in_array($ext,$arExt)){
            $f = -2;
        }
        $link = $urlServerFile.$fName;  //dẫn ảnh vào images
        $link1 = $urlServerFile1.$fName;    //dẫn mở ảnh
        if($f==1){
            if(move_uploaded_file($tmpName,$link)){
                $f = 2;	
            }
        }
    }
    
    function getExt($str){
        $fileUpload = explode(".",$str); //cắt chuỗi ở các dấu chấm
        $ext = end($fileUpload); //lấy phần tử cuối cùng
        return strtolower($ext); //viết thường
    }

    if($_POST){
        $conn = mysqli_connect('localhost','root','','ntt');
        // $conn = mysqli_connect('localhost','id11138816_hieu','123456','id11138816_ntt');
        $tieude = $_POST['tieude'];
        $noidung = $_POST['noidung'];
        $id = $_POST['id'];
        if(!$conn){
            die("Xảy ra lỗi");
        }

        $sql = "UPDATE hoptac SET header = '$tieude',content = '$noidung',img_url = '$link1' WHERE ID = '$id'";
        $result = mysqli_query($conn,$sql);
        mysqli_set_charset($conn,"UTF8");
        echo $sql;
    }

    $xtpu->parse("UPDATE1");
    $error = $xtpu->text("UPDATE1");