<?php
error_reporting(-1);
ini_set('display_errors', 1);

require_once __DIR__.'/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$cntClassName = $ctrl . 'Controller';

try{
$cnt = new $cntClassName;
$method = 'action' . $act;
$cnt->$method();
}
catch (Exception $e){
    http_response_code(404);
    $view = new View();
    $view->error = $e->getMessage();
    $view->display('error404.php');
}