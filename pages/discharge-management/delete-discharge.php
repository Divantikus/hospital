<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Подтверждение удаления</title>
</head>

<body>
  <h1>Подтверждение удаления</h1>
  <form action="../../logic/controllers/discharge/delete-discharge-controller.php" method="POST">
    <input type="hidden" name="medicalCardID" value="<?php echo $_GET['medicalCardID'] ?>">

    <button>Подтвердить удаление</button>
  </form>
  <a href="javascript:history.back()">Отменить удаление диагноза</a>
</body>

</html>