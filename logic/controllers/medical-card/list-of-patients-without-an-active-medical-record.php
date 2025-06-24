<?php

include_once "../../logic/functions_db.php";

$res = getListOfPatientsWithoutAnActiveCard();

for ($i = 0; $i < count($res); $i++) {
  $patientID = $res[$i]['patientID'];
  $passportData = $res[$i]['passportData'];
  $insuranceCompany = $res[$i]['insuranceCompany'];
  $insurancePolicyNumber = $res[$i]['insurancePolicyNumber'];
  echo "<tr>
    <td>$passportData</td>
    <td>$insuranceCompany</td>
    <td>$insurancePolicyNumber</td>
    <td><a href=\"./add-card.php?patientID=$patientID\">Открыть медкарту</a></td>
  </tr>";
}
