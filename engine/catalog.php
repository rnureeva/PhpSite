<?php

function getCatalog()
{
    $catalog = getAssocResult("SELECT * FROM products");
    return $catalog;
}

function addProductsLikes($id){
    $id = (int)$id;
    $sql = "UPDATE `products` SET `likes` = `likes` + 1 WHERE id = {$id}";
    changeDb($sql);
    header("Location: /catalog/");
}

function getCatalogContent($id){
    $id = (int)$id;
    $sql = "SELECT images,likes FROM `products` WHERE id = {$id}";
    $catalog = getAssocResult($sql);
    $result = [];
    if(isset($catalog[0]))
        $result = $catalog[0];
    return $result;
}