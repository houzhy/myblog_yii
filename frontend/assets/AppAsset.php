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
//        'css/site.css',
	    'css/bootstrap.css',
	    'css/themify-icons.css',
	    'css/theme.css',
	    'css/custom.css'
    ];
    public $js = [
    	'js/jquery.min.js',
	    'js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
