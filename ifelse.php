<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Альтернативный синтаксис пхпп if-else.</title>
  <meta charset='utf-8'>
</head>
<body>
<?php if (isset($_REQUEST['go1'])):?>
  Привет, <?=$_REQUEST['name']?>!
<?php else:?>
  <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
  Введите Ваше имя: <input type="text" name="name"><br />
  <input type="submit" name="go1" value="отобразить имя!">
  </form>
<?php endif?>
</body>
</html>
