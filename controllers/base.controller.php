<?php
    abstract class BaseController {
        protected $partialName = 'default';
        // TODO remove me
        protected $data;
        protected $router;

      function __construct($router) {
        $this->router = $router;
      }

      public function run() {
        $this->render();
      }

      // TODO remove me
      public function render() {
        $view = new View($this->partialName);
        $view->render($this->data);
      }
    }
?>
