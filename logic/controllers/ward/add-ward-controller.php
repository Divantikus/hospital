<?php
include_once "../../functions_db.php";
$depId = $_POST['depId'];
$emplId = $_POST['emplId'];
$totalNumberOfBeds = $_POST['totalNumberOfBeds'];
$wardNumber = $_POST['wardNumber'];

$res = addWard($depId, $emplId, $totalNumberOfBeds, $wardNumber);

if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Палата с таким номером уже существует");
  exit;
}

$text = $res === 0 ? "Не удалось добавить палату" : "Палата добавлена";
header("Location: ../../../pages/result-page.php?text=$text");
