<?php
    echo('<link rel="stylesheet" href="css/style.css">');
    $x = 0;
    $m = 0;
    $c = 0;
    $i = 0;
    echo ('<h2>Таблица синусов с интервалом градусов 10 и интервалом минут 6</h2>');
    echo ('<table class="task12">');
    echo ('<tr>' . '<th>' . '</th>');
    for ($i = 0; $i < 60; $i += 6)
    {
        echo ('<th>' . $i . '&#8242; </th>');
    };
    echo ('</tr>');
    while ($c < 360)
    {
        echo ('<tr>' . '<td>');
        echo ($c . '&deg;');
        echo ('</td>');
        $x = $c * 60;
        for ($m = 0; $m < 60; $m += 6)
        {
            echo ('<td>');
            echo round(sin(deg2rad($c + ($m / 60))), 4);
            echo ('</td>');
        };
        echo ('</tr>');
        $c += 10;
    }
    echo ('</table>');
?>