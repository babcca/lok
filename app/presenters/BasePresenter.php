<?php

/**
 * Base class for all application presenters.
 *
 * @author     John Doe
 * @package    MyApplication
 */

require_once LIBS_DIR.'/Facebook/facebook.php'; 

abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /* @var Model */
    protected $model;
    
    protected function startup() {
        parent::startup();
        // initialize model service
        $this->model = $this->getService("model"); 
    }
 }
