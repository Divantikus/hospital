<?php
include_once "../../functions_db.php";
$depName = $_POST['depName'];

$res = addDepartment($depName);

if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Отделение уже существует");
  exit;
}

$text = $res === 0 ? "Не удалось добавить отделение" : "Отделение добавлено";
header("Location: ../../../pages/result-page.php?text=$text");
