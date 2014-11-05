<?php
    require_once('index.html');
	require_once('func.php');
	$intervDeg = $_GET['intervDeg'];
	$intervMin = ($_GET['intervMin'])/60;
	printSinTable($intervDeg, $intervMin);	