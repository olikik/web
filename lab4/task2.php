<html>
  <head>
    <title>Таблица sin</title>
    <link rel="stylesheet" href="css/style.css" /> 
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
          $x = 0;
          $m = 0;
          $c = 0;
          if(!empty($_GET['corner']))
          {
              $c = $_GET['corner'];
          }
          if(!empty($_GET['minutes']))
          {
              $m = $_GET['minutes'];
          }
          if($c == 0 && $m == 0)
          {
              $c = 1;
              $m = 10;
          }
          if($c != 0 && $m == 0)
          {
              $m = 10;
          }
          if($c == 0 && $m != 0)
          {
              $c = 1;
          }
          echo('<table class="task12">');
          echo ('<tr>' . '<th>' . '</th>');
          for ($i = 0; $i < 60; $i += $m)
          {
              echo ('<th>' . $i . '&#8242; </th>');
          };
          echo ('</tr>');
          for ($j = 0; $j < 360; $j += $c)
          {
              echo ('<tr>' . '<td>');
              echo ($j . '&deg;');
              echo ('</td>');
              $x = $j * 60;
              for ($i = 0; $i < 60; $i += $m)
              {
                  echo ('<td>');
                  echo round(sin(deg2rad($j + ($i / 60))), 4);
                  echo ('</td>');
              };
              echo ('</tr>');
          }
          echo('</table>');
      ?>
  </body>
</html>