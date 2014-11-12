<?php
    function PrintHeaders($mas_head)
    {
        foreach($mas_head as $key => $value)
        {
            if($key != '0')
                echo $key.":";;
            echo $value."<br>";      
        }
    }
    function SendPrintName()
    {
		if (isset($_GET['name']) and($_GET['name']) != '')
		{
		    $name = $_GET['name'];
            $url = "http://127.0.0.1:4001/lw53/?".$name;
            $req = getallheaders();
            echo "<p>Запрос:</p>";
            PrintHeaders($req);
            $res = get_headers($url, 1);
            echo "<p>Ответ:</p>";
            PrintHeaders($res);		    
		}
    }