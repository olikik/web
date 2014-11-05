<?php
    var $i = 0;
    var $x = 0;
    var $m = 1;
    var $s = 1;
    echo('<h2>Таблица синусов с интервалом градусов 10 и интервалом минут 6</h2>');
    echo('<table>');
    echo('<tr><th>');
    echo('Аргумент');
    echo('</th><th>');
    echo('Значение');
    echo('</th></tr>');  
    for ($i<=36){
        $m = $m * 6;
        $s = $i * 10;
        $x = $s* 60 + $m;
        echo('<tr><td>');
        echo('sin(' . $s . '&deg; ' . $m . '&#8242;');
        echo('</td><td>');
        echo(sin(deg2rad($x)));
        echo('</td></tr>');
    };
    echo('</table>');
?>