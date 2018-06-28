<?php

namespace frontend\assets;
use yii\web\AssetBundle;

/**
 * @author Admin
 */

class BlogAsset extends AssetBundle {
     public $css = [
        'css/blog/font-awesome.css',
        'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'css/blog/clean-blog.min.css',
    ];
    
    public $js = [
        'js/blog/bootstrap.bundle.min.js',
        'js/blog/clean-blog.min.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
         'yii\bootstrap\BootstrapAsset',
    ];
}
