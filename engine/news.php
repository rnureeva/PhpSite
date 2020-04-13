<?php

function getNews()
{
    $news = getAssocResult("SELECT * FROM news");
    return $news;
}

function getNewsContent($id) {
    $id = (int)$id;
    $sql = "SELECT text FROM news WHERE id = {$id}";
    $news = getAssocResult($sql);
    $result = [];
    if(isset($news[0]))
        $result = $news[0];
    return $result;
}

function doNewsAction(&$params, $action, $id) {
//    if ($_GET['status'] == 1) {$params['error'] = "Отзыв добавлен!";}
    if ($_GET['status'] == 2) {$params['error'] = "News deleted!";}

    if ($action == "delete") {
        $db = getDb();
        $sql = "DELETE FROM `news` WHERE `news`.`id` = {$id}";
        changeDb($sql);
        header("Location: /news/?status=2");
        die();
    }
}