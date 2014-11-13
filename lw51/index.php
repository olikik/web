<?php
    header("Content-type:text/plain");
    $query_string = $_SERVER["QUERY_STRING"];
    if ($query_string != '')
    {
        $html = "Query string = '" . $query_string . "'.";
        echo($html);
    }
