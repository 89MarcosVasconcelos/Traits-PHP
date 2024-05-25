<?php
require __DIR__.'/../vendor/autoload.php';
use Code\Controller\PageController;

$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);
/*parametros para navega��o*/
if(empty($url[0])){
    $controller = 'page';
}else{
    $controller = $url[0];
}

if(empty($url[1])){
    $action = 'index';
}else{
    $action = $url[1];
}

if(empty($url[2])){
    $param = null;
}else{
    $param = $url[2];
}
/*fim parametros navegacao*/


//verfify exists class
if(!class_exists($controller = "Code\Controller\\".ucfirst($controller).'Controller')){
    die("404 - P�gina n�o encontrada");
}


//verify exists method in the class
if(!method_exists($controller, $action)){
    $action = 'index';
    $param = $url[1];
}
//call the function and associate the controller, actions and parameters
$response = call_user_func_array([new $controller,$action], [$param]);


print $response;
