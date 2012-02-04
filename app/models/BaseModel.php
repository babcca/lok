<?php
namespace Model;
/**
 * Base model
 * @author: Petr Babicka 
 */
class BaseModel extends \Nette\Object {
    /** @var */
    protected $connection;
    /** @var Nette\Database\Table\Selection */
    protected $table;
    
    public function __construct($connection, $table_name) {
        $this->connection = $connection;
        $this->table = $this->connection->table($table_name);
    }
    
    public function getTable() {
        return $this->table;
    }
}
?>
