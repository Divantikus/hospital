<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Установить результат анализа</title>
</head>

<body>
  <form action="../../../logic/controllers/analysis/update-analysis-controller.php" method="POST">
    <input type="hidden" name="analysisID" value="<?php echo $_GET['analysisID'] ?>">
    Результат анализа:
    <input type="text" placeholder="Установить результат" name="result" required>
    <br>
    <button>Установить</button>
  </form>
</body>

</html>