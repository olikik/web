<?php
    function PrintQueryString()
    {
        $serv_protocol = $_SERVER["SERVER_PROTOCOL"];
        $req_method = $_SERVER["REQUEST_METHOD"];
        $req_url = $_SERVER["REQUEST_URI"];
        $query_string = $_SERVER["QUERY_STRING"];
		if ($query_string != '')
		{
		    $html = "Запрос:<br>".$serv_protocol." ".$req_method." ".$req_url."<br>Ответ:<br>"."Query string = '". $query_string."'.";
		    echo($html);
		}
    }