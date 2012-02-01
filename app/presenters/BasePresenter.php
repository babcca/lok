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
  protected $facebook;
  protected function getModel($model) {
    return $this->context->modelLoader->getModel($model);
  }
  
  protected function startup() {
    parent::startup();
    /* Prepsat cele user auth :( rozmyslet jak bude vypadat prihlasovaci politika */
    $this->facebook = new Facebook(array(
      "appId"=>"106523352701146",
      "secret"=>"3943380c0e7ac42c48c83592cec8b2b8"));
      
	  $user = $this->facebook->getUser(); // ma byt v user auth 
	  if (!$user) {
      $this->template->loged_in = true;
    }
    else {
      $this->template->loged_in = false;
    }
  }
}
