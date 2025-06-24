<?php

include_once "../../functions_db.php";

$id = $_POST['medicalCardID'];

$res = deleteDischargeByID($id);

$text = $res === 0 ? "Не удалось удалить выписку" : "Выписка удалена";
header("Location: ../../../pages/result-page.php?text=$text");
