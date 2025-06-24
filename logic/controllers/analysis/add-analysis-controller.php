<?php

include_once "../../functions_db.php";

$id = $_POST['medicalCardID'];
$analysisName = $_POST['analysisName'];

$res = addAnalysis($id, $analysisName);


$text = $res === 0 ? "Не удалось назначить анализ" : "Анализ назначен";
header("Location: ../../../pages/result-page.php?text=$text");
