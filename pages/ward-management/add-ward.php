<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавить палату</title>
</head>

<body>
  <form action="../../logic/controllers/ward/add-ward-controller.php" method="POST">
    Отделение:
    <select name="depId">
      <?php include "../../logic/controllers/department/department-drop-down-list-controller.php" ?>
    </select>
    <br>
    Заведующий палатой:
    <select name="emplId">
      <?php
      include "../../logic/controllers/employee/employee-drop-down-list-controller.php" ?>
    </select>
    <br>
    Общее количество коек:
    <input type="number" placeholder="Общее количество коек" name="totalNumberOfBeds" required min="1">
    <br>
    Общее количество коек
    <input type="text" placeholder="Номер палаты" name="wardNumber" required maxlength="4">
    <br>
    <button>Добавить палату</button>
  </form>
</body>

</html>