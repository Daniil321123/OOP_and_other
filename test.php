<?php
//$connect_db = mysqli_connect('localhost', 'root', 'root', 'weather_diary');
//if (!$connect_db) {
//    echo 'Bad connection Data Base!' . mysqli_connect_error();
//    die;
//} else {
//    echo 'Connection!';
//    mysqli_set_charset($connect_db, 'utf8');
//    $sql = 'INSERT INTO cities SET name = "Санкт-Петербург"';
//    $res = mysqli_query($connect_db, $sql);
//    if ($res === false) {
//        echo 'Warning'. mysqli_error($connect_db);
//    }
//    $city_id = mysqli_insert_id($connect_db);
//    $sql2 = 'INSERT INTO weather_log SET city_id=' . $city_id . ', day = "2021-04-19", temperature="10", cloud="1" ';
//    $res2 = mysqli_query($connect_db, $sql2);
//    if ($res2 === false) {
//        echo 'Bad SQL query!';
//    }else {
//        'Success!';
//    }
//    $sql_select = 'SELECT * FROM cities';
//    $res_select = mysqli_query($connect_db, $sql_select);
//    $res = mysqli_fetch_all($res_select, MYSQLI_ASSOC);
//    $i = 1;
//    foreach ($res as $re) {
//        echo 'Номер строки ' . $i . '  x' .$re['name'] . '  '. $re['id'];
//        $i++;
//    }
//    while ($row = mysqli_fetch_array($res_select)) {
//        var_dump($row['name']);
//        die;
//    }
//$arr = '1234567890';
//$arr1 = str_split($arr, 2);
//$arr_new = array_sum($arr1);
//var_dump($arr1);
//die;

class Calculator
{
    public function Plus($val1, $val2)
    {
        $sum = $val1 + $val2;
        echo "<h3>$sum</h3>";
    }

    public function Minus($val1, $val2)
    {
        $sum = $val1 - $val2;
        echo "<h3>$sum</h3>";
    }

    public function Divide($val1, $val2)
    {
        $sum = $val1 / $val2;
        echo "<h3>$sum</h3>";
    }

    public function Multiply($val1, $val2)
    {
        $sum = $val1 * $val2;
        echo "<h3>$sum</h3>";
    }

}

//$user = new UserTest('Daniil');
//echo $user->getSurname('Bezuglyi');
//echo '<br>';
//$user2 = new UserTest('Alex');
//echo $user2->getSurname('Alexxxx');
$summ = new Calculator();
$val1 = $_GET['var1'];
$val2 = $_GET['var2'];
$method = $_GET['method'];
if (!empty($val1) && !empty($val2)) {
    switch ($method) {
        case '+':
            $summ->Plus($val1, $val2);
            break;
        case '-':
            $summ->Minus($val1, $val2);
            break;
        case '*':
            $summ->Multiply($val1, $val2);
            break;
        case '/':
            $summ->Divide($val1, $val2);
            break;
        default:
            echo '<h2>Вы не выбрали действие!</h2>';
            break;
    }
} else {
    echo '<h2>Введите числа!</h2>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Calculator </h1><small>beta 0.1</small>
</div>
<form action="test.php" method="GET">
    <div class="input-group">
        <input type="number" name="var1" class="form-control-sm">
        <input type="number" name="var2">
        <input type="text" name="method" placeholder="Действие">
        <button type="submit" class="btn btn-primary">Посчитать</button>
        <a href="#" type="button " class="clear btn btn-danger">Очистить</a>
    </div>
</form>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function () {
        $(document).on('click', '.clear', function () {
            $('h3').hide();
        })
        $('h3').prepend('<h2>Ответ: </h2>')
    })
</script>
</html>
