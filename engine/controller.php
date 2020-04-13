<?php

function prepareVariables($page,$action, $id){
    $params = [];
    switch($page){
        case 'main':
            $params = ['name'=>'Alex'];
            break;
        case 'catalog':
            $params = [
                'catalog'=> getCatalog()
            ];
//            _log($params, "params");
            break;
        case 'catalogcontent':
            $params =[
                'catalogcontent' => getCatalogContent($id)
            ];
            break;
        case 'addlike':
            addProductsLikes($id);
            break;
        case 'news':
            doNewsAction($params, $action, $id);
            $params['news'] = getNews();
            break;
        case 'newscontent':
//            doNewsAction($params, $action, $id);
            $params= [
                'newscontent' => getNewsContent($id)
            ];
            break;
        case 'galery':
            $params = [
                'images' => getImages()
            ];
            break;
        case 'galerycontent':
            addLikes($id);
            $params =[
                'galerycontent' => getGaleryContent($id)
            ];
            break;

        case 'feedback':
            doFeedbackAction($params, $action, $id);
            $params['feedback'] = getAllFeedback();
            break;

        case 'apicatalog':
            $params = ['catalog'=> [
                "doll",
                "dog"
            ]
            ];
            echo json_encode($params);
            die();
            break;
    }
    return $params;
}


