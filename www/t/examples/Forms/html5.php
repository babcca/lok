<?php

/**
 * Nette\Forms and HTML5.
 *
 * - for the best experience, use the latest version of browser (Internet Explorer 9, Firefox 4, Chrome 5, Safari 5, Opera 9)
 */


require __DIR__ . '/../../Nette/loader.php';

use Nette\Forms\Form,
	Nette\Diagnostics\Debugger;

Debugger::enable();


// Define form with validation rules
$form = new Form;

$form->addGroup();

$form->addText('query', 'Search:')
	->setType('search')
	->setAttribute('autofocus');

$form->addText('count', 'Number of results:')
	->setType('number')
	->setDefaultValue(10)
	->addRule($form::INTEGER, 'Must be numeric value')
	->addRule($form::RANGE, 'Must be in range from %d to %d', array(1, 100));

$form->addText('precision', 'Precision:')
	->setType('range')
	->setDefaultValue(50)
	->addRule($form::INTEGER, 'Precision must be numeric value')
	->addRule($form::RANGE, 'Precision must be in range from %d to %d', array(0, 100));

$form->addText('email', 'Send to email:')
	->setType('email')
	->setAttribute('autocomplete', 'off')
	->setAttribute('placeholder', 'Optional, but Recommended')
	->addCondition($form::FILLED) // conditional rule: if is email filled, ...
		->addRule($form::EMAIL, 'Incorrect email address'); // ... then check email

$form->addSubmit('submit', 'Send');



// Check if form was successfully submitted?
if ($form->isSubmitted() && $form->isValid()) {
	echo '<h2>Form was submitted and successfully validated</h2>';

	Debugger::dump($form->values);

	exit; // here is usually redirect to another page
}



// Render form
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>Nette\Forms and HTML5 | Nette Framework</title>

	<style type="text/css">
	.required {
		color: maroon
	}

	fieldset {
		padding: .5em;
		margin: .5em 0;
		background: #E4F1FC;
		border: 1px solid #B2D1EB;
	}

	input.button {
		font-size: 120%;
	}

	th {
		width: 10em;
		text-align: right;
	}
	</style>
	<link rel="stylesheet" type="text/css" media="screen" href="files/style.css" />
	<script src="http://nette.github.com/resources/js/netteForms.js"></script>
</head>

<body>
	<h1>Nette\Forms and HTML5</h1>

	<?php echo $form ?>
</body>
</html>
