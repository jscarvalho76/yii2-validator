<?php

namespace jeffersoncarvalho\validator;

use yii\helpers\Json;
use Yii;

class PisPasepValidator extends DocumentValidator
{

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = Yii::t('yii', "{attribute} is invalid.");
        }
    }

    /**
     * @inheritdoc
     */
    protected function validateValue($value)
    {
        $pisPasep = preg_replace('/[^0-9_]/', '', $value);
        $valid = strlen($pisPasep) == 11;

        if ($valid) {
            $pisPasep = str_split($pisPasep, 1);
            $sum = (3 * $pisPasep[0]) + (2 * $pisPasep[1]) + (9 * $pisPasep[2]) + (8 * $pisPasep[3]) + (7 * $pisPasep[4]) + (6 * $pisPasep[5]) +
                (5 * $pisPasep[6]) + (4 * $pisPasep[7]) + (3 * $pisPasep[8]) + (2 * $pisPasep[9]);

            $dv = (11 - ($sum % 11));
            $dv = ($dv === 10 || $dv === 11) ? 0 : $dv;
            $valid = ($pisPasep[10] == $dv);
        }

        return ($valid) ? [] : [$this->message, []];
    }

    /**
     * @inheritdoc
     */
    public function clientValidateAttribute($object, $attribute, $view)
    {
        $options = [
            'message' => Yii::$app->getI18n()->format($this->message, [
                'attribute' => $object->getAttributeLabel($attribute),
            ], Yii::$app->language),
        ];

        if ($this->skipOnEmpty) {
            $options['skipOnEmpty'] = 1;
        }

        ValidationAsset::register($view);
        return 'yiiJeff.validation.pis(value, messages, ' . Json::encode($options) . ');';
    }

}
