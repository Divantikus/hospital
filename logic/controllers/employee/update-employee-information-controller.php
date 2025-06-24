<?php

include_once "../../../logic/functions_db.php";
include_once "../../functions/create-set-string.php";

$id = $_POST['id'];
$str = createSetString(['id']);


if (strlen($str) < 4) {
  header("Location: ../../../pages/result-page.php?text=Данные не обновлены т.к. поля не были заполнены");
  exit;
}

$res = updateEmployeeInfo($id, $str);

// if ($res === -1) {
//   header("Location: ../../../pages/result-page.php?text=Сотрудник с такими данными уже существует");
// }

$text = $res === 0 ? "Не удалось обновить данные" : "Данные обновлены";

header("Location: ../../../pages/result-page.php?text=$text");
