<?php
  require_once MODELS_DIR.'/base.model.php';

  class ProjectController extends BaseController {
    private $partialName = 'project';

    public function run() {
      if (!isset($_GET['id']) || empty($_GET['id'])) {
        $this->router->redirectToPage('not-found');
      }

      $id = $_GET['id'];
      $project = new ProjectModel();
      $project->getById($id);

      $view = new View($this->partialName);
      $view->render($project);
    }
  }
?>
