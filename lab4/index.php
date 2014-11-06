<?php
    $x = 0;
    $m = 0;
    $s = 0;
    echo('<h2>Таблица синусов с интервалом градусов 10 и интервалом минут 6</h2>');
    echo('<table>');
    echo('<tr><th>');
    echo('Аргумент');
    echo('</th><th>');
    echo('Значение');
    echo('</th></tr>');  
    echo('</th></tr>');
    for ($i = 0; $i <= 36; $i++)
    {
        $m = $m + 6;
        $s = $i * 10;
        $x = $s * 60 + $m;
	if ($m >= 60)
	{
	    $ds = floor($x / 60);
	    $dm = $x % 60;
	}
	else
	{
	    $ds = $s;
	    $dm = $m;
	};
        echo('<tr><td> ');
        echo('sin(' . $ds . '&deg; ' . $dm . '&#8242;)');
        echo('</td><td> ');
        echo(sin(deg2rad($x)));
        echo('</td></tr> ');
    };
    echo('</table>');
?>
