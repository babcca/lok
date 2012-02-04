<?php

use Nette\Application\UI, 
        Nette\Diagnostics\Debugger;

/**
 * Comments control
 *
 * @author Petr Babicka
 */
class CommentsControl extends UI\Control
{
    /* @var Model\Comments */
    private $model; // Model accesing record comments
    /** @persistent */
    public $record; // maybe record object;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function setModel($model) { $this->model = $model; }
    public function setRecordId($id) { $this->record = $id; }
    
    protected function createComponentAddCommentForm()
    {
        $form = new UI\Form;
        $form->addTextArea('text')
            ->isRequired();
        $form->addSubmit("post");
        // form add rating component
        $form->onSuccess[] = callback($this, "addComment");
        return $form;
    }
    protected function createComponentCommentRating() {
        return new UI\Multiplier(function ($id) {
           $rating = new RatingControl();
           $rating->isReadonly(true);
           $rating->setComment($id);
           return $rating;
        });
    }
    public function addComment(UI\Form $form)
    {
        $values = $form->getValues();
        $this->flashMessage("Napsal jste nam {$values['text']}");
        $this->redirect("this");
    }
    
    public function handleAgree($comment_id) {
        $this->flashMessage("Souhlasite s komentarem $comment_id");
        $this->redirect("this");
    
    }
    
    public function handleDisagree($comment_id) {
        $this->flashMessage("Nesouhlasite s komentarem $comment_id");
        $this->redirect("this");
    
    }
    public function render() 
    {
        $template = $this->template;
        //Debugger::dump($this->model->getComments($this->record)->fetch());
        $template->comments = $this->model->getComments($this->record);
        $template->setFile(__DIR__."/comments.latte");
        $template->render();
    }
    
}
