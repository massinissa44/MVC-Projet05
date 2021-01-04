<?php
  require_once MODELS_DIR.'/base.model.php';
  require_once MODELS_DIR.'/project.model.php';

  class ProjectController extends BaseController {
    protected $partialName = 'project';

    public function run() {
      if (!isset($_GET['id']) || empty($_GET['id'])) {
        $this->router->redirectToPage('not-found');
      }

      $id = $_GET['id'];
      $project = new ProjectModel();
      $project->getById($id);

      $view = new View($this->partialName, $this->templateName);
      $view->render($project);
    }
  }
?>
