<?php
define("TEMPLATES_DIR","../view/");
define("LAYOUTS_DIR", 'layout/');

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'news');

const ERR_CODE = [
    null => "",
    "OK" => "Отзыв добавлен!",
    "DELETED" => "Отзыв удален!",
    "ERROR_ADD" => "Ошибка добавления отзыва!",
    "ERROR_DEL" => "Ошибка удаления отзыва!",
    "ERROR_UPDATE" => "Ошибка изменения отзыва!",
    "UPDATED" => "Отзыв изменен!"
];

require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/controller.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/core.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/galary.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/news.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/catalog.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/feedback.php";

//require_once $_SERVER['DOCUMENT_ROOT'] . "/../engine/log.php";