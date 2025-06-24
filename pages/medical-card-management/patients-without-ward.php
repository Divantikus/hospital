<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles/table.css">
  <title>Пациенты без палаты</title>
</head>

<body>
  <table>
    <tr>
      <td>Паспортные данные</td>
      <td>Причина поступления</td>
      <td>Добавить в палату</td>
      <?php include "../../logic/controllers/medical-card/list-patients-without-ward.php" ?>
    </tr>
  </table>
</body>

</html>