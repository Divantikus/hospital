<?php

include_once "../../logic/functions_db.php";

$res = getPatientsWithoutWard();

for ($i = 0; $i < count($res); $i++) {
  $medicalCardID = $res[$i]['medicalCardID'];
  $passportData = $res[$i]['passportData'];
  $reasonForAdmission = $res[$i]['reasonForAdmission'];
  echo "<tr>
  <td>$passportData</td>
  <td>$reasonForAdmission</td>
  <td><a href=\"./add-patient-to-ward.php?medicalCardID=$medicalCardID\">Добавить в палату</a></td>
  </tr>";
}
