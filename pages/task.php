<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/table.css">
  <title>Задание</title>
</head>

<body>
  <h1>Задание</h1>
  <table>
    <tr>
      <th>Пациент</th>
      <th>Палата</th>
      <th>Лечение</th>
    </tr>
    <?php include "../logic/controllers/task/create-task-controller.php" ?>
  </table>
</body>

</html>