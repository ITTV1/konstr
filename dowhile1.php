<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Нетрадиционное использование    do-while и break</title>
  <meta charset='utf-8'>
</head>
<body>
  <?php

//  if (что_то) do { ... } while (0);
    $sError = 0; // индикатор ошибки - если не 0, то была ошибка
    // Если нажали кнопку Submit1 (с именем $doSubmit1)...
    if (isset($_REQUEST['doSubmit1'])) do {
      // Проверка входных данных
      if ($_REQUEST['reloads'] != 2+2*2) { $sError = 1; break; }
      if ($_REQUEST['loader'] != "php") { $sError = 1; break; }
      // и т. д. - здесь может быть множество других проверок.
      // ...
      // В этой точке данные точно в порядке. Обрабатываем их.
      echo "Вы внимательный человек ура, поздравляем Вас с этим!<br />";
      // Можно записать данные в файл.
      exit();
    } while (0);
    // Произошла ли ошибка?
    if ($sError) {
      echo "Вы ответили неправильно, попробуйте еще раз.";
    }
  ?>
  <!-- Выводим форму, через которую пользователь будет запускать этот 
  сценарий, вывод ошибок -->
  <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
    Число перезагрузок программы: <input type="text" name="reloads"><br />
    Загрузочная программа работает: <input type="text" name="loader"><br />
    <input type="submit" name="doSubmit1" value="Нужно Ответить на вопросы">
  </form>
</body>
</html>
