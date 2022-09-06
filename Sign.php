<?php
$name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

// хешируем пароль
$password = md5($password."657434f3f4478");

$mysql = new mysqli('localhost', 'root', 'root', 'users');
//это забись означает то что если пользователь зарегелся то при входе на свой акк его имя и пароль будут сравниваться
//если все правильно написал то заходит если нет то нет
$result = $mysql->query("SELECT * FROM `uchiha` WHERE  `name` =
                              '$name' AND `password` = '$password'");
//fetch_assoc конвертирует все данные что мы получили с базы данных  в массив
$user = $result->fetch_assoc();
//если длинна массива равна 0 то такого пользователя не было найдено
if (empty($user) or count($user) == 0) {
    echo "This user no found";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");
//закрытие БД
$mysql->close();

header('Location: /');
?>





