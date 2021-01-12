<?php
  class MessageModel extends BaseModel {
    protected $entityName = 'message';
    protected $properties = ['name', 'email', 'phone', 'content'];
  }
?>
