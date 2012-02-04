<?php
/**
 * Nette database model loader
 * @autor Petr Babicka
 */
class Model extends Nette\Object {
    /** @var array Models pool */
    private $models = array();
    /** @var \Nette\Database\Connection */
    private $connection;
    
    public function __construct(\Nette\Database\Connection $connection) {
        $this->connection = $connection;
    }
    
    /**
     * Return instance of model (short form)
     * example: $this->model->Comments();
     * @return Nette\Database\Table\Selection
     */
    public function __call($model, $arg) {
        return $this->getModel($model);
    }
    
    /**
     * Return instance of model
     * example: $this->model->getModel("Comments");
     * @return Nette\Database\Table\Selection
     */   
    public function getModel($model) {
        if (!isset($this->models[$model])) {
            $class = 'Model\\' . ucfirst($model);
            $this->models[$model] = new $class($this->connection);
	}

	return $this->models[$model];        
    }
}
?>
