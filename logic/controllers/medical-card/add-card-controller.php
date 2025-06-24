<?php

include_once "../../functions_db.php";

$patientID = $_POST['patientID'];
$EmployeeID = $_POST['EmployeeID'];
$reasonForAdmission = $_POST['reasonForAdmission'];

$res = createCard($patientID, $EmployeeID, $reasonForAdmission);

$text = $res === 0 ? "Не удалось создать медкарту" : "Медкарта добавлена";
header("Location: ../../../pages/result-page.php?text=$text");
