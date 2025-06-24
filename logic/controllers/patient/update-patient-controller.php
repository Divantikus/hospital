<?php
include_once "../../functions_db.php";
include_once "../../functions/create-set-string.php";

$id = $_POST['patientID'];
$passportData = $_POST['passportData'];
$insuranceCompany = $_POST['insuranceCompany'];
$insurancePolicyNumber = $_POST['insurancePolicyNumber'];

$str = createSetString(['patientID']);

if (strlen($passportData) === 0 && strlen($insuranceCompany) === 0 && strlen($insurancePolicyNumber) === 0) {
  header("Location: ../../../pages/result-page.php?text=Как минимум одно поле должно быть заполнено");
}

$res = updatePatientInfo($id, $passportData, $str);

if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Пациент с такими данными уже существует");
  exit;
}

$text = $res === 0 ? "Не удалось редактировать данные пациента" : "Данные пациента отредактированы";
header("Location: ../../../pages/result-page.php?text=$text");
