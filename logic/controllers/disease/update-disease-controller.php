<?php
include_once "../../functions_db.php";
include_once "../../functions/create-set-string.php";

$id = $_POST['diseaseID'];
$symbol = $_POST['symbol'];
$number = $_POST['number'];
$description = $_POST['description'];

$str = createSetString(['diseaseID']);

if (strlen($symbol) === 0 && strlen($number) === 0 && strlen($description) === 0) {
  header("Location: ../../../pages/result-page.php?text=Как минимум одно поле должно быть заполнено");
}


$res = updateDiseaseInfo($id, $symbol, $number, $str);


if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Болезнь уже находится в списке");
  exit;
}

$text = $res === 0 ? "Не удалось редактировать данные болезни" : "Данные болезни отредактированы";
header("Location: ../../../pages/result-page.php?text=$text");
