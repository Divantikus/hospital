<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Редактировать диагноз</title>
</head>

<body>
  <form action="../../../logic/controllers/diagnoses/update-diagnosis-controller.php" method="POST">
    <input type="hidden" name="diagnosisID" value="<?php echo $_GET['diagnosisID'] ?>">
    <label>
      Символ болезни:
    </label>
    <input type="text" placeholder="A-Z" name="symbol" pattern="^[A-Z]+$" maxlength="1">
    </div>

    <div>
      <label>
        Номер болезни:
      </label>
      <input type="text" placeholder="00.0-99.9" name="number">
    </div>
    <div>
      <label>Лечение: </label>
      <input type="text" placeholder="Лечение" name="treatment">
      <br>
      <button>Редактировать</button>
  </form>
</body>

</html>