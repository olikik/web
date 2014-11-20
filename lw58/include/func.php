<?php

    function EmailTrue($str)
    {
        return (filter_var($str, FILTER_VALIDATE_EMAIL));
    }
    
    function GetParam($name, $default_value)
	{
		return isset($_GET[$name]) ? $_GET[$name] : $default_value;
	}
    
    function GetData($file_name)
    {
        if(file_exists($file_name))
        {
            $fp = fopen($file_name,"r");
            $data = file($file_name);
            fclose($fp);
        }
        else
        {
            $html .= "<p>Пользователь с данным адресом не найден!</p>" ;
            die;
        }

        $html = "Данные о пользователе: <br>";
        for($i = 0; $i < 4; $i++)
        {
            $html .= $data[$i]."<br>";
        }
        return $html;
    }
