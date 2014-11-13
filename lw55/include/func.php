<?php
    function CheckIdentifier()
    {
		if (isset($_GET['identifer']) and($_GET['identifer']) != '')
		{
		    $identifer = $_GET['identifer']; 
		}
        else
        {
            echo ("Не введен параметр identifer!");
            die;
        }
        if (strlen($identifer))
        {
            die("Передана пустая последовательность!");
        }
        if (!ctype_alpha($identifer[0]))
        {
            die("Последовательность не идентивикатор!");
        }
        for($i = 1;$i < strlen($identifer);$i++ )
        {
            if(!ctype_alnum(($identifer[$i])))
            {
                die("Последовательность не идентивикатор!");
            }
        }
        echo "Идентификатор";
    }