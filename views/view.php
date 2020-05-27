<?php
    class View {
        public $templateName;
        public $partialName;
        public $data;

        protected $templatesDir = __DIR__.'/templates/';
        protected $partialsDir = __DIR__.'/partials/';

        function __construct($templateName, $partialName) {
            $this->templateName = $templateName;
            $this->partialName = $partialName;
        }

        public function render($data) {
            $this->data = $data;
            require_once $this->getTemplatePath();
        }

        public function getTemplatePath() {
            return $this->templatesDir.$this->templateName.'.template.php';
        }

        public function getPartialPath() {
            return $this->partialsDir.$this->partialName.'.partial.php';
        }
    }
?>