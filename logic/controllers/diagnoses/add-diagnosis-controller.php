<?php

include_once "../../functions_db.php";

$medicalCardID = $_POST['medicalCardID'];
$symbol = $_POST['symbol'];
$number = $_POST['number'];
$treatment = $_POST['treatment'];

$treatment = strlen($treatment) ? "'$treatment'" : "NULL";
$desId = getDiseaseID($symbol, $number);

if (count($desId) === 0) {
  header("Location: ../../../pages/result-page.php?text=Такой болезни нет в списке");
  exit;
}
$desId = $desId[0]['diseaseID'];


$res = addDiagnosis($medicalCardID, $desId, $treatment);

$text = $res === 0 ? "Не удалось установить диагноз" : "Диагноз установлен";
header("Location: ../../../pages/result-page.php?text=$text");
