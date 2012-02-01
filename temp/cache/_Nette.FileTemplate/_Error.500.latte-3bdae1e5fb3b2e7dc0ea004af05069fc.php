<?php //netteCache[01]000381a:2:{s:4:"time";s:21:"0.10024300 1327332773";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:59:"D:\projects\php\www.lokola.cz\app\templates\Error\500.latte";i:2;i:1327018186;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"2926128 released on 2012-01-19";}}}?><?php

// source file: D:\projects\php\www.lokola.cz\app\templates\Error\500.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'luq5d3mbl5')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
// ?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex" />
<style>
	body { color: #333; background: white; width: 500px; margin: 100px auto }
	h1 { font: bold 47px/1.5 sans-serif; margin: .6em 0 }
	p { font: 21px/1.5 Georgia,serif; margin: 1.5em 0 }
	small { font-size: 70%; color: gray }
</style>

<h1>Server Error</h1>

<p>We're sorry! The server encountered an internal error and
was unable to complete your request. Please try again later.</p>

<p><small>error 500</small></p>
