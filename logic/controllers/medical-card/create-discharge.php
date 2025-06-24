<?php

include_once "../../functions_db.php";

$medicalCardID = $_POST['medicalCardID'];
$result = $_POST['result'];
$recommendations = $_POST['recommendations'];

$res = createDischarge($medicalCardID, $result, $recommendations);

$text = $res === 0 ? "Не удалось создать выписку" : "Выписка добавлена";
header("Location: ../../../pages/result-page.php?text=$text");
