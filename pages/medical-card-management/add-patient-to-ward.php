<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавить пациента в палату</title>
</head>

<body>
  <form action="../../logic/controllers/medical-card/set-ward-in-card-controller.php" method="POST">
    <input type="hidden" name="medicalCardID" value="<?php echo $_GET['medicalCardID'] ?>">
    <label>Дежурный врач:</label>
    <select name="EmployeeID"><?php include "../../logic/controllers/medical-card/list-of-doctors.php" ?></select>

    <div>
      <label>Свободные палаты</label>
      <select name="wardID">
        <?php include "../../logic/controllers/medical-card/list-of-vacant-wards.php" ?>
      </select>
    </div>


    <div>
      <label>Данные первичного осмотра: </label>
      <br>
      <textarea name="text" required minlength="10"></textarea>
    </div>
    <button>Записать в палату</button>
  </form>
</body>

</html>