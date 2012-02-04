<?php
  namespace Model;
  use Nette\Diagnostics\Debugger;
  
  class Records extends \Nette\Object {
    /** @var Nette\Database\Table\Selection */
    private $table;
    
    public function __construct($connection) {
        $this->table = $connection->table("records");
    }
    
    public function getAllRecords() {
      return $this->table;
    }
    
    public function getRecordById($id) {
        return $this->table->where("id", $id);
    }
  }
?>