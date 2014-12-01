<?php
    require_once('/include/func.php');
    include('/template/head.html');
    include('/template/form.html');
<<<<<<< HEAD

    if(isset($_GET['email']))
    {
        $email = GetParam('email','');
        if (!EmailTrue($email))
        {
            echo "<p>Email error!</p>";
            die;
        }
        else
        {
            $file_name = '../lw57/data/' . $email . '.txt';
            echo GetData($file_name);
			
        } 
    }
=======
    SurveyInfo();
>>>>>>> d196af0b362d7e5c879e7caaddb7d56d3a407575
    include('/template/footer.html');
