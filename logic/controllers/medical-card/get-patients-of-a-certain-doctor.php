<?php
include_once "../../logic/functions_db.php";

$EmployeeID = $_GET['EmployeeID'];

$res = getPatientsOfCertainDoctor($EmployeeID);

if (count($res) === 0) {
  echo "<h1>На данный момент у Вас нет пациентов</h1>";
  exit;
}

for ($i = 0; $i < count($res); $i++) {
  $id = $res[$i]['medicalCardID'];
  $passportData = $res[$i]['passportData'];
  $initialInspectionData = $res[$i]['initialInspectionData'];
  echo "<tr>
    <td>$passportData</td>
    <td>$initialInspectionData</td>
    <td><a href=\"./working-with-the-patient.php?medicalCardID=$id&pasData=$passportData\">Управление медкартой</a></td>
  </tr>";
}
