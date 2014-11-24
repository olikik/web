HTTP/1.1 200 OK
Date: Mon, 24 Nov 2014 16:53:26 GMT
Server: Apache/2.4.10 (Win32) OpenSSL/1.0.1i PHP/5.6.3
X-Powered-By: PHP/5.6.3
Content-Length: 141
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html; charset=UTF-8

<?php

    foreach ($_SERVER as $arguments => $value)
    echo $arguments . ' === ' . $_SERVER[$arguments] . '<br>';