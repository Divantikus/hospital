<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="../../logic/controllers/patient/add-patient-controller.php" method="POST">
    <input type="text" placeholder="Паспортные данные" name="passportData" required>
    <input type="text" placeholder="Страховая компания" name="insuranceCompany" required>
    <input type="text" placeholder="Номер страхового полиса" name="insurancePolicyNumber" required>
    <button>Добавить пациента</button>
  </form>
</body>

</html>