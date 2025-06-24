<?php

include_once "../logic/functions_db.php";

$res = getAllPatientsWithActiveCard();

for ($i = 0; $i < count($res); $i++) {
  $fullName = $res[$i]['passportData'];
  $medicalCardID = $res[$i]['medicalCardID'];


  echo "<tr>
    <td>$fullName</td>
    <td>
    <input type=\"checkbox\" name=\"checkbox-$i\" value=\"$medicalCardID\">
    </td>
  </tr>";
}
