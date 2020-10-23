<?php
  require_once MODELS_DIR.'/base.model.php';

  class ProjectController extends BaseController {
    public function run() {
      if (!isset($_GET['id']) || empty($_GET['id'])) {
        $this->router->redirectToPage('not-found')
      }

      $id = $_GET['id'];
      $project = new ProjectModel();
      $project->getById($id);

      $view = new View('project');
      $view->render($project);
    }
  }
?>
