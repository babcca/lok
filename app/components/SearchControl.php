<?php

use Nette\Application\UI;

/**
 * The Fifteen game control
 *
 * @author
 */
 
 /**
  * Stara se o zobrazeni vyhledavciho formulare, prozatim staci bez filtru
  */   
class SearchControl extends UI\Control
{
	private $count = 0;
	
    public function __construct()
	{
		parent::__construct();
		$this->monitor('Nette\Forms\Form');
	}
	
	public function createComponentSearch()
    {
        $form = new UI\Form;                                       
        $form->addSubmit('save', 'Hledat');
        $form->onSuccess[] = callback($this, "searchingSubmitted");
    }
    
	protected function attached($form) 
    {
	   //parent::attached($form);
	   if (!($form instanceof Nette\Forms\Form)) return;
	   
       $form->addText("search_what", "Co hledat:". ++$this->count); 
    }       
	
    public function handleAhoj() 
    {
	   echo "ahoj";
    } 
    
    public function handleProcess() {
        echo "bbbb";
    }
    
    public function render() {}
}

