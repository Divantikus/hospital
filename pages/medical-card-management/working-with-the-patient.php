<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles/table.css">
  <link rel="stylesheet" href="../../styles/working.css">
  <title>Рабоать с пациентом</title>
</head>

<body>
  <h1>Пациент: <?php echo $_GET['pasData'] ?></h1>
  <a href="./diagnoses-management/add-diagnosis.php?medicalCardID=<?php echo $_GET['medicalCardID'] ?>">Добавить диагноз</a>
  <div>
    <p>История диагнозов</p>
    <table class="table">
      <tr>
        <th>Диагноз</th>
        <th>Лечение</th>
        <th>Дата выявления</th>
        <th>Редактировать</th>
        <th>Удалить</th>
      </tr>
      <?php include "../../logic/controllers/diagnoses/get-diagnosis-list-controller.php" ?>
    </table>
  </div>

  <div>
    <a href="./analysis-management/add-analysis.php?medicalCardID=<?php echo $_GET['medicalCardID'] ?>">Назначить анализ</a>
    <p>История анализов</p>
    <div>
      <table class="table">
        <tr>
          <th>Анализ</th>
          <th>Дата назначения</th>
          <th>Результат анализа</th>
          <th>Дата записи анализа</th>
          <th>Редактировать всю информацию</th>
          <th>Удалить</th>
        </tr>
        <?php include "../../logic/controllers/analysis/get-analysis-list-controller.php" ?>
      </table>
    </div>
    <a href="./discharge-the-patient.php?medicalCardID=<?php echo $_GET['medicalCardID'] ?>" class="link">Выписать пациента</a>

</body>

</html>