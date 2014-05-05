<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator {

	protected $rules = [
		'email'    => 'required|email',
		'password' => 'required'
	];

} 