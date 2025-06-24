<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обновить данные палаты</title>
</head>


<body>
  <form action="../../logic/controllers/ward/update-ward-controller.php" method="POST">
    <input type="hidden" value="<?php echo $_GET['wardID'] ?>" name="wardID">
    <select name="departmentID">
      <?php include "../../logic/controllers/department/department-drop-down-list-controller.php" ?>
    </select>

    <select name="headOfTheWardID">
      <?php include "../../logic/controllers/employee/employee-drop-down-list-controller.php" ?>
    </select>

    <input type="number" placeholder="Количество коек" name="totalNumberOfBeds" min="1">
    <input type="text" placeholder="Новый номер палаты" name="wardNumber" maxlength="4">
    <button>Редактировать палату</button>
  </form>
</body>

</html>