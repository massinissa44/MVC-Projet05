<?php
  abstract class BaseController {
    protected $templateName = 'default';
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
      $view = new View($this->partialName, $this->templateName);
      $view->render($this->data);
    }
  }
?>
