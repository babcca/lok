<?php
  namespace Lokola;
  
  use Nette\DI\IContainer,
      Nette\Diagnostics\Debugger,
      //Models\Panel,
      PDO,
      NotORM,
      NotORM_Cache_Session,
      NotORM_Structure_Convention;
      
  class ModelLoader extends \Nette\Object {
    private $connection = null;
    private $models = null;
    public static function dbConnect(IContainer $container) {
      $db_option = $container->params['database']["default"];
      
      $pdo = new PDO($db_option["dsn"], $db_option["user"], $db_option["password"]);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $connection = new NotORM($pdo);
      
      if ($db_option["profiler"]) {
        $panel = Panel::getInstance();
        //$panel->setPlatform($container->params['database']["driver"]);
        Debugger::addPanel($panel);
        
        $connection->debug = function($query, $parameters) {
          Panel::getInstance()->logQuery($query, $parameters);
        };
      }
      
      return $connection;
    }
    
    public function __construct($connection) {
      $this->connection = $connection;
    }
    
    public function Ahoj() {
      var_dump('Ahoj');
    }
  
  }
  
  
?>