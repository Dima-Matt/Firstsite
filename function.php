<?php

function renderTemplate($name, $data = []){

    $result = '';
    $name = $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $name . 'php';
    if(!file_exists($name)){
        return $result;
    } 

    ob_start();
    extract($data);
    require_once $name;
    $result = ob_get_clean();

    return $result;
}



function pr($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}