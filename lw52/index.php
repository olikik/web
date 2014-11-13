<?php
    header("Content-type:text/plain");
    if (isset($_GET['name']) and ($_GET['name']) != '')
    {
		  $html = "Hello, Dear " . $_GET['name'] . "!";
          echo($html); 
	}

