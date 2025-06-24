<?php

include_once "../../functions_db.php";

$diagnosisID = $_POST['diagnosisID'];

$res = deleteDiagnosisByID($diagnosisID);

$text = $res === 0 ? "Не удалось удалить диагноз" : "Диагноз удалён";
header("Location: ../../../pages/result-page.php?text=$text");
