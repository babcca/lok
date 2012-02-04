<?php

/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */

use Nette\Application\UI,
        Nette\Diagnostics\Debugger;

final class HomepagePresenter extends BasePresenter
{

    public function renderDefault()
    {
        $this->template->results = "ahojky";
    }	
}
