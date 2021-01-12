<?php
  abstract class BaseModel {
    protected static $pdo;
    protected $host = 'localhost';
    protected $dbName = 'architect_project';
    protected $user = 'root';
    protected $password = '';
    protected $entityName;
    protected $data = array();
    protected $properties = array();

    // TODO remove me
    public function __get($prop) {
      if (array_key_exists($prop, $this->data)) {
        return $this->data[$prop];
      }
    }

    function __construct() {
      if (is_null(self::$pdo)) {
        self::$pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
      }
    }

    public function get($property) {
      if (array_key_exists($property, $this->data)) {
        return $this->data[$property];
      }
    }

    public function set($property, $value) {
      $this->data[$property] = $value;
    }

    public function getById($id) {
      $stmt = self::$pdo->prepare("SELECT * FROM {$this->entityName} WHERE id=:id");
      $stmt->execute(['id' => $id]);
      $this->data = $stmt->fetch();
    }

    public function save() {
      // FIXME continue here see why the request is not working
      $properties = implode(',', array_keys($this->data));
      $values = implode(',', $this->data);
      $stmt = self::$pdo->prepare("INSERT INTO {$this->entityName} {$properties} VALUES ({$this->getStmtPlaceholders()})");
      $stmt->execute($this->data);
    }

    private function getStmtPlaceholders() {
      $placeholder = array();
      foreach($this->properties as $property) {
        array_push($placeholder, ":{$property}");
      }

      return implode(', ', $placeholder);
    }
  }
?>
