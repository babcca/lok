<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.61390100 1327878711";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:88:"D:\projects\php\www.lokola.cz\www\t\examples\Fifteen\app\templates\Default.default.latte";i:2;i:1327018184;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"2926128 released on 2012-01-19";}}}?><?php

// source file: D:\projects\php\www.lokola.cz\www\t\examples\Fifteen\app\templates\Default.default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd5ms7vgcve')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _round
//
if (!function_exists($_l->blocks['_round'][] = '_lb7fe5919b40__round')) { function _lb7fe5919b40__round($_l, $_args) { extract($_args); $_control->validateControl('round')
?>round #<?php echo Nette\Templating\Helpers::escapeHtml($presenter['fifteen']->round + 1, ENT_NOQUOTES) ;
}}

//
// block _flash
//
if (!function_exists($_l->blocks['_flash'][] = '_lbf96037fcc3__flash')) { function _lbf96037fcc3__flash($_l, $_args) { extract($_args); $_control->validateControl('flash')
;if (isset($flash)): ?>
<h2><?php echo Nette\Templating\Helpers::escapeHtml($flash, ENT_NOQUOTES) ?></h2><?php endif ;
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="author" content="David Grudl" />
	<meta name="copyright" content="David Grudl" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo htmlSpecialChars($basePath) ?>/css/style.css" />

	<title>Fifteen - Nette Framework example</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/fifteen.js" type="text/javascript"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.nette.js" type="text/javascript"></script>
</head>

<body>
	<h1>Fifteen example &ndash; <span id="<?php echo $_control->getSnippetId('round') ?>
"><?php call_user_func(reset($_l->blocks['_round']), $_l, $template->getParameters()) ?>
</span></h1>

	<div id="<?php echo $_control->getSnippetId('flash') ?>"><?php call_user_func(reset($_l->blocks['_flash']), $_l, $template->getParameters()) ?>
</div>
	<p><a class="ajax" href="<?php echo htmlSpecialChars($_control->link("fifteen:shuffle!")) ?>
">Shuffle!</a></p>

<?php $_ctrl = $_control->getComponent("fifteen"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</body>
</html>
<?php
// epilog Nette\Latte\Macros\UIMacros

// template extending support
if ($_l->extends) {
	ob_end_clean();
	Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
