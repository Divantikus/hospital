<?php

include_once "../../functions_db.php";

$analysisID = $_POST['analysisID'];

$result = $_POST['result'];

$res = setResultOfTheAnalysis($analysisID, $result);

$text = $res === 0 ? "Не удалось установить результат анализа" : "Результат анализа установлен";
header("Location: ../../../pages/result-page.php?text=$text");
