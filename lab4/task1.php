<?php
    $x = 0;
    $m = 0;
    $c = 0;
    $i = 0;
    $dc = 0;
    echo ('<h2>Таблица синусов с интервалом градусов 10 и интервалом минут 6</h2>');
    echo ('<table>');
    echo ('<tr><th>');
    echo ('Аргумент');
    echo ('</th><th>');
    echo ('Значение');
    echo ('</th></tr>');
    echo ('</th></tr>');
    while ($dc+1 < 360)
    {
        $x = $c * 60 + $m;
        if ($m >= 60) {
            $dc = floor($x / 60);
            $dm = $x % 60;
        } else {
            $dc = $c;
            $dm = $m;
        }
        $m = $m + 6;
        echo ('<tr><td> ');
        echo ('sin(' . $dc . '&deg; ' . $dm . '&#8242;)');
        echo ('</td><td> ');
        echo round(sin(deg2rad($dc + ($dm/60))),4);
        echo ('</td></tr> ');
        $c = $c + 10;
    }
    echo ('</table>');
?>