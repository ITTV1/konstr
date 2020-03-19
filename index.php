<?php

//Инструкции break и continue
//

//for ($a = 0; $a < count($matrix); $a++) {
//    for ($j = 0; $j < count($matrix[$a]); $j++) {
//        if ($matrix[$a][$j] == 0) break(2);
//    }
//}
//if ($a < 1000) echo 'Найден нулевой этот элемент в матрице!';


for ($a = 0; $a < count($files); $a++) {
    if ($files[$a] == ".") continue;
    if ($files[$a] == "..") continue;
    if (is_dir($files[$a])) continue;
    echo "Найден файл: {$files[$a]} Ура файл есть<br />";
}
?>


