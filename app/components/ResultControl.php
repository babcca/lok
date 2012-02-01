<?php

use Nette\Application\UI\Control;

/**
 * The Fifteen game control
 *
 * @author
 */
 
 /**
  * Stara se o zobrazeni vyhledavciho formulare, prozatim staci bez filtru
  */   
class ResultControl extends Control
{
    private $count = 0;
	public function __construct()
	{
		parent::__construct();
	}
	                  
    public function handleSearch() {
        ++$this->count;
    }
     
    public function render() {
        echo "rendeer ahoj ".++$this->count;
    }
}
