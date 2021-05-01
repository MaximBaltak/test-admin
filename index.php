
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>test</title>
</head>
<body>
<h1>Добро пожаловать на сайт</h1>
<div class="wap">
    <button class="start" id="l">Войти</button>
    <button class="start" id="s">Зарегистрироваться</button>
</div>
<div class="form" id="1">
    <h2>Вход</h2>
    <form action="" method="post"  >
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Пороль" required>
        <button class="start f">Войти</button>
    </form>
</div>
<div class="form" id="2">
    <h2>Регистрация</h2>
    <form action="" method="post" >
        <input type="text" name="name" placeholder="Имя" required>
        <input type="text" name="login" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Пороль" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <button class="start f">Регистрация</button>
    </form>
</div>
<?php include './server.php' ?>
<?php include './sign.php' ?>
<script src="./script.js"></script>
</body>
</html>
