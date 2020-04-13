<?php

function getImages()
{
    $images = getAssocResult("SELECT * FROM galery");
    return $images;
}

function addLikes($id){
    $id = (int)$id;
    $sql = "UPDATE `galery` SET `likes` = `likes` + 1 WHERE id = {$id}";
    changeDb($sql);
}

function getGaleryContent($id) {
    $id = (int)$id;
    $sql = "SELECT images,likes FROM `galery` WHERE id = {$id}";
    $galery = getAssocResult($sql);
    $result = [];
    if(isset($galery[0]))
        $result = $galery[0];
    return $result;
}