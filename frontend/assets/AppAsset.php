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
        'css/site.css',
        'css/boosttrap.min.css',
        'css/elegant-icons.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.min.css',
        'css/slick.css',
        'css/slicknav.min.css',
        'css/style.css',
        'css/style.css.map',
        
    ];
    public $js = [
        'js/booststrap.min.js',
        'js/jquery-3.3.1.min.js',
        'js/jquery.slicknav.js',
        'js/main.js',
        'js/owl.carousel.js',
        'js/slick.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
