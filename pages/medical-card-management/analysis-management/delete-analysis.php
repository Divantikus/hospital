<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Подтверждение удаления</title>
</head>

<body>
  <h1>Подтверждение удаления</h1>
  <form action="../../../logic/controllers/analysis/delete-analysis-controller.php" method="POST">
    <input type="hidden" name="analysisID" value="<?php echo $_GET['analysisID'] ?>">

    <button>Подтвердить удаление</button>
  </form>
  <a href="javascript:history.back()">Отменить удаление анализа</a>
</body>

</html>