<?php
class Router {
    private $routes = [
        'home' => 'HomeController',
        'contact' => 'ContactController',
        'project' => 'ProjectController',
        'not-found' => 'NotFoundController'
    ];
    private $controllersDir = __DIR__.'/controllers/';
    private $viewsDir = __DIR__.'/views/';

    public function run() {
        require_once $this->controllersDir.'base.controller.php';
        $route = $this->getRouteName();
        $this->loadController($route);
    }

    public redirectToPage($page) {
      $route = array_key_exists($page, $this->routes) ? $page : 'not-found';
      header("Location: index.php?page={$route}");
      exit();
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
        require_once $this->controllersDir.$route.'.controller.php';

        $controllerName = $this->routes[$route];
        $controller = new $controllerName($this);
        $controller->run();
    }
}
?>
