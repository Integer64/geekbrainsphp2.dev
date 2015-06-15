<?php
namespace Application\Lesson05;

use \PDOException;
use \Exception;
use Application\Lesson05\classes\LogException;
use Application\Lesson05\views\View;
error_reporting(-1);
ini_set('display_errors', 1);

require_once __DIR__.'/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$cntClassName = 'Application\\Lesson05\\controllers\\' . $ctrl;

try{
$cnt = new $cntClassName;
$method = 'action' . $act;
$cnt->$method();
}
catch (PDOException $e){
    $log = new LogException();
    $log->writeLog($e);
    http_response_code(403);
    $view = new View();
    $view->error = $e->getMessage();
    $view->display('error403.php');
    die;
}
catch (Exception $e){
    http_response_code(404);
    $view = new View();
    $view->error = $e->getMessage();
    $view->display('error404.php');
}