<?php
    function serverInfo()
    {
        $serv_protocol = $_SERVER["SERVER_PROTOCOL"];
        $req_method = $_SERVER["REQUEST_METHOD"];
        $req_url = $_SERVER["REQUEST_URI"];
        $url = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].$req_url;
       //print_r(HttpMessage::getHeaders());
       // echo $url;
        //$url2 = "http://localhost:8080/web/lw51/index.php?notHeaders=1";
        //var_dump($req_url);
       // var_dump($ur);

        $isNotGetHeaders = !empty($_GET['notHeaders']) ? true : false;

        if(!$isNotGetHeaders) {

            $cont_type = get_headers($url."&notHeaders=1");
            echo "<pre>";print_r($cont_type);echo "</pre>";
           die;
        }
        //('http://localhost:8080/web/lw51/index.php');
        //http_get_request_body();
        //print_r(headers_list());
        //$query_string =  $_SERVER["QUERY_STRING"];
        //$html = "Запрос<br>".$serv_protocol." ".$req_method." ".$url."<br>Ответ<br>"/*.$cont_type*/."Query string = ". $query_string;
       // echo($html);
        //var_dump($_SERVER);
       // var_dump(phpinfo());

       foreach (apache_request_headers() as $key => $value)
        {
            echo $key."=>".$value."<br>";
        }


    }