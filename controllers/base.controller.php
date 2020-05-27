<?php
    require_once $this->viewsDir.'view.php';

    abstract class BaseController {
        protected $templateName = 'default';
        protected $partialName = 'default';
        protected $data = null;

        public function init() {
            $this->render();
        }

        protected function render() {
            $view = new View($this->templateName, $this->partialName);
            $view->render($this->data);
        }
    }
?>