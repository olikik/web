<?php
	require_once('func.php');
    include('/template/head.html');
	$intervDeg = getParam('intervDeg',10);
	$intervMin = (getParam('intervMin', 6))/60;
	printSinTable($intervDeg, $intervMin);	
	include('/template/footer.html');