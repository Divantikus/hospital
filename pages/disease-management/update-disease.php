<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обновить данные болезни</title>
</head>

<body>
  <form action="../../logic/controllers/disease/update-disease-controller.php" method="POST">
    <input type="hidden" name="diseaseID" value="<?php echo $_GET['diseaseID'] ?>">
    <div>
      <label>
        Символ болезни
      </label>
      <input type="text" placeholder="A-Z" name="symbol" pattern="^[A-Z]+$" maxlength="1">
    </div>

    <div>
      <label>
        Номер болезни
      </label>
      <input type="text" placeholder="00.0-99.9" name="number" maxlength="4" minlength="4">
    </div>
    <div>
      <label>
        Короткое описание
      </label>
      <input type="text" placeholder="Описание болезни" name="description">
    </div>
    <button>Обновить данные</button>
  </form>
</body>

</html>