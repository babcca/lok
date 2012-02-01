<?php //netteCache[01]000387a:2:{s:4:"time";s:21:"0.11024800 1327340946";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:65:"D:\projects\php\www.lokola.cz\app\templates\Homepage\signin.latte";i:2;i:1327340784;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"2926128 released on 2012-01-19";}}}?><?php

// source file: D:\projects\php\www.lokola.cz\app\templates\Homepage\signin.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'y6n47f99r1')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb219eeec084_content')) { function _lb219eeec084_content($_l, $_args) { extract($_args)
?>
<fb:login-button registration-url="https://developers.facebook.com/docs/plugins/registration" />
<iframe src="https://www.facebook.com/plugins/registration.php?
             client_id=106523352701146&
             redirect_uri=http%3A%2F%2Fltest.php5.cz%2Fwww%2Fsign%2Fvalidate%2F&
             fields=name,gender,location,email"
        scrolling="auto"
        frameborder="no"
        style="border:none"
        allowTransparency="true"
        width="100%"
        height="330">
</iframe>
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
if (!$_l->extends) { call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()); }  
// epilog Nette\Latte\Macros\UIMacros

// template extending support
if ($_l->extends) {
	ob_end_clean();
	Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
