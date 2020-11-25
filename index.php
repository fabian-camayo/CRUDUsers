<?php
    require_once 'data/database.php';

    $controller = 'user';

        // FrontController
        if(!isset($_REQUEST['c']))
        {
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            $controller->Index();    
        }
        else
        {
            // Obtener controlador
            $controller = strtolower($_REQUEST['c']);
            $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
            // Instanciar controlador
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
    
            // Llama  a la accion
            call_user_func( array( $controller, $action ) );
        }