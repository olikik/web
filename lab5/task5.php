<?php 
    $identifier = trim($_GET['identifier']);
    if(isset($identifier)){
        if(empty($identifier)){
            die('Ошибка! Передан пустой параметр');
        }
    }
    else{
        die('Ошибка! Параметр не передан!');
    }

    if(!ctype_alpha($identifier[0])){
        die('Переданный параметр НЕ является последовательностью');
    }
  
    for($i = 1; $i < strlen($identifier); $i++){
        if(!ctype_alnum($identifier[i])){
            die('Переданный параметр НЕ является последовательностью');
        }
    }
    echo('Переданный параметр является последовательностью');