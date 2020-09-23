# Validator for YII2

Yii2 Extension that provide validators and features for brazilian localization

* Pis

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

	class PersonForm extends Model
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

