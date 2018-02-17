<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inslab</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="summernote.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="summernote.min.js"></script>
    <script src="myscript.js"></script>
</head>
<body>
    <form class="col-lg-4">
        <h1>Тестовое задание</h1>
        <h2>Рассылка электронных писем</h2>
        <div class="message-complete"></div>
        <div class="form-group">
            <input type="email" class="form-control valid" id="emails" name="emails" required placeholder="emails separated by commas" />
            <span class="no-fill-field">Поле не заполнено</span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control valid" id="title" name="title" required placeholder="Тема письма" />
            <span class="no-fill-field">Поле не заполнено</span>
        </div>
        <p>
            <textarea class="form-control valid" id="text" rows="10" cols="44" required placeholder="Это тектовая рассылка"></textarea>
            <span class="no-fill-field">Поле не заполнено</span>
        </p>
        <input type="button" class="btn btn-default" id="send" value="Отправить" />
    </form>
</body>
</html>
