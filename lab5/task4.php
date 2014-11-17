<?php

    require_once ('includes/req.inc.php');

    if (isset($_GET['text']))
        $string = $_GET['text'];
    else
        die('Параметр не был передан!');
    $result = remove_extra_blank($string);
    echo $result;

?>