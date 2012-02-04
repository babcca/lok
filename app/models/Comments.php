<?php
namespace Model;

use Nette\Diagnostics\Debugger,
    Nette\Environment,
    Model\BaseModel;


final class Comments extends BaseModel {
    public function __construct($connection) {
        parent::__construct($connection, "record_comments");
    }
    
    public function getComments($record_id) {
        return $this->table->where("records_id", $record_id);
    }
    
    public function insertComment($text) {
        $user = Environment::getUser();
        //$this->connection->record_comments()->insert()
    }
}
?>
