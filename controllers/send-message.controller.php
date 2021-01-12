<?php
  require_once MODELS_DIR.'/base.model.php';
  require_once MODELS_DIR.'/message.model.php';

  class SendMessageController extends BaseController {
    protected $properties = ['name', 'email', 'phone', 'content'];

    public function run() {
      if (!isset($_POST['content']) || empty($_POST['content'])) {
        // TODO set error in $_SESSION and display it in contact view
        $this->router->redirectToPage($_SERVER['HTTP_REFERER']);
      }

      $message = new MessageModel();
      foreach($this->properties as $property) {
        $message->set($property, $_POST[$property]);
      }
      $message->save();

      $this->router->redirectToPage($_SERVER['HTTP_REFERER']);
    }
  }
?>