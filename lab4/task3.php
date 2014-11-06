<html>
  <head>
    <title>Таблица sin</title>
    <?php
       echo('<link rel="stylesheet" href="css/style.css">');
    ?>
  </head>
  <body>
    <h2>Расчет функции sin с изменяемыми параметрами</h2>
      <fieldset>
        <legend>Изменение параметров</legend>
          <form action="task3.php" method="get">
            <table class="parametrs">
              <tr>
                <td><input type="number" name="corner" placeholder="Угол &deg;" min="0" max="359" ></td>
                <td><input type="number" name="minutes" min="0" max="59" placeholder="Минуты &#8242;" ></td>
                <td><input type="submit" value="Расчитать"></td>
              </tr>
            </table>
          </form>
      </fieldset>
      <hr />
      <?php
          echo('<table class="sin">');
          echo('<tr>');
          echo('<th>Аргумент</th>');
          echo('<th>Значение</th>');
          echo('</tr>');
          $x = 0;
          $m = 0;
          $c = 0;
          $gc = 0;
          $gm = 0;
          $i = 1;
          if(!empty($_GET['corner']))
          {
              $gc = $_GET['corner'];
          }
          if(!empty($_GET['minutes']))
          {
              $gm = $_GET['minutes'];
          }
          if($gc == 0 && $gm == 0)
          {
               $gc = 1;
          }
          echo('<tr><td>Шаг изменения</td>');
          echo('<td>' . $gc . '&deg; ' . $gm . '&#8242;</td></tr>');
           
          while ($dc+$gc < 360)
          {
              $x = $c * 60 + $m;
              if ($m >= 60) {
                  $dc = floor($x / 60);
                  $dm = $x % 60;
              } else {
                  $dc = $c;
                  $dm = $m;
              }
              $m = $m + $gm;
              echo('<tr ');
              if(($i + 1) % 2)
              {
                  echo('class="even"');
                  echo('><td>');
              }
              else
              {
                  echo('><td class="arguments">');
              }
              echo('sin(' . $dc . '&deg; ' . $dm . '&#8242;)');
              echo('</td><td> ');
              echo round(sin(deg2rad($dc + ($dm/60))),4);
              echo('</td></tr> ');
              $c = $c + $gc;
              $i++;
          }
          echo('</table>');
      ?>
  </body>
</html>