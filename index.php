<?php
    error_reporting(E_ALL & ~E_NOTICE);
    spl_autoload_register();
    $url = $_SERVER['REQUEST_URI'];
    $junk = str_replace(
        basename(__FILE__),
        '',
        $_SERVER['PHP_SELF']
    );
    $significantPart = str_replace(
        $junk,
        '',
        $url
    );
        
    $urlParts = explode("/",$significantPart);
    $controller = array_shift($urlParts);
    $action = array_shift($urlParts);
    $params = $urlParts;

    if($controller == "" && $action == ""){
        $controller = "StatisticController";
        $action = "home";
    }

    include "dbConnect.php";

    $request = new Request($controller,$action,$params);
    $app = new App($request,$db);
    $app->start();
    
?>