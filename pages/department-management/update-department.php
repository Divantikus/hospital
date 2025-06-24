<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Редактировать отдел</title>
</head>

<body>
  <form action="../../logic/controllers/department/update-department-controller.php" method="POST">
    <select name="depId">
      <?php
      include "../../logic/controllers/department/department-drop-down-list-controller.php"
      ?>
    </select>
    <input type="text" required minlength="3" name="depName">
    <button>Редактировать отдел</button>
  </form>


</body>

</html>