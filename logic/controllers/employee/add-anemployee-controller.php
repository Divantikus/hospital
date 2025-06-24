<?php
include_once "../../functions_db.php";
$fullName = $_POST["fullName"];
$specialization = $_POST['specialization'];
$category = $_POST['category'];
$experience = $_POST['experience'];

$res = addAnEmployee($fullName, $specialization, $category, $experience);

if ($res === -1) {
  header("Location: ../../../pages/result-page.php?text=Сотрудник уже существует");
  exit;
}

$text = $res === 0 ? "Не удалось добавить сотрудника" : "Сотрудник добавлен";
header("Location: ../../../pages/result-page.php?text=$text");
