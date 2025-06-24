<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавить диагноз</title>
</head>

<body>
  <form action="../../../logic/controllers/diagnoses/add-diagnosis-controller.php" method="POST">
    <input type="hidden" name="medicalCardID" value="<?php echo $_GET['medicalCardID'] ?>">
    <div>
      <label>
        Символ болезни:
      </label>
      <input type="text" placeholder="A-Z" name="symbol" pattern="^[A-Z]+$" required maxlength="1">
    </div>

    <div>
      <label>
        Номер болезни:
      </label>
      <input type="text" placeholder="00.0-99.9" name="number" required>
    </div>
    <div>
      <label>Лечение: </label>
      <input type="text" placeholder="Лечение" name="treatment">
      <br>
      <button>Отправить</button>
  </form>
</body>

</html>