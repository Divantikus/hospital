<?php
include_once "../../logic/functions_db.php";

$res = getAllWardInfo();

for ($i = 0; $i < count($res); $i++) {
  $id = $res[$i]['id'];
  $depName = $res[$i]['depName'];
  $totalCount = $res[$i]['totalCount'];
  $warbNumber = $res[$i]['wardNumber'];
  $fullName = is_null($res[$i]['fullName']) ? "Заведующий отсутствует" : $res[$i]['fullName'];

  echo "<tr>
    <td>$depName</td>
    <td>$totalCount</td>
    <td>$warbNumber</td>
    <td>$fullName</td>
    <td><a href=\"./update-ward.php?wardID=$id\">Редактировать</a></td>
  </tr>";
}
