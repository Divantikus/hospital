<?php

include_once "../../functions_db.php";
include_once "../../functions/create-set-string.php";

$id = $_POST['medicalCardID'];
// $result = $_GET['result'];
// $recommendations = $_GET['recommendations'];

$str = createSetString(['medicalCardID']);

$res = updateDischarge($id, $str);

$text = $res === 0 ? "Не удалось отредактировать выписку" : "Выписка отредактирована";
header("Location: ../../../pages/result-page.php?text=$text");
