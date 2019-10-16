<?php
    $xtph = new XTemplate("views/home.html");

    $xtph->assign('user_name','Welcome '.$_SESSION['LOGIN_SUCCESS']);
    $xtph->parse("HOME");
    $error = $xtph->text("HOME");