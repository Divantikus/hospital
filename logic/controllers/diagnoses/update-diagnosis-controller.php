<?php

include_once "../../functions_db.php";
// include_once "../../functions/create-set-string.php";

$diagnosisID = $_POST['diagnosisID'];
$symbol = $_POST['symbol'];
$number = $_POST['number'];
$treatment = strlen($_POST['treatment']) !== 0 ? "'" . $_POST['treatment'] . "'" : NULL;

$desId = NULL;

$str = "";

if (strlen($symbol) > 0 && strlen($treatment) > 0) {

  $desId = getDiseaseID($symbol, $number);

  if (count($desId) === 0) {
    header("Location: ../../../pages/result-page.php?text=Такой болезни нет в списке");
    exit;
  }

  $desId = $desId[0]['diseaseID'];



  $str = "SET diseaseID = $desId, treatmentOfTheDiagnosis = $treatment";
} elseif (strlen($symbol) > 0) {

  $desId = getDiseaseID($symbol, $number);

  if (count($desId) === 0) {
    header("Location: ../../../pages/result-page.php?text=Такой болезни нет в списке");
    exit;
  }

  $desId = $desId[0]['diseaseID'];



  $str = "SET diseaseID = $desId";
} elseif (strlen($treatment) > 0) {

  $str = "SET treatmentOfTheDiagnosis = $treatment";
} else {

  header("Location: ../../../pages/result-page.php?text=Для редактирования необходимо заполнить минимум одно поле");
  exit;
}


$res = updateDiagnosisByID($diagnosisID, $str);


$text = $res === 0 ? "Не удалось отредактировать диагноз" : "Диагноз отредактирован";
header("Location: ../../../pages/result-page.php?text=$text");
