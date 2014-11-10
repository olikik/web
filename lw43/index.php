<?php
	require_once('/include/func.php');
    include('/template/head.html');
	include('/template/form.html');
	$intervDeg = getParam('intervDeg', 10);
	$intervMin = getParam('intervMin', 6);
	printSinTable($intervDeg, $intervMin);	
	include('/template/footer.html');