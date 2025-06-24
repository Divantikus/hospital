<?php

include_once "../logic/functions_db.php";

$idList = '';



foreach ($_POST as $key => $value) {
  $idList = $idList . ',' . $value;
}

$idList = substr_replace($idList, '', 0, 1);

if (strlen($idList) === 0) {
  header("Location: ../pages/result-page.php?text=Для создания задания необходимо выбрать минимум одного пациента");
  exit;
}


$res = getTaskList($idList);

for ($i = 0; $i < count($res); $i++) {
  $passportData = $res[$i]['passportData'];
  $treatmentOfTheDiagnosis = $res[$i]['treatmentOfTheDiagnosis'];
  $wardNumber = $res[$i]['wardNumber'];

  echo "<tr>
    <td>$passportData</td>
    <td>$wardNumber</td>
    <td>$treatmentOfTheDiagnosis</td>
  </tr>";
}
