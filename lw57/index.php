<?php
    require_once('/include/func.php');
    include('/template/head.html');
    include('/template/form.html');
    if(isset($_GET['email']))
    {
        $first_name = GetParam('first_name','');
        $last_name = GetParam('last_name', '');
        $email = GetParam('email', '');
        $age = GetParam('age', '');
        if (!EmailTrue($email))
        {
            echo "<p>Email error!</p>";
            die;
        } 
        else
        {
            $survey = GetArraySurvey($first_name, $last_name, $email, $age);
            $file_name = './data/'.$email.'.txt';
            SaveSurvay($survey, $file_name);
        }
    }   
    include('/template/footer.html');
