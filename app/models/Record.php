<?php
  namespace Model;
  use Nette\Diagnostics\Debugger;
  
  class Record extends \Nette\Object {
    private $connection;
    
    public function __construct($connection) {
      $this->connection = $connection;
    }
    
    public function GetAllRecords() {
      return $this->connection->records();
    }
    
    public function GetComments($record) {
      return $record->record_comments();
    }
  }
?>