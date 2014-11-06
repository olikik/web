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
                <td><input type="number" name="corner" placeholder="Угол &deg;" min="0" max="359" ></td>
                <td><input type="number" name="minutes" min="0" max="59" placeholder="Минуты &#8242;" ></td>
                <td><input type="submit" value="Расчитать"></td>
              </tr>
            </table>
          </form>
      </fieldset>
      <hr />
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
           
          for ($i = 0; $i <= 36; $i++) 
          {
              $s = $i * $gc;
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
              }
              $m = $m + $gm;
              echo ('<tr><td>');
              echo ('sin(' . $ds . '&deg; ' . $dm . '&#8242;)');
              echo ('</td><td> ');
              echo round(sin(deg2rad($ds + ($dm/60))), 4);
              echo ('</td></tr> ');
          }
          echo('</table>');
      ?>
  </body>
</html>