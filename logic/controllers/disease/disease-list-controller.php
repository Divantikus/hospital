<?php
include "../../logic/functions_db.php";

$res = getDiseasesList();

for ($i = 0; $i < count($res); $i++) {
  $id = $res[$i]['diseaseID'];
  $symbol = $res[$i]['symbol'];
  $number = $res[$i]['number'];
  $description = $res[$i]['description'];
  echo "<tr>
    <td>$symbol</td>
    <td>$number</td>
    <td>$description</td>
    <td><a href=\"./update-disease.php?diseaseID=$id\">Редактировать</a></td>
  </tr>";
}
