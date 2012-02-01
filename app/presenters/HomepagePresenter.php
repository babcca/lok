<?php

/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */

use Nette\Application\UI,
	Nette\Diagnostics\Debugger;

class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
    $this->template->records = $this->getModel("record")->GetAllRecords();
    //$this->invalidateControl('ahoj');
    $this->template->results = "ahojky";
    
	}
	
	protected function createComponentSearch() {
        $search = new SearchControl;
        //$search->addComponent(new ResultControl, "lkl_result");
        $form = new UI\Form;
        $form->addComponent($search, "lkl_search");
        $form->addSubmit('save', 'Hledat');
        $form->onSuccess[] = callback($this, "searchingSubmitted");
        //$this->addComponent($search, "search");
        return $form;
     //$search = new SearchControl;
	 //$search->invalidateControl();
	 //return $search;
  }
  protected function createComponentResult() {
        $result = new ResultControl;
        $result->invalidateControl();
        $this->addComponent($result, "result");
        
     //$search = new SearchControl;
	 //$search->invalidateControl();
	 //return $search;
  }
  
  public function searchingSubmitted($form) {
        $values = $form->getValues();
        $this->template->results = $values["search_what"];
        //$form->invalidateControl('show');
        $form->getComponents();
        $form->getPresenter()->invalidateControl($form->getName());
        //  Debugger::dump($form->getComponents()->lkl_search);
        Debugger::dump($values);
    
    }
}
