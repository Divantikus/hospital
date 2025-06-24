<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавить отделение</title>
</head>

<body>
  <form action="../../logic/controllers/department/add-department-controller.php" method="POST">
    <input type="text" name="depName" placeholder="Название отделения" required minlength="3">
    <button>Добавить</button>
  </form>
</body>

</html>