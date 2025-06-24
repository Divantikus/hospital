<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Редактировать данные</title>
</head>

<body>
  <form action="../../logic/controllers/discharge/update-discharge-controller.php" method="POST">
    <input type="hidden" name="medicalCardID" value="<?php echo $_GET['medicalCardID'] ?>">
    <label>Результаты лечения</label>
    <br>
    <textarea name="treatmentResults" placeholder="Результаты лечения"></textarea>
    <br>
    <label>Рекомендации</label>
    <br>
    <textarea name="recommendations" placeholder="Рекомендации"></textarea>
    <br>
    <button>Выписать</button>
  </form>
</body>

</html>