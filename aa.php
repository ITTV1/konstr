<?php ## Возникает ошибка!
  require "php1.php";

//function LoadXlDocument($filename) { /* . . . */ }
//function SaveXlDocument($filename,$doc) { /* . . . */ }
//function LoadWDocument($filename) { /* . . . */ }
//function SaveWDocument($filename,$doc) { /* . . . */ }
//
//function LoadXlDocument($filename) { /* . . . */ }
//function SaveXlDocument($filename,$doc) { /* . . . */ }
  require "php7.php";
  $wd = LoadWDocument("document1.doc");
  $xd = LoadXlDocument("document1.xls");
?>
