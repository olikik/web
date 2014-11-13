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

    function CountDubbleSimvol($pass)
    {
        $dubble = 0;
        $pass_dell = $pass;
        for($i = 0; $i <= strlen($pass) - 1; $i++)
        {
            $dubble_char = substr_count($pass_dell, $pass{$i}) ;
            if ($dubble_char > 1)
            {
                $dubble += $dubble_char;
                $pass_dell = str_replace($pass{$i}, '', $pass_dell);

            }
        }
        return $dubble;
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
                $count_dubble = CountDubbleSimvol($pass);//оличество повторяющихся
                $sec = $lenPass * 4;//К надежности прибавляется (4*n)
                //echo  $lenPass.'/'.$sec.'<br>';
                //К надежности прибавляется +(n*4), где n - количество цифр в пароле
                 //К надежности прибавляется +(n*4), где n - количество цифр в пароле
                $sec = $sec + ($count_num * 4);
                //echo  $count_num.'/'.$sec.'<br>';
                //К надежности прибавляется ((len-n)*2) в случае,
                // если пароль содержит n символов в верхнем регистре
                if($count_upper != 0)
                    $sec = $sec + (($lenPass - $count_upper) * 2);
                //echo  $count_upper.'/'.$sec.'<br>';
                //К надежности прибавляется +((len-n)*2) в случае, 
                //если пароль содержит n символов в нижнем регистре
                if($count_lover != 0)
                    $sec = $sec + (($lenPass - $count_lover) * 2);
               // echo  $count_lover.'/'.$sec.'<br>';
                //Если пароль состоит только из букв вычитаем число равное количеству символов.  
                //Если пароль состоит только из цифр вычитаем число равное количеству символов.
                if(($lenPass == $count_num) or ($lenPass == $count_letter))
                    $sec = $sec - $lenPass;
               // echo  $sec.'<br>';
                //За каждый повторяющийся символ в пароле вычитается количество повторяющихся символов
                $sec = $sec - $count_dubble;
            }
            echo "<p>Надежность: </p>".$sec;
		}
        
    }