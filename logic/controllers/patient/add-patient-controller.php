<?php
include_once "../../functions_db.php";


$passportData = $_POST['passportData'];
$insuranceCompany = $_POST['insuranceCompany'];
$insurancePolicyNumber = $_POST['insurancePolicyNumber'];

$res = addPatient($passportData, $insuranceCompany, $insurancePolicyNumber);

if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Пациент уже существует");
  exit;
}

$text = $res === 0 ? "Не удалось добавить пациента" : "Пациент добавлен";
header("Location: ../../../pages/result-page.php?text=$text");
