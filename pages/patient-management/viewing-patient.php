<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles/table.css">
  <title>Список пациентов</title>
</head>

<body>
  <table>
    <tr>
      <th>Паспортные данные</th>
      <th>Страховая компания</th>
      <th>Номер страхового полиса</th>
      <th>Редактировать данные</th>
    </tr>
    <?php include "../../logic/controllers/patient/patient-list-controller.php" ?>
  </table>
</body>

</html>