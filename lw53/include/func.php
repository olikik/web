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
            $host = $_SERVER['HTTP_HOST'];
            $query_string = $_SERVER["QUERY_STRING"];
            $url = "http://".$host."/web/lw52/index.php?".$query_string;
            $req = getallheaders();
            echo "<p>Запрос:</p>";
            PrintHeaders($req);
            $res = get_headers($url, 1);
            echo "<p>Ответ:</p>";
            PrintHeaders($res);		    
		}
    }