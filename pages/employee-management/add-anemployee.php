<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Добавление сотрудника</title>
</head>

<body>
  <form action="../../logic/controllers/employee/add-anemployee-controller.php" method="POST">
    <input type="text" placeholder="ФИО сотрудника" name="fullName" required minlength="5">
    <input type="text" placeholder="Специализация" name="specialization" required minlength="3">
    <input type="text" placeholder="Категория" name="category" required minlength="3">
    <input type="number" placeholder="Стаж" name="experience" required max="255">
    <button>Отправить</button>
  </form>
</body>

</html>