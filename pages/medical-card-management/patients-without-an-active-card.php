<!DOCTYPE html>
<html lang="en">

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
      <th>Открыть медкарту</th>
    </tr>
    <?php include "../../logic/controllers/medical-card/list-of-patients-without-an-active-medical-record.php" ?>
  </table>

</body>

</html>