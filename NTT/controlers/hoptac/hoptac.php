<?php
    $xtpht1 = new XTemplate("views/hoptac.html");

    $conn = mysqli_connect('localhost','root','','ntt');
    // $conn = mysqli_connect('localhost','id11138816_hieu','123456','id11138816_ntt');
    
    if(!$conn){
        die("Xảy ra lỗi");
    }

    $sql = "SELECT * FROM hoptac";
    $result = mysqli_query($conn,$sql);
    while($arHopTac = mysqli_fetch_assoc($result)){
        // extract($arHopTac);
        // $xtpht1->assign('PAPER',array('header'=>$header,'content'=>$content,'img_url'=>$img_url));
        // $xtpht1->assign('PAPER',$arHopTac);
        $xtpht1->insert_loop('HOPTAC.PAPER',array('PAPER'=>$arHopTac));   
    }

    // $xtpht->parse('HOPTAC.PAPER');
    $xtpht1->parse('HOPTAC');
    $error = $xtpht1->text('HOPTAC');