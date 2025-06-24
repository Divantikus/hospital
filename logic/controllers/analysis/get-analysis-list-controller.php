<?php

include_once "../../logic/functions_db.php";

$cardId = $_GET['medicalCardID'];

$res = getAllAnalysis($cardId);

for ($i = 0; $i < count($res); $i++) {
  $id = $res[$i]['id'];
  $anNanameme = $res[$i]['name'];
  $dateSet = $res[$i]['dateSet'];
  $result = $res[$i]['result'];
  $dateRes = $res[$i]['dateRes'];
  $updData = "<td>Результат установлен</td>";

  if (is_null($result)) {
    $result = 'Не установлен';
    $dateRes = 'Не установлена';
    $updData = "<td><a href=\"./analysis-management/update-analysis.php?analysisID=$id\">Установить результат</a></td>";
  }

  echo "<tr>
    <td>$anNanameme</td>
    <td>$dateSet</td>
    <td>$result</td>
    <td>$dateRes</td>
    $updData
    <td><a href=\"./analysis-management/delete-analysis.php?analysisID=$id\">Удалить</a></td>
  </tr>";
}
