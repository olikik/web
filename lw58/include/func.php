<?php

    function EmailTrue($str)
    {
        return (filter_var($str, FILTER_VALIDATE_EMAIL));
    }

    function SurveyInfo()
    {

        $first_name = '';
        $last_name = '';
        $age = '';
        if(isset($_GET['email']))
        {
            $email = $_GET['email'];
            if (!EmailTrue($email))
            {
                echo "<p>Email error!</p>";
                die;
            }
        }
        else
            die;
        $file_name = 'C:/USBWebserver v8.6/root/web/lw57/data/'.$email.'.txt';
        if(file_exists($file_name))
        {
            $fp = fopen($file_name, "r");
            $data = file($file_name);
            fclose($fp);
        }
        else
        {
            echo "<p>Пользователь с данным адресом не найден!</p>" ;
            die;
        }

        $html = "Данные о пользователе: <br>";
        for($i = 0; $i < 4; $i++)
        {
            $html .= $data[$i] . "<br>";
        }
        echo $html;

    }
