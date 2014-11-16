<fieldset>
  <legend>Ввод параметров</legend>
  <form action="task2.php" method="get">
    <table class="parametrs">
      <tr>
        <td>
          <input type="number" name="corner" placeholder="Угол &deg;" min="0" max="359" >
        </td>
        <td>
          <input type="number" name="minutes" min="0" max="59" placeholder="Минуты &#8242;" >
        </td>
        <td>
          <input type="submit" value="Расчитать">
        </td>
      </tr>
    </table>
  </form>
</fieldset>
<br />