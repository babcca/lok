<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.03924600 1327889548";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:66:"D:\projects\php\www.lokola.cz\app\templates\Homepage\default.latte";i:2;i:1327889536;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"2926128 released on 2012-01-19";}}}?><?php

// source file: D:\projects\php\www.lokola.cz\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qhmwvk0i0v')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcdb22a3a1f_content')) { function _lbcdb22a3a1f_content($_l, $_args) { extract($_args)
?>
<div id="<?php echo $_control->getSnippetId('ahoj') ?>"><?php call_user_func(reset($_l->blocks['_ahoj']), $_l, $template->getParameters()) ?>
</div>
 
<?php $_ctrl = $_control->getComponent("search"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
<a href="<?php echo htmlSpecialChars($_control->link("Homepage:Signin")) ?>">Zaregistrovat</a><br />
<div id="<?php echo $_control->getSnippetId('show') ?>"><?php call_user_func(reset($_l->blocks['_show']), $_l, $template->getParameters()) ?>
</div>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($records) as $record): ?>
  <?php echo Nette\Templating\Helpers::escapeHtml($record["name"], ENT_NOQUOTES) ?><br />
  <?php echo Nette\Templating\Helpers::escapeHtml($record["description"], ENT_NOQUOTES) ?><br />

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($record->record_comments()) as $comment): ?>
      <?php echo Nette\Templating\Helpers::escapeHtml($comment["creation_time"], ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($comment->user["email"], ENT_NOQUOTES) ?><br />
      <?php echo Nette\Templating\Helpers::escapeHtml($comment["content"], ENT_NOQUOTES) ?><br />
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ;
}}

//
// block _ahoj
//
if (!function_exists($_l->blocks['_ahoj'][] = '_lb5ed41a7bfd__ahoj')) { function _lb5ed41a7bfd__ahoj($_l, $_args) { extract($_args); $_control->validateControl('ahoj')
;
}}

//
// block _show
//
if (!function_exists($_l->blocks['_show'][] = '_lb029b2a07b9__show')) { function _lb029b2a07b9__show($_l, $_args) { extract($_args); $_control->validateControl('show')
;echo Nette\Templating\Helpers::escapeHtml($results, ENT_NOQUOTES) ;
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lba0e8c73d1f_head')) { function _lba0e8c73d1f_head($_l, $_args) { extract($_args)
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extends) ? FALSE : $template->_extends; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (!$_l->extends) { call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()); } ?>

<?php if (!$_l->extends) { call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()); }  
// epilog Nette\Latte\Macros\UIMacros

// template extending support
if ($_l->extends) {
	ob_end_clean();
	Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
