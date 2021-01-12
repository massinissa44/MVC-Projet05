<?php
    class Router {
        /**
         * $routes is of type [$key => $value] where $key is a page name and $value is the name of the controller associated to this $key
         */
        private $routes = [
            'home' => 'HomeController',
            'contact' => 'ContactController',
            'about' => 'AboutController',
            'project' => 'ProjectController',
            'login' => 'LoginController',
            'not-found' => 'NotFoundController',
            'send-message' => 'SendMessageController'
        ];

        function __construct() {
            require_once VIEWS_DIR.'/view.php';
            require_once CONTROLLERS_DIR.'/base.controller.php';
        }

        public function run() {
            $route = $this->getPageName();
            $this->loadController($route);
        }

        public function redirectToPage($page) {
            $route = $this->getRouteName($page);
            header("Location: index.php?page={$route}");
            exit();
        }

        private function getPageName() {
            if (!isset($_GET['page']) || empty($_GET['page'])) {
                $route = 'home';
            }
            else {
                $route = $this->getRouteName($_GET['page']);
            }

            return $route;
        }

        private function getRouteName($page) {
            /**
             * Ternary operator version
             * return array_key_exists($page, $this->routes)
             *     ? $page
             *     : 'not-found';
             */

            if (array_key_exists($page, $this->routes)) {
                $route = $page;
            }
            else {
                $route = 'not-found';
            }

            return $route;
        }

        private function loadController($route) {
            require_once CONTROLLERS_DIR."/{$route}.controller.php";
            $controllerName = $this->routes[$route];
            $controller = new $controllerName($this);
            $controller->run();
        }
    }
?>
