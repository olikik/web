<?php 
    $identifier = trim($_GET['identifier']);
    if(isset($identifier)){
        if(empty($identifier)){
            die('������! ������� ������ ��������');
        }
    }
    else{
        die('������! �������� �� �������!');
    }

    if(!ctype_alpha($identifier[0])){
        die('���������� �������� �� �������� �������������������');
    }
  
    for($i = 1; $i < strlen($identifier); $i++){
        if(!ctype_alnum($identifier[i])){
            die('���������� �������� �� �������� �������������������');
        }
    }
    echo('���������� �������� �������� �������������������');