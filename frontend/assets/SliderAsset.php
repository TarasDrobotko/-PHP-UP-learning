<?php

namespace frontend\assets;
use yii\web\AssetBundle;
/**
 * Description of SliderAsset
 *
 * @author Admin
 */
class SliderAsset extends AssetBundle {
    public $css = [
        'css/slider/default.css',
        'css/slider/nivo-slider.css',
        //'css/slider/default.css',
    ];
    
    public $js = [
        'js/slider/jquery.nivo.slider.pack.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
