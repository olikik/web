<?php
    require_once('/include/func.php');
    include('/template/head.html');
    include('/template/form.html');
    if(isset($_GET['email']))
    {
        $firstName = GetParam('first_name','');
        $lastName = GetParam('last_name', '');
        $email = GetParam('email', '');
        $age = GetParam('age', '');
        if (!EmailTrue($email))
        {
            echo "<p>Email error!</p>";
            die;
        } 
        else
        {
            $survey = GetArraySurvey($firstName, $lastName, $email, $age);
            $fileName = './data/'.$email.'.txt';
            SaveSurvey($survey, $fileName);
        }
    }   
    include('/template/footer.html');
