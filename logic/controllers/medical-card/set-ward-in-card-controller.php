<?php

include_once "../../functions_db.php";

$cardID = $_POST['medicalCardID'];
$EmployeeID = $_POST['EmployeeID'];
$wardID = $_POST['wardID'];
$text = $_POST['text'];

$res = setWard($cardID, $wardID, $EmployeeID, $text);

$text = $res === 0 ? "Не удалось записать пациента в палату" : "Пациент записан в палату";
header("Location: ../../../pages/result-page.php?text=$text");
