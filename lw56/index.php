<?php
    require_once('/include/func.php');
    include('/template/head.html');
    include('/template/form.html');
    $sec = CheckPass();
    echo "<p>Надежность: </p>".$sec;
    include('/template/footer.html');
