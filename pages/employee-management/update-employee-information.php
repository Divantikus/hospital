<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обновить информацию о сотруднике</title>
</head>

<body>
  <form action="../../logic/controllers/employee/update-employee-information-controller.php" method="POST">
    <select name="id">
      <?php include "../../logic/controllers/employee/employee-drop-down-list-controller.php" ?>
    </select>

    <input type="text" placeholder="ФИО сотрудника" name="fullName" minlength="5">
    <input type="text" placeholder="Специализация" name="specialization" minlength="3">
    <input type="text" placeholder="Категория" name="category" minlength="3">
    <input type="number" placeholder="Стаж" name="experience">

    <button>Отправить</button>
  </form>
</body>

</html>