<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles/table.css">
  <title>Просмотр палат</title>
</head>

<body>
  <table>
    <th>Отделение</th>
    <th>Общее количество коек</th>
    <th>Номер палаты</th>
    <th>Зав. палатой</th>
    <th>Редактировать</th>
    <?php include "../../logic/controllers/ward/viewing-wards-controller.php" ?>
  </table>
</body>

</html>