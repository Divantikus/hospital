<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Удаление диагноза</title>
</head>

<body>
  <h1>Подтверждение удаления</h1>
  <form action="../../../logic/controllers/diagnoses/delete-diagnosis-controller.php" method="POST">
    <input type="hidden" name="diagnosisID" value="<?php echo $_GET['diagnosisID'] ?>">

    <button>Подтвердить удаление</button>
  </form>
  <a href="javascript:history.back()">Отменить удаление диагноза</a>
</body>

</html>