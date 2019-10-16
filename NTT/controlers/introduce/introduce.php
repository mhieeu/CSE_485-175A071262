<?php
    $xtpi = new XTemplate("views/introduce.html");

    $xtpi->parse("INTRO");
    $error = $xtpi->text("INTRO");
