<?php

/**
 * Nette\Forms Cross-Site Request Forgery (CSRF) protection example.
 */


require __DIR__ . '/../../Nette/loader.php';

use Nette\Forms\Form,
	Nette\Diagnostics\Debugger;

Debugger::enable();



$form = new Form;

$form->addProtection('Security token did not match. Possible CSRF attack.', 3);

$form->addHidden('id')->setDefaultValue(123);
$form->addSubmit('submit', 'Delete item');



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

	<title>Nette\Forms CSRF protection example | Nette Framework</title>

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
</head>

<body>
	<h1>Nette\Forms CSRF protection example</h1>

	<?php echo $form ?>
</body>
</html>
