<?php

function renderMenu()
{
    return "<a href=\"/\">Main</a>
<a href=\"/catalog/\">Catalog</a>
<a href=\"/news/\">News</a>
<a href=\"/galery/\">Galery</a>
<a href=\"/feedback/\">Feedback</a>
<a href=\"/apicatalog/\">API</a>";
}

function render($page, $params= []){
    return renderTemplate(LAYOUTS_DIR . "layout",['content'=>renderTemplate($page,$params), 'menu' => renderMenu()]);
}

function renderTemplate($page, $params=[]){
    ob_start();
    extract($params);
    $filename = TEMPLATES_DIR . $page . ".php";
    if (file_exists($filename)){
        include $filename;
    }
    return ob_get_clean();
}

