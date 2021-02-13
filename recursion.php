<?php
$connect_db = mysqli_connect('localhost', 'root', 'root', 'test');
if (!$connect_db) {
    echo 'Bad connection Data Base!' . mysqli_connect_error();
}
$sql2 = 'SELECT * FROM access';
$res = mysqli_query($connect_db, $sql2);
$data_access = mysqli_fetch_all($res, MYSQLI_ASSOC);
//$array = [];  //выходной массив

//function recursive($data, $pid = 0, $level = 0)
//{
//    global $array;
//    foreach ($data as $row) { //перебираем строки
//        if ($row['pid'] == $pid) { //Начинаем со строк, pid которых передан в функцию, у нас это 0, т.е. корень сайта
//            //Собираем строку в ассоциативный массив
//            $_row['uid'] = $row['uid'];
//            $_row['pid'] = $row['pid'];
//            $_row['name'] = $_row['name'] = str_pad('', $level * 2, '.') . $row['name']; //Функцией str_pad добавляем точки
//            $_row['level'] = $level;       //Добавляем уровень
//
//            $array[] = $_row; //Прибавляем каждую строку к выходному массиву
//            //Строка обработана, теперь запустим эту же функцию для текущего uid, то есть
//            //пойдёт обратотка дочерней строки (у которой этот uid является pid-ом)
//            recursive($data, $row['uid'], $level + 1);
//        }
//    }
//}
//
//recursive($data_access); //Запускаем
//foreach ($array as $item) {
//    echo $item['name'].'<br>';
//}
function tree($array, $level): array {
    $tree = [];
    foreach ($array as $item) {
        if (isset($item['pid']) && $item['pid'] == $level) {
            $tree[] = str_pad('', $level * 2, '.') . $item['name'];
        }
        $level++;
        tree($tree, $level);
    }
    return $tree;
}
//$level = 0;
//foreach ($data_access as $item) {
//    if ($item['pid'] == $level) {
//        $tree[] = str_pad('', $level * 2, '.') . $item['name'];
//    }
//    $level++;
//}
//var_dump($tree);
$result = tree($data_access, 0);
foreach ($result as $row) {
    echo $row;
}
//var_dump($result);
