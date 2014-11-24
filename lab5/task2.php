<?php
    
	if(isset($_GET['name']))
	{
		echo 'Запрос' . '<br>';
		echo $_SERVER["SERVER_PROTOCOL"];
		echo ' ';
		echo $_SERVER["REQUEST_METHOD"];
		echo ' ';
		echo $_SERVER["REQUEST_URI"];
		echo '<br> ' . '<br>';
		echo 'Ответ' . '<br>' . 'Content-Type: ';
		echo substr($_SERVER["HTTP_ACCEPT"], 0, strpos($_SERVER["HTTP_ACCEPT"], ',')) . '<br>' . '<br>';
		echo "Hello, Dear {$_GET['name']}!";
	}
	else
	{
		echo 'Отправлен пустой запрос!<br>';
		echo 'Запрос должен иметь вид: "?name=Имя"';
	}