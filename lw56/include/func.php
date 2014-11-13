<?php

    function PassTrue($pass)   
    { 
        return (preg_match("/^[a-zA-Z0-9]+$/",$pass));
    }
    
    function CountNum($pass)
    {
        return strlen(preg_replace('/[^\d]/','',$pass));
    }
    
    function CountUpper($pass)
    {
        return strlen(preg_replace('/[^A-Z]/','',$pass));
    }
    
    function CountLover($pass)
    {
        return strlen(preg_replace('/[^a-z]/','',$pass));
    }
    
    function DelRepeat($pass)
    {
        $w = preg_replace('#([a-zA-Z1-9]){1,}\\1{1,}#', '', $pass);
        echo $w;
        die;
    }
    
    function CheckPass()
    {
        $sec = 0;
		if (isset($_GET['pass']) and($_GET['pass']) != '')
		{
		    $pass = $_GET['pass'];  
		    if(!PassTrue($pass))
            {
                echo "error pass!";
            }
            else
            {
                $lenPass = strlen($pass); //количество всех симоволов пароля
                $count_num = CountNum($pass);//где n - количество цифр в пароле
                $count_upper = CountUpper($pass);//символов в верхнем регистре
                $count_lover = CountLover($pass);//cимволов в нижнем регистре 
                $count_letter = $count_upper + $count_lover;//количество букв
                DelRepeat($pass);
                echo "num:".$count_num;
                echo "up".$count_upper;
                echo "lov".$count_lover;
                echo "let".$count_letter;          
                $sec = $lenPass * 4;//К надежности прибавляется (4*n) 
                //К надежности прибавляется +(n*4), где n - количество цифр в пароле
                 //К надежности прибавляется +(n*4), где n - количество цифр в пароле
                $sec = $sec + ($count_num * 4); 
                //К надежности прибавляется ((len-n)*2) в случае,
                // если пароль содержит n символов в верхнем регистре    
                $sec = $sec + (($lenPass - $count_upper) * 2);
                //К надежности прибавляется +((len-n)*2) в случае, 
                //если пароль содержит n символов в нижнем регистре 
                $sec = $sec + (($lenPass - $CountLover) * 2);
                //Если пароль состоит только из букв вычитаем число равное количеству символов.  
                //Если пароль состоит только из цифр вычитаем число равное количеству символов.
                if(($lenPass == $count_num) or ($lenPass == $count_letter))
                    $sec = $sec - $lenPass;                    
            }
            echo $sec;
		}
        
    }