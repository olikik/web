<?php
    function PrintName()
    {
        $serv_protocol = $_SERVER["SERVER_PROTOCOL"];
        $req_method = $_SERVER["REQUEST_METHOD"];
        $req_url = $_SERVER["REQUEST_URI"];
		if (isset($_GET['name']) and($_GET['name']) != '')
		{
		    $name = $_GET['name'];
		    $html = "Запрос:<br>".$serv_protocol." ".$req_method." ".$req_url."<br>Ответ:<br>"."Hello, Dear ". $name."!";
		    echo($html);
		}
    }