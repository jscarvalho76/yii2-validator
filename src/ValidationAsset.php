<?php

namespace jeffersoncarvalho\validator;

use yii\web\AssetBundle;

class ValidationAsset extends AssetBundle
{
    public $sourcePath = '@jeffersoncarvalho/validator/assets';
    public $js = [
        'yiiJeff.validation.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
