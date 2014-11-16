<?php
    
    require_once("includes/req.inc.php");
    
    $title = "Задание №2";
    $style = "css/task12.css";
    $body = "";

    //variable for sin()
    $x = 0;
    $i = 0;
    $step_corner = check_sinus_paramter($_GET['corner'], 10);
    $step_minute = check_sinus_paramter($_GET['minutes'], 10);

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
    $body .= load_content("content/sinus_table2.php");
    $body .= print_table_of_sinus($step_corner, $step_minute, '');
    include("templates/body.php");
    include("templates/foot.php");
    
?>