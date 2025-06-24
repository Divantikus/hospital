<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сформировать выписку</title>
</head>

<body>
  <form action="../../logic/controllers/medical-card/create-discharge.php" method="POST">
    <input type="hidden" name="medicalCardID" value="<?php echo $_GET['medicalCardID'] ?>">
    <label>Результаты лечения</label>
    <br>
    <textarea name="result" placeholder="Результаты лечения" required></textarea>
    <br>
    <label>Рекомендации</label>
    <br>
    <textarea name="recommendations" placeholder="Рекомендации" required></textarea>
    <br>
    <button>Выписать</button>
  </form>
</body>

</html>