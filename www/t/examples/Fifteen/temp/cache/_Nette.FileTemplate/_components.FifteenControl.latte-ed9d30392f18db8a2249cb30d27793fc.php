<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.70787700 1327878711";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:88:"D:\projects\php\www.lokola.cz\www\t\examples\Fifteen\app\components\FifteenControl.latte";i:2;i:1327018184;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"2926128 released on 2012-01-19";}}}?><?php

// source file: D:\projects\php\www.lokola.cz\www\t\examples\Fifteen\app\components\FifteenControl.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jqck3jm0zx')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _
//
if (!function_exists($_l->blocks['_'][] = '_lb5286943e24__')) { function _lb5286943e24__($_l, $_args) { extract($_args); $_control->validateControl(false)
?>

<table class="fifteen">
<?php for ($y = $width - 1; $y >= 0; $y--): ?>
<tr>
<?php for ($x = $width - 1; $x >= 0; $x--): ?>
	<td>
		<?php if ($clickable = $control->isClickable($x, $y, $rel)): ?><a class="ajax" rel="<?php echo htmlSpecialChars($rel) ?>
" href="<?php echo htmlSpecialChars($_control->link("Click", array($x, $y))) ?>"><?php endif ?>


		<img src="<?php echo htmlSpecialChars($basePath) ?>/images/game<?php echo $order[$x + $y * $width] ?>
.jpg" width="100" height="100" alt="<?php echo $order[$x + $y * $width]+1 ?>" />

		<?php if ($clickable): ?></a><?php endif ?>

	</td>
<?php endfor ?>
</tr>
<?php endfor ?>
</table>

<?php
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
<div id="<?php echo $_control->getSnippetId('') ?>"><?php call_user_func(reset($_l->blocks['_']), $_l, $template->getParameters()) ?>
</div><?php
// epilog Nette\Latte\Macros\UIMacros

// template extending support
if ($_l->extends) {
	ob_end_clean();
	Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
