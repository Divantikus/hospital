<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Назначить анализ</title>
</head>

<body>
  <form action="../../../logic/controllers/analysis/add-analysis-controller.php" method="POST">
    <input type="hidden" name="medicalCardID" value="<?php echo $_GET['medicalCardID'] ?>">
    Назначить анализ: <input type="text" placeholder="Название анализа" name="analysisName" required>
    <br>
    <button>Назначить</button>
  </form>
</body>

</html>