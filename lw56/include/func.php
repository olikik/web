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
                $lenPass = strlen($pass); //���������� ���� ��������� ������
                $count_num = CountNum($pass);//��� n - ���������� ���� � ������
                $count_upper = CountUpper($pass);//�������� � ������� ��������
                $count_lover = CountLover($pass);//c������� � ������ �������� 
                $count_letter = $count_upper + $count_lover;//���������� ����
                DelRepeat($pass);
                echo "num:".$count_num;
                echo "up".$count_upper;
                echo "lov".$count_lover;
                echo "let".$count_letter;          
                $sec = $lenPass * 4;//� ���������� ������������ (4*n) 
                //� ���������� ������������ +(n*4), ��� n - ���������� ���� � ������
                 //� ���������� ������������ +(n*4), ��� n - ���������� ���� � ������
                $sec = $sec + ($count_num * 4); 
                //� ���������� ������������ ((len-n)*2) � ������,
                // ���� ������ �������� n �������� � ������� ��������    
                $sec = $sec + (($lenPass - $count_upper) * 2);
                //� ���������� ������������ +((len-n)*2) � ������, 
                //���� ������ �������� n �������� � ������ �������� 
                $sec = $sec + (($lenPass - $CountLover) * 2);
                //���� ������ ������� ������ �� ���� �������� ����� ������ ���������� ��������.  
                //���� ������ ������� ������ �� ���� �������� ����� ������ ���������� ��������.
                if(($lenPass == $count_num) or ($lenPass == $count_letter))
                    $sec = $sec - $lenPass;                    
            }
            echo $sec;
		}
        
    }