<?php
/**
 * @link https://github.com/yiibr/yii2-br-validator
 * @license https://github.com/yiibr/yii2-br-validator/blob/master/LICENSE
 */

namespace jeffersoncarvalho\validator;

use yii\web\AssetBundle;


class ValidationAsset extends AssetBundle
{
    public $sourcePath = '@jeffersoncarvalho/validator/assets';
    public $js = [
        'validation.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
