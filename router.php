<?php
class Router {
    private $routes = [
        'home' => 'HomeController',
        'contact' => 'ContactController',
        'not-found' => 'NotFoundController'
    ];
    private $controllersDir = __DIR__.'/controllers/';
    private $viewsDir = __DIR__.'/views/';
    private $currentRoute;

    public function run() {
        $route = $this->getRouteName();
        $this->loadController($route);
    }

    private function getRouteName() {
        if (!isset($_GET['page']) || empty($_GET['page'])) {
            $route = 'home';
        }
        elseif (!array_key_exists($_GET['page'], $this->routes)) {
            $route = 'not-found';
        }
        else {
            $route = $_GET['page'];
        }

        return $route;
    }

    private function loadController($route) {
        require_once $this->controllersDir.'base.controller.php';
        require_once $this->controllersDir.$route.'.controller.php';

        $controllerName = $this->routes[$route];
        $controller = new $controllerName();
        $controller->init();
    }
}
?>
