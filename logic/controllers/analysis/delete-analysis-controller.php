<?php

include_once "../../functions_db.php";

$analysisID = $_POST['analysisID'];

$res = deleteanalysisByID($analysisID);

$text = $res === 0 ? "Не удалось удалить анализ" : "Анализ удалён";
header("Location: ../../../pages/result-page.php?text=$text");
