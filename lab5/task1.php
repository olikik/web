<?php

    echo '������' . '<br>';
    echo $_SERVER["REQUEST_URI"];
    echo '<br> ' . '<br>';
    echo '�����' . '<br>' . 'Content-Type: ';
    echo substr($_SERVER["HTTP_ACCEPT"], 0, strpos($_SERVER["HTTP_ACCEPT"], ','));
    echo '<br>' . 'Query string =   \'';
    echo $_SERVER["QUERY_STRING"];
    echo '\'';
    
?>