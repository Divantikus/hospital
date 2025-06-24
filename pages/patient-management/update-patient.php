<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Редактирование данных пациента</title>
</head>

<body>
  <h1>Актуальные данные</h1>
  <?php include "../../logic/controllers/patient/get-patient-by-id-controller.php" ?>
  <form action="../../logic/controllers/patient/update-patient-controller.php" method="POST">
    <input type="hidden" name="patientID" value="<?php echo $_GET['patientID'] ?>">
    <input type="text" placeholder="Паспортные данные" name="passportData">
    <input type="text" placeholder="Страховая компания" name="insuranceCompany">
    <input type="text" placeholder="Номер страхового полиса" name="insurancePolicyNumber">
    <button>Обновить данные</button>
  </form>


</body>

</html>