<?php
    $xtpht1 = new XTemplate("views/hoptac.html");

    $conn = mysqli_connect('localhost','root','','ntt');
    // $conn = mysqli_connect('localhost','id11138816_hieu','123456','id11138816_ntt');
    
    if(!$conn){
        die("Xảy ra lỗi");
    }
    $condition = '1=1';
    $arr = $db->fetchAll('hoptac',$condition);
    if(count($arr)>0){
        foreach($arr as $arHopTac){
            $xtpht1->insert_loop('HOPTAC.PAPER',array('NOIDUNG'=>$arHopTac));
        }
    }
    // $sql = "SELECT * FROM hoptac";
    // $result = mysqli_query($conn,$sql);
    // $arHopTac = mysqli_fetch_assoc($result);
    // extract($arHopTac);
    // $xtpht1->assign('PAPER',array('header'=>$header,'content'=>$content,'img_url'=>$img_url));
        var_dump($arHopTac);
        
    //$xtpht1->insert_loop('PAPER',array('PAPER'=>$arHopTac));   
    

    $xtpht1->parse('HOPTAC');
    $error = $xtpht1->text('HOPTAC');