<html>
    <head>
        <title>Таблица sin</title>
    </head>
    <body>
        <h2>Расчет функции sin с изменяемыми параметрами</h2>
        <fieldset>
            <legend>Изменение параметров</legend>
            <form action="task2.php" method="get">
                <table class="parametrs">
                    <tr>
                        <td><input type="text" name="corner" placeholder="Угол &deg;" pattern="[0-9]" ></td>
                        <td><input type="text" name="minutes" min="0" max="59" placeholder="Минуты &#8242;" pattern="[0-9]"></td>
                        <td><input type="submit" value="Расчитать"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <hr>
        <?php
        echo('<table>');
        echo('<tr>');
        echo('<th>Аргумент</th>');
        echo('<th>Значение</th>');
        echo('</tr>');
        $x = 0;
        $m = 0;
        $s = 0;
        $gc = 10;
        $gm = 0;
        if(!empty($_GET['corner']))
        {
            $gc = $_GET['corner'];
        }
        if(!empty($_GET['minutes']))
        {
            $gm = $_GET['minutes'];
        }
        echo('<tr><td>Шаг изменения</td>');
        echo('<td>' . $gc . '&deg; ' . $gm . '&#8242;</td></tr>');
        for ($i = 0; $i <= 36; $i++) {
            $m = $m + $gm;
            $s = $i * $gc;
            $x = $s * 60 + $m;
            if ($m >= 60) {
                $ds = floor($x / 60);
                $dm = $x % 60;
            } else {
                $ds = $s;
                $dm = $m;
            }
            echo('<tr><td> ');
            echo('sin(' . $ds . '&deg; ' . $dm . '&#8242;)');
            echo('</td><td> ');
            echo(sin(deg2rad($x)));
            echo('</td></tr> ');
        }
        echo('</table>');
        ?>
    </body>
</html>