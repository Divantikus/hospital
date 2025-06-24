<?php
$info = $_GET['text'];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1500" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $info ?></title>
</head>

<body>
  <div class="container">
    <h1 class="title"><?php echo $info ?></h1>

    <a href="../" class="link">Вернуться в главное меню</a>
  </div>
</body>

</html>