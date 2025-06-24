<?php
include_once "../../logic/functions_db.php";
include_once "../../logic/functions/create-drop-down-list-options.php";

$res = getAllPatients();

if (count($res) === 0) {
  echo "<h1>Список пациентов пуст</h1>";
}

for ($i = 0; $i < count($res); $i++) {
  $id = $res[$i]['patientID'];
  $passportData = $res[$i]['passportData'];
  $insuranceCompany = $res[$i]['insuranceCompany'];
  $insurancePolicyNumber = $res[$i]['insurancePolicyNumber'];
  echo "<tr>
    <td>$passportData</td>
    <td>$insuranceCompany</td>
    <td>$insurancePolicyNumber</td>
    <td><a href=\"./update-patient.php?patientID=$id\">Редактировать данные</a></td>
  </tr>";
}
