<?php
  abstract class BaseModel {
    protected $pdo;
    protected $host = 'test';
    protected $dbName = 'test';
    protected $user = 'test';
    protected $password = 'test';
    protected $entityName;
    protected $data = array();

    public function __get($prop) {
      if (array_key_exists($prop, $this->data)) {
        return $this->data[$prop];
      }
    }

    __construct() {
      if (is_null($this->pdo)) {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
      }
    }

    public function getById($id) {
      $stmt = $this->$pdo->prepare("SELECT * FROM $this->entityName WHERE id=?");
      $stmt->execute(['id' => $id]);
      $this->data = $stmt->fetch();
    }
  }
?>
