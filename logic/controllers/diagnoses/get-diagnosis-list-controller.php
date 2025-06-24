<?php

include_once "../../logic/functions_db.php";

$medicalCardID = $_GET['medicalCardID'];

$res = getDiagnosisListByID($medicalCardID);

for ($i = 0; $i < count($res); $i++) {
  $id = $res[$i]['diagnosisID'];
  $description = $res[$i]['description'];
  $treatmentOfTheDiagnosis = $res[$i]['treatmentOfTheDiagnosis'];
  $treatmentOfTheDiagnosis = $treatmentOfTheDiagnosis ? $treatmentOfTheDiagnosis : 'Диагноз вылечен';
  $installationDate = $res[$i]['installationDate'];

  echo "<tr>
    <td>$description</td>
    <td>$treatmentOfTheDiagnosis</td>
    <td>$installationDate</td>
    <td><a href=\"./diagnoses-management/update-diagnosis.php?diagnosisID=$id\">Редактировать</a></td>
    <td><a href=\"./diagnoses-management/delete-diagnosis.php?diagnosisID=$id\">Удалить</a></td>
  </tr>";
}
