<?php
include_once "../../../logic/functions_db.php";
$id = $_POST['depId'];
$depName = $_POST['depName'];

$res = updateDepartmentNameByID($id, $depName);

if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Отделение уже существует");
  exit;
}

$text = $res === 0 ? "Не удалось редактировать отделение" : "Отделение отредактировано";
header("Location: ../../../pages/result-page.php?text=$text");
