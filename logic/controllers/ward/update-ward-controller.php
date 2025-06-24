<?php
include_once "../../functions_db.php";
include_once "../../functions/create-set-string.php";

$id = $_POST['wardID'];

$str = createSetString(['wardID']);

$res = updateWardInfo($id, $str);

$text = $res === 0 ? "Не удалось отредактировать данные палаты" : "Данные палаты были изменены";

header("Location: ../../../pages/result-page.php?text=$text");
