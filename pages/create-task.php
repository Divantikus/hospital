<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Выбор пациентов</title>
</head>

<body>
  <form action="./task.php" method="POST">
    <table>
      <?php include "../logic/controllers/task/get-list-for-task-controller.php" ?>
    </table>
    <button>Создать задание</button>
  </form>
</body>

</html>