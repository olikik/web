<?php

    function EmailTrue($str)
    {
        return (filter_var($str, FILTER_VALIDATE_EMAIL));
    }

    function AgeVal($str)
    {
        return (filter_var($str,FILTER_VALIDATE_INT));
    }
    
    function GetParam($name, $default_value)
	{
		return isset($_GET[$name]) ? $_GET[$name] : $default_value;
	}

    function SurveySave()
    {

        $first_name = '';
        $last_name = '';
        $age = '';
        if(isset($_GET['first_name']))
        {
            $first_name = $_GET['first_name'];


        if(isset($_GET['last_name']))
        {
            $last_name = $_GET['last_name'];
        }

        if(isset($_GET['email']))
        {
            $email = $_GET['email'];
            if (!EmailTrue($email))
            {
                echo "<p>Email error!</p>";
                die;
            }
        }

        if(isset($_GET['age']))
        {
            $age = $_GET['age'];
        }

        $file_name = './data/'.$email.'.txt';
        $fp = fopen($file_name, "w");
        fwrite($fp,"First Name: ". $first_name."\n");
        fwrite($fp,"Last Name: ". $last_name."\n");
        fwrite($fp,"Email: ".$email."\n");
        fwrite($fp,"Age: ".$age."\n");
        fclose($fp);
        }
    }
    
    function GetArraySurvey($first_name, $last_name, $email, $age)
    {
        return array(
        "First Name:" => $first_name,
        "Last Name:" => $last_name,
        "Email:" => $email,
        "Age:" => $age
        );
    }
    
    function SaveSurvay($survay, $file_name)
    {
        $fp = fopen($file_name, "w");      
        foreach($survay as $key => $value)
        {
             fwrite($fp,$key.' '.$value."\n");
        }
    }
    