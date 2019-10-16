<?php
    $xtpc = new XTemplate("views/content.html");

    $xtpc->parse('CONTENT');
    $error = $xtpc->text('CONTENT');
