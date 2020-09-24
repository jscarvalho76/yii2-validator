# Validator for YII2

Yii2 Extension - validador de PIS/Pasep para Brasil

* Pis

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
[![Latest Stable Version](https://poser.pugx.org/jeffersoncarvalho/validator/v)](//packagist.org/packages/jeffersoncarvalho/validator)
[![Total Downloads](https://poser.pugx.org/jeffersoncarvalho/validator/downloads)](//packagist.org/packages/jeffersoncarvalho/validator)
[![Version](https://poser.pugx.org/jeffersoncarvalho/validator/version)](//packagist.org/packages/jeffersoncarvalho/validator)

## Installation with Composer
If you're using Composer to manage dependencies, you can use

    $ composer require jeffersoncarvalho/validator

or you can include the following in your composer.json file:

    {
        "require": {
            "jeffersoncarvalho/validator": "~1.0"
        }
    }

or you can include the following in your composer.json file:

    {
        "require": {
             "jeffersoncarvalho/validator": "~1.0"
        }
    }
	
	
## Usage

Add the rules as the following example


	use Yii;
	use yii\base\Model;
	use jeffersoncarvalho\validator\PisPasepValidator

	class PessoaForm extends Model
	{
		public $pis;

		/**
		* @return array the validation rules.
		*/
		public function rules()
		{
			return [
				// PIS validator
				['pis', PisPasepValidator::className()],
			];
		}
	}

