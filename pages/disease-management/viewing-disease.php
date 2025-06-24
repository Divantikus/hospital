<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles/table.css">
  <title>Список болезней</title>
</head>

<body>
  <h1>Список болезней</h1>
  <table>
    <tr>
      <th>Символ</th>
      <th>Номер</th>
      <th>Описание</th>
      <th>Редактировать</th>
    </tr>
    <?php include "../../logic/controllers/disease/disease-list-controller.php" ?>
  </table>
</body>

</html>