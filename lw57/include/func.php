<?php

    function EmailTrue($str)
    {
        return (filter_var($str, FILTER_VALIDATE_EMAIL));
    }

    function AgeVal($str)
    {
        return (filter_var($str,FILTER_VALIDATE_INT));
    }
    
    function GetParam($name, $defaultValue)
	{
		return isset($_GET[$name]) ? $_GET[$name] : $defaultValue;
	}

    function GetArraySurvey($firstName, $lastName, $email, $age)
    {
        return array
        (
            "First Name:" => $firstName,
            "Last Name:" => $lastName,
            "Email:" => $email,
            "Age:" => $age
        );
    }
    
    function SaveSurvey($survey, $fileName)
    {
        $fp = fopen($fileName, "w");      
        foreach($survey as $key => $value)
        {
             fwrite($fp, $key . ' ' . $value . "\n");
        }
    }
    