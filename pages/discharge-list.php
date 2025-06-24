<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/table.css">
  <title>Список выписок</title>
</head>

<body>
  <table>
    <tr>
      <th>Пациент</th>
      <th>Результаты лечения</th>
      <th>Дата выписки</th>
      <th>Редактировать</th>
      <th>Удалить</th>
    </tr>
    <?php include "../logic/controllers/discharge/discharge-list-controller.php" ?>
  </table>
</body>

</html>