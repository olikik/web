<?php
	require_once('/include/func.php');
    include('/template/head.html');
	$intervDeg = 10;
	$intervMin = 6;
	printSinTable($intervDeg, $intervMin);	
	include('/template/footer.html');