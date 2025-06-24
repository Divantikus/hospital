<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавить болезнь</title>
</head>

<body>
  <form action="../../logic/controllers/disease/add-disease-controller.php" method="POST">
    <div>
      <label>
        Символ болезни
      </label>
      <input type="text" placeholder="A-Z" name="symbol" pattern="^[A-Z]+$" required maxlength="1">
    </div>

    <div>
      <label>
        Номер болезни
      </label>
      <input type="text" placeholder="00.0-99.9" name="number" required>
    </div>
    <div>
      <label>
        Короткое описание
      </label>
      <input type="text" placeholder="Описание болезни" name="description" required>
    </div>
    <button>Добавить</button>
  </form>
</body>

</html>