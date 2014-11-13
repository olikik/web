<?php

    $title = "Задание №1";
    $style = "css/style.css";
    $body = "";

    //variable for sin()
    $x = 0;
    $i = 0;
    $step_corner = 10;
    $step_minute = 6;

    require_once("functions/base.php");
    require_once("functions/sin.php");

    //check parametrs
    if ($step_corner == 0 && $step_minute == 0)
    {
        $step_minute = 10;
    }
    if ($step_corner == 0)
    {
        $step_minute = 10;
    }

    require_once("templates/head.php");
    require_once("functions/print_table.php");
    require_once("templates/body.php");
    require_once("templates/foot.php");
    
?>