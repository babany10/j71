<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];
/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `bron` (`Name`, `Email`, `Number_phone`, `Date`, `Time` , `guests`) VALUES ('$name', '$email' ,'$phone',  '$date' , '$time' ,'$guests' )");

/*
 * Переадресация на главную страницу
 */

header('Location: /');