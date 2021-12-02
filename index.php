<?php

ini_set('display_errors',1);
//Запускаем сессию
session_start();

//Устанавливаем кодировку и вывод всех ошибок
header('Content-Type: text/html; charset=UTF8');
error_reporting(E_ALL);

require_once('app/app.php');






