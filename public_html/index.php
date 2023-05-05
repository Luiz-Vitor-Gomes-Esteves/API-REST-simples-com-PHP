<?php 
require_once '../vendor/autoload.php';

// http://localhost/Criando_APIs/RefaelCapoani/api_rest_2021/public_html/api/user/1

if($_GET['url']){
    $url = explode('/',$_GET['url']);
    var_dump($url);

    if($url[0]==='api'){
        $service = $url['1'];
    }
}