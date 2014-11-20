<?php
    require_once('/include/func.php');
    include('/template/head.html');
    include('/template/form.html');

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
            GetData($file_name);
        }
            
        
    }
    include('/template/footer.html');
