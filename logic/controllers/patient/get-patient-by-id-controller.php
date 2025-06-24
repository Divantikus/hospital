<?php
include_once "../../logic/functions_db.php";
$id = $_GET['patientID'];

$res = getPatientById($id);
$pasData = $res[0]['passportData'];
$insuranceCompany = $res[0]['insuranceCompany'];
$insurancePolicyNumber = $res[0]['insurancePolicyNumber'];


echo "<p>Паспортные данные: $pasData <br> Cтраховая компания: $insuranceCompany <br> Номер страхового полиса: $insurancePolicyNumber</p>";
