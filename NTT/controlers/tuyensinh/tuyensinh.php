<?php
    $xtpi = new XTemplate("views/tuyensinh.html");

    $xtpi->parse("TSINH");
    $error = $xtpi->text("TSINH");
