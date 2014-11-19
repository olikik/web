<?php
    
    require_once("includes/req.inc.php");
    
    $title = "Задание №1";
    $style = "css/task12.css";
    $body = "";

    //variable for sin()
    $x = 0;
    $i = 0;
    $step_corner = 10;
    $step_minute = 6;

    //check parametrs
    if ($step_corner == 0 && $step_minute == 0)
    {
        $step_minute = 10;
    }
    if ($step_corner == 0)
    {
        $step_minute = 10;
    }

    include("templates/head.php");
    $body .= print_table_of_sinus($step_corner, $step_minute, $body);
    include("templates/body.php");
    include("templates/foot.php");
    
?>