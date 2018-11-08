<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/custom.css',
        'css/pricing.css',
    ];
    public $js = [
        'js/jquery.min.js',
        
        'js/bootstrap.min.js',
    ];

    public $depends = [
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
