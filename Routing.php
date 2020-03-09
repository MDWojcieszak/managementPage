<?php

require_once 'Controllers//MainPageController.php';
require_once 'Controllers//FileManagerController.php';

class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'mainPage' => [
                'controller' => 'MainPageController',
                'action' => 'page'
            ],
            'fileManager' => [
                'controller' => 'FileManagerController',
                'action' => 'manager'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'fileManager';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}