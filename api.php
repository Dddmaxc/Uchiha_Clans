<?php

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['Email']),
    FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "name password";
    exit();
}
if(mb_strlen($email) < 5 || mb_strlen($email) > 40) {
    echo "name password";
    exit();
}
if(mb_strlen($password) < 5 || mb_strlen($password) > 50) {
    echo "2 to 6 characters";
    exit();
}

// хешируем пароль
$password = md5($password."657434f3f4478");

$mysql = new mysqli('localhost', 'root', 'root', 'users');
$mysql->query("INSERT INTO `uchiha` (`name`, `email`, `password`)
VALUES('$name', '$email', '$password')");

//закрытие БД
$mysql->close();
//переход страницы на ту откуда и заполнялась форма
header('Location: /');

?>
