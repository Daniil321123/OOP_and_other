<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="content">
    <div class="content-wrapper" style="text-align: center;">
        <form action="" method="POST" class="form-group">
            <input type="text" name="city" placeholder="City" class="form-group-sm city">
            <input type="button" value="Send" class="send">
        </form>
        <span class="response"></span>
    </div>
    <br>
    <?php
    if (!isset($_GET['name'])) {
        ?>
        <div style="text-align: center;">
            <form action="" method="GET" class="form-group">
                <input type="text" placeholder="name" class="form-group-sm" name="name">
                <textarea name="massage" placeholder="Massage" class="text-body"></textarea><br>
                <input type="submit">
            </form>
        </div>
    <?php } ?>
</div>
<br>

<div class="test" style="text-align: center">
    <h2>Last task</h2>
    <form action="" method="POST" class="form-group">
        <label for="name">Name<span class="required" style="color: red;">*</span></label>
        <input type="text" id="name" class="form-group-sm" name="name" placeholder="Name"><br>
        <label for="pass">Password <span class="required" style="color: red;">*</span></label>
        <input type="password" id="pass" name="pass" placeholder="Password">
        <input type="submit" value="Send" class="btn-sm btn-danger">
    </form>
</div>
</body>
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function () {
        $(document).on('click', '.send', function () {
            $.ajax({
                method: 'POST',
                url: 'ajax_succes.php',
                dataType: "html",
                data: {['city']: $('.city').val()},
                success: function (response) {
                    $('form').hide()
                    $('.response').html('Ваш город: <strong>' + response + '</strong><br><button class="show-form">Показать форму</button>')
                    console.log(response)
                }
            })
        }).on('click', '.show-form', function () {
            $('form').show();
            $('.response').hide();
        })
    });
</script>
</html>

<?php
if (!empty($_POST['name']) && !empty($_POST['pass'])) {
    $login = 'user';
    $pass = '123321';
    $form_login = trim($_POST['name']);
    $form_pass = trim($_POST['pass']);
    if ($form_login == $login && $form_pass == $pass) {
        echo 'Доступ разрешен!';
    } else {
        echo 'Доступ запрещен!';
    }
} else {
    echo 'Не все поля заполнены!';
}
if (!empty($_GET['name']) || !empty($_GET['massage'])) {
    $name = strip_tags($_GET['name']);
    $massage = strip_tags($_GET['massage']);
    echo 'Ваше имя: ' . $name . '. Ваше сообщение: ' . $massage;
}
?>
