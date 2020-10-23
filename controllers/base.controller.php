<?php
    require_once $this->viewsDir.'view.php';

    abstract class BaseController {
        protected $templateName = 'default';
        protected $partialName = 'default';
        // TODO remove me
        protected $data;
        protected $router;

        __construct($router) {
          $this->router = $router;
        }

        public function run() {
          $this->render();
        }

        // TODO remove me
        public function render() {
          $view = new View($this->templateName, $this->partialName);
          $view->render($this->data);
        }
    }
?>
