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
<?php
$button = 10;
    for($i=0;$i < $button;$i++) {
        if($i === 3 || $i === 6 || $i=== 9 || $i === 0) {
            echo '<button  data="'. $i .'">'. $i .'</button><br>';
        }else {
            echo '<button data="'. $i .'">'. $i .'</button>';
        }
    }
?>
<button data="+">+</button>
<button data="-">-</button>
<button data="*">*</button>
<button data="/">/</button>
<button class="summ" data="sum">=</button>
<div class="result"></div>
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function () {
    $(document).on('click', 'button', function () {
        let button = $(this);
        $('div.result').append(button.html())})
            if ($('.result').html().indexOf('=', $('.result')) !== -1) {
                console.log(1234)
                if ($('.result').html().indexOf('+') !== -1) {
                    let first_num = $('.result').html().substring(0, $('.result').html().indexOf('+')),
                        second_num = $('.result').html().substring(($('.result').html().indexOf('+') + 1));
                    debugger
                }
            }
});
</script>
<!--
1)Какую кнопку нажал пользователь
2)



 -->
</body>
</html>

