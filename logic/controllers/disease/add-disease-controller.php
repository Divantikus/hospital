<?php
include_once "../../functions_db.php";

$symbol = $_POST['symbol'];
$number = $_POST['number'];
$description = $_POST['description'];


$res = addDisease($symbol, $number, $description);

if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Болезнь уже находится в списке");
  exit;
}

$text = $res === 0 ? "Не удалось добавить болезнь в список" : "Болезнь добавлена в список";
header("Location: ../../../pages/result-page.php?text=$text");
