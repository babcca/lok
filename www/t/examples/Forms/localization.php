<?php

/**
 * Nette\Forms localization example (with Zend_Translate).
 */


require __DIR__ . '/../../Nette/loader.php';

// set_include_path();
include_once 'Zend/Translate.php';

if (!class_exists('Zend_Translate')) {
	die('This example requires Zend Framework');
}

use Nette\Forms\Form,
	Nette\Diagnostics\Debugger,
	Nette\Utils\Html;

Debugger::enable();


class MyTranslator extends Zend_Translate implements Nette\Localization\ITranslator
{
	/**
	 * Translates the given string.
	 * @param  string   message
	 * @param  int      plural count
	 * @return string
	 */
	public function translate($message, $count = NULL)
	{
		return parent::translate($message);
	}
}


$countries = array(
	'Europe' => array(
		'CZ' => 'Czech Republic',
		'SK' => 'Slovakia',
	),
	'US' => 'USA',
	'?'  => 'other',
);

$sex = array(
	'm' => 'male',
	'f' => 'female',
);



$translator = new MyTranslator('gettext', __DIR__ . '/messages.mo', 'cs');
$translator->setLocale('cs');


// Define form with validation rules
$form = new Form;
$form->setTranslator($translator);

// group Personal data
$form->addGroup('Personal data');
$form->addText('name', 'Your name:')
	->setRequired('Enter your name');

$form->addText('age', 'Your age:')
	->setRequired('Enter your age')
	->addRule($form::INTEGER, 'Age must be numeric value')
	->addRule($form::RANGE, 'Age must be in range from %d to %d', array(10, 100));

$form->addRadioList('gender', 'Your gender:', $sex);

$form->addText('email', 'Email:')
	->setEmptyValue('@')
	->addCondition($form::FILLED) // conditional rule: if is email filled, ...
		->addRule($form::EMAIL, 'Incorrect email address'); // ... then check email


// group Shipping address
$form->addGroup('Shipping address')
	->setOption('embedNext', TRUE);

$form->addCheckbox('send', 'Ship to address')
	->addCondition($form::EQUAL, TRUE) // conditional rule: if is checkbox checked...
		->toggle('sendBox'); // toggle div #sendBox


// subgroup
$form->addGroup()
	->setOption('container', Html::el('div')->id('sendBox'));

$form->addText('street', 'Street:');

$form->addText('city', 'City:')
	->addConditionOn($form['send'], $form::EQUAL, TRUE)
		->addRule($form::FILLED, 'Enter your shipping address');

$form->addSelect('country', 'Country:', $countries)
	->setPrompt('Select your country')
	->addConditionOn($form['send'], $form::EQUAL, TRUE)
		->addRule($form::FILLED, 'Select your country');


// group Your account
$form->addGroup('Your account');

$form->addPassword('password', 'Choose password:')
	->setRequired('Choose your password')
	->addRule($form::MIN_LENGTH, 'The password is too short: it must be at least %d characters', 3);

$form->addPassword('password2', 'Reenter password:')
	->addConditionOn($form['password'], $form::VALID)
		->addRule($form::FILLED, 'Reenter your password')
		->addRule($form::EQUAL, 'Passwords do not match', $form['password']);

$form->addUpload('avatar', 'Picture:');

$form->addHidden('userid');

$form->addTextArea('note', 'Comment:');


// group for buttons
$form->addGroup();

$form->addSubmit('submit', 'Send');



// Check if form was submitted?
if ($form->isSubmitted()) {

	// Check if form is valid
	if ($form->isValid()) {
		echo '<h2>Form was submitted and successfully validated</h2>';

		Debugger::dump($form->values);

		exit; // here is usually redirect to another page
	}

} else {
	// not submitted, define default values
	$defaults = array(
		'name'    => 'John Doe',
		'userid'  => 231,
		'country' => 'CZ', // Czech Republic
	);

	$form->setDefaults($defaults);
}



// Render form
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>Nette\Forms localization example | Nette Framework</title>

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
	<h1>Nette\Forms localization example</h1>

	<?php echo $form ?>
</body>
</html>
