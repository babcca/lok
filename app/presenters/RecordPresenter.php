<?php

/**
 * Toto je nenom pro testovaci ucely, bude prepsano na komponentu
 * Presentery budou az jednotlive stranky, skladajici se z komponent
 *
 * @author Petr Babicka
 */
use Nette\Diagnostics\Debugger;

class RecordPresenter extends BasePresenter 
{
    /* @var int */
    private $record_id;

    public function startup() {
        parent::startup();  
    }
    
    public function renderDefault($record) 
    {
        $this->record_id = $record;
        $this->template->record = $this->model->Records()->getRecordById($record)->fetch();
    }
    
    protected function createComponentComments($name) {
        $comments = new CommentsControl($this, $name);
        $comments->setRecordId($this->record_id);
        $comments->setModel($this->model->Comments());
        return $comments;
    }
}