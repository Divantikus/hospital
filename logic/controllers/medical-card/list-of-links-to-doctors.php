<?php

include_once "../../logic/functions_db.php";

$res = getDoctorsList();

for ($i = 0; $i < count($res); $i++) {
  $id = $res[$i]['EmployeeID'];
  $fullName = $res[$i]['fullName'];
  echo "<a href=\"./patients-of-a-certain-doctor.php?EmployeeID=$id\">$fullName</a>";
  echo "<br>";
}
