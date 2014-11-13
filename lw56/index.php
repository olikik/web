<?php
    require_once('/include/func.php');
    include('/template/head.html');
    include('/template/form.html');
    if (isset($_GET['pass']) and ($_GET['pass']) != '')
    {
        $pass = trim ($_GET['pass']);  
        if(!PassTrue($pass))
        {
            echo "error pass!";
            die;
        }
        $strength = GetPasswordStrength($pass);
        echo "<p>Strength password: </p>".$strength;
    }
    
    include('/template/footer.html');
