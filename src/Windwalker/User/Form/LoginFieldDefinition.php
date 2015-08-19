<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

namespace Windwalker\User\Form;

use Windwalker\Filter\InputFilter;
use Windwalker\Form\Field\AbstractField;
use Windwalker\Form\Field\PasswordField;
use Windwalker\Form\Field\TextField;
use Windwalker\Form\FieldDefinitionInterface;
use Windwalker\Form\Form;
use Windwalker\Validator\Rule\EmailValidator;

/**
 * The LoginFormDefinition class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class LoginFieldDefinition implements FieldDefinitionInterface
{
	/**
	 * Define the form fields.
	 *
	 * @param Form $form The Windwalker form object.
	 *
	 * @return  void
	 */
	public function define(Form $form)
	{
		$form->addField(
			new TextField(
				'username',
				'Username',
				array(
					'required' => true
				)
			)
		);

		$form->addField(
			new PasswordField(
				'password',
				'Password',
				array(
					'required' => true
				)
			)
		);
	}
}
 