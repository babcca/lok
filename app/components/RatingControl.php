<?php
use Nette\Application\UI, 
        Nette\Diagnostics\Debugger;

/** 
 * Rating control component
 * For interactive draw use JQuery UI Star Widget
 * @author: Petr Babicka 
 */

class RatingControl extends UI\Control {
    private $comment_id;
    private $readonly = true;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function setComment($id) { $this->comment_id = $id; }
    public function isReadonly($readonly) { $this->readonly = $readonly; }
    
    public function handleVote($rating) {
        if (($rating < 0) || ($rating > 5)) return;
        // "update record_comments set rating = (rating + $rating) where id = $this->comment_id"
        $this->flashMessage("Ohodnotil jste komentar {$this->comment_id} na $rating hvezdicek");
        $this->redirect("this");
        
    }
    /** Render small rating star */
    public function Render($rating) {
        $template = $this->template;
        $template->rating = $rating;
        $template->readonly = $this->readonly;
        $template->setFile(__DIR__.'/rating.latte');
        $template->render();
    }
}
?>
