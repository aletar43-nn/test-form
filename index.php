<?php
header('Content-Type:text/html;charset=UTF-8');
require_once('config.php');
require_once('classes/ACore.php');

if($_GET['option']){
    $class = trim(strip_tags($_GET['option']));

}else{
    $class = 'main';
}
if(file_exists('classes/'.$class.'.php')){
    include ('classes/'.$class.'.php');
    if(class_exists($class)){
        $obj = new $class;
        $obj -> get_body();

    }else{
        exit('<p>Не верные данные для входа</p>');

    }
}else{
    exit('<p>Не верный адрес</p>');

}
?>