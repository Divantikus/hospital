<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавить мед карту</title>
</head>

<body>
  <form action="../../logic/controllers/medical-card/add-card-controller.php" method="POST">
    <input type="hidden" value="<?php echo $_GET['patientID'] ?>" name="patientID">
    <label>Карту создаёт: </label>

    <select name="EmployeeID">
      <?php include "../../logic/controllers/medical-card/list-of-nurses.php" ?>
    </select>
    <br>
    <label>Причина поступления: </label>
    <input type="text" placeholder="Причина поступления" name="reasonForAdmission" required>
    <br>
    <button>Создать</button>
  </form>

</body>

</html>