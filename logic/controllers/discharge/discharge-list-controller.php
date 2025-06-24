<?php

include_once "../logic/functions_db.php";

$res = getAllDischarges();

for ($i = 0; $i < count($res); $i++) {
  $medicalCardID = $res[$i]['medicalCardID'];
  $passportData = $res[$i]['passportData'];
  $treatmentResults = $res[$i]['treatmentResults'];
  $dateOfDischarge = $res[$i]['dateOfDischarge'];

  echo "<tr>
    <td>$passportData</td>
    <td>$treatmentResults</td>
    <td>$dateOfDischarge</td>
    <td><a href=\"./discharge-management/update-discharge.php?medicalCardID=$medicalCardID\">Редактировать</a></td>
    <td><a href=\"./discharge-management/delete-discharge.php?medicalCardID=$medicalCardID\">Удалить</a></td>
  </tr>";
}
